<?php

namespace Tests\Feature;

use App\Http\Controllers\NovusController;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class NovusWebsiteTest extends TestCase
{
    public function test_all_school_and_programme_pages_render(): void
    {
        $paths = array_merge(['/', '/programmes', '/english-school'], array_map(fn ($key) => '/'.$key, array_keys(config('novus.pages'))), array_map(fn ($key) => '/'.$key, array_keys(config('novus.categories'))));
        foreach (NovusController::programmes() as $item) {
            $paths[] = '/'.$item['category'].'/'.$item['slug'];
        }
        foreach (array_keys(config('novus.english')) as $slug) {
            $paths[] = '/english-school/'.$slug;
        }
        foreach ($paths as $path) {
            $this->get($path)->assertOk()->assertSee('Novus Spain')->assertDontSee('Unipix')->assertDontSee('info@ascenciamalta')->assertDontSee('MQF');
        }
    }

    public function test_search_and_category_filters_work_together(): void
    {
        $this->get('/masters-degrees?q=entrepreneurship')->assertOk()->assertSee('1 programme')->assertSee('MA in Entrepreneurship')->assertDontSee('MBA in Leadership Excellence');
        $this->get('/programmes?q=zzzzzz')->assertOk()->assertSee('No programmes found');
        $this->get('/masters-degrees/not-a-course')->assertNotFound();
        $this->get('/english-school/not-a-course')->assertNotFound();
        $this->get('/not-a-page')->assertNotFound();
        $this->get('/admission')->assertOk()->assertSee('rts-breadcrumb')->assertDontSee('novus.css');
        $this->get('/')->assertOk()->assertSee('banner v__2')->assertSee('swiper-wrapper')->assertDontSee('ns-home-hero');
    }

    public function test_enquiry_is_validated_and_saved_encrypted_without_email(): void
    {
        Storage::fake('local');
        $this->post('/enquiries', [])->assertSessionHasErrors(['name', 'email', 'message', 'consent']);
        $this->assertSame([], Storage::disk('local')->allFiles('novus-enquiries'));
        $payload = ['name' => 'Test Student', 'email' => 'student@example.test', 'message' => 'Please tell me about programme availability.', 'consent' => '1', 'programme' => NovusController::programmes()[0]['title']];
        $this->from('/study-with-us')->post('/enquiries', $payload)->assertRedirect('/study-with-us')->assertSessionHas('enquiry_reference');
        $files = Storage::disk('local')->allFiles('novus-enquiries');
        $this->assertCount(1, $files);
        $encrypted = Storage::disk('local')->get($files[0]);
        $this->assertStringNotContainsString('student@example.test', $encrypted);
        $saved = json_decode(Crypt::decryptString($encrypted), true);
        $this->assertSame($payload['email'], $saved['enquiry']['email']);
        $this->post('/enquiries', array_merge($payload, ['programme' => 'Invented course']))->assertSessionHasErrors('programme');
        $this->post('/enquiries', array_merge($payload, ['website' => 'spam']))->assertSessionHasErrors('website');
        $this->assertCount(1, Storage::disk('local')->allFiles('novus-enquiries'));
    }
}
