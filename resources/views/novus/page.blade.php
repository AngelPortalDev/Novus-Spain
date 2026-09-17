@extends('novus.layout')
@section('content')
@include('novus.hero')
<section class="rts-section-padding"><div class="container"><div class="row g-5">
<div class="col-lg-8 program-description-area"><p class="rts-section-description mb--30">{{ $content[2] }}</p>
@if(in_array($page, ['about', 'student-life', 'study-in-spain']))<img class="img-fluid w-100 mb--30" src="{{ asset('assets/images/about/'.($page === 'about' ? 'about__h2-1.jpg' : 'mission-1.jpg')) }}" alt="Learning and student life" loading="lazy">@endif
@foreach($content[3] as $heading => $text)<section class="program-about mb--30"><h2>{{ $heading }}</h2><p>{{ $text }}</p></section>@endforeach
@if($page === 'visa-requirements')<a class="rts-theme-btn" href="https://www.exteriores.gob.es/en/EmbajadasConsulados/Paginas/index.aspx" target="_blank" rel="noopener noreferrer">Find your Spanish consulate ↗</a>@endif
@if(in_array($page, ['contact', 'study-with-us']))@include('novus.form')@endif
@if($page === 'admissions')<a href="{{ route('study-with-us') }}" class="rts-theme-btn">Register your interest ↗</a>@endif
</div>
<aside class="col-lg-4"><div class="program-sidebar p-4 border"><span class="d-block mb--20">EXPLORE NOVUS SPAIN</span><h2>Useful next steps</h2><nav aria-label="Related pages">@foreach(['programmes' => 'Explore programmes', 'admissions' => 'Admissions', 'study-in-spain' => 'Study in Spain', 'visa-requirements' => 'Visa requirements', 'tuition-fees' => 'Tuition fees', 'contact' => 'Contact us'] as $slug => $label)@if($page !== $slug)<a class="d-flex justify-content-between border-bottom py-4" href="{{ route($slug) }}">{{ $label }} <span aria-hidden="true">→</span></a>@endif @endforeach</nav></div></aside>
</div></div></section>
@endsection
