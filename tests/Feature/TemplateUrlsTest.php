<?php

namespace Tests\Feature;

use Tests\TestCase;

class TemplateUrlsTest extends TestCase
{
    public function test_original_template_urls_render_without_redirects(): void
    {
        foreach (['index-two','index-three','index-four','index-five','index-sc','about-sc','admission-sc','campus-life-sc','tution-fee-sc','six-form','single-resource','senior-school','primary-school','middle-school','about','academic-area','academic','admission','alumni','athletics','blog-details','blog-grid','blog-list','blog','scholarship','program-single','notice-details','campus-life','contact','department-details','event-details','event','faculty-details','faculty-sub-details','faculty-sub','faculty','tution-fee'] as $path) {
            $this->get('/'.$path)->assertOk()->assertDontSee('novus.css');
        }
    }
}
