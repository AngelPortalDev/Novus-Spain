<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class NovusController extends Controller
{
    public static function programmes(): array
    {
        return json_decode(file_get_contents(resource_path('data/programmes.json')), true, 512, JSON_THROW_ON_ERROR);
    }

    private function render(string $view, array $data = [])
    {
        return view('novus.'.$view, array_merge([
            'partials' => 'Frontend.Partials.',
            'header' => 'Frontend.Partials.header.',
            'footer' => 'Frontend.Partials.footer.',
            'elements' => 'Frontend.Partials.elements.',
            'components' => 'Frontend.Partials.components.',
            'page_title' => $data['title'] ?? 'Novus Spain',
            'categories' => config('novus.categories'), 'english' => config('novus.english'),
            'programmes' => self::programmes(), 'title' => 'Study in Spain',
            'description' => 'Explore Novus Spain, programme information, admissions and student life in Spain.',
        ], $data));
    }

    public function home()
    {
        return $this->render('home');
    }

    public function catalogue(Request $request, ?string $category = null)
    {
        abort_if($category !== null && ! array_key_exists($category, config('novus.categories')), 404);
        $input = $request->validate(['q' => 'nullable|string|max:120']);
        $query = trim($input['q'] ?? '');
        $items = array_values(array_filter(self::programmes(), fn ($item) => (! $category || $item['category'] === $category) &&
            ($query === '' || str_contains(Str::lower($item['title']), Str::lower($query)))
        ));

        return $this->render('catalogue', [
            'title' => $category ? config('novus.categories')[$category][0] : 'Explore Our Programmes',
            'description' => $category ? config('novus.categories')[$category][1] : 'Find a study area that connects with your ambitions.',
            'items' => $items, 'category' => $category, 'query' => $query,
        ]);
    }

    public function programme(string $slug, string $category)
    {
        $item = collect(self::programmes())->first(fn ($item) => $item['category'] === $category && $item['slug'] === $slug);
        abort_unless($item, 404);

        return $this->render('programme', ['title' => $item['title'], 'description' => config('novus.categories')[$category][1], 'item' => $item]);
    }

    public function english(?string $slug = null)
    {
        abort_if($slug !== null && ! array_key_exists($slug, config('novus.english')), 404);

        return $this->render('english', ['course' => $slug ? config('novus.english')[$slug] : null,
            'title' => $slug ? config('novus.english')[$slug][0] : 'English School',
            'description' => $slug ? config('novus.english')[$slug][1] : 'Find your voice. Build your confidence. Explore English language study.',
        ]);
    }

    public function page(Request $request, string $page)
    {
        $content = config('novus.pages')[$page] ?? null;
        abort_unless($content, 404);
        $selection = $request->query('programme', '');
        $choices = array_merge(array_column(self::programmes(), 'title'), array_column(config('novus.english'), 0));

        return $this->render('page', ['title' => $content[0], 'description' => $content[1], 'content' => $content,
            'page' => $page, 'selection' => is_string($selection) && in_array($selection, $choices, true) ? $selection : '',
        ]);
    }

    public function enquire(Request $request)
    {
        $choices = array_merge(array_column(self::programmes(), 'title'), array_column(config('novus.english'), 0));
        $data = $request->validate([
            'name' => 'required|string|max:120', 'email' => 'required|email|max:254',
            'phone' => 'nullable|string|max:40', 'programme' => ['nullable', 'string', Rule::in($choices)],
            'message' => 'required|string|min:10|max:4000', 'consent' => 'accepted', 'website' => 'nullable|prohibited',
        ]);
        unset($data['website']);
        $reference = (string) Str::uuid();
        $saved = Storage::disk('local')->put('novus-enquiries/'.$reference.'.enc', Crypt::encryptString(json_encode([
            'reference' => $reference, 'created_at' => now()->toIso8601String(), 'enquiry' => $data,
        ], JSON_THROW_ON_ERROR)));
        abort_unless($saved, 503, 'Your enquiry could not be saved. Please try again.');

        return back()->with('enquiry_reference', $reference);
    }
}
