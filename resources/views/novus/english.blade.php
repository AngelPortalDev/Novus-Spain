@extends('novus.layout')
@section('content')
@include('novus.hero')
<section class="rts-section-padding"><div class="container">
@if($course)
<div class="row g-5"><div class="col-lg-8 program-description-area"><span class="d-block mb--20">Course availability to be confirmed</span><h2>Develop your English with purpose</h2><p>{{ $course[1] }}</p><h3>Areas to explore</h3><ul>@foreach(explode('|', $course[2]) as $topic)<li>{{ $topic }}</li>@endforeach</ul><p>These are indicative learning areas. The approved course syllabus, timetable, group size, entry level and fees for Novus Education are awaiting confirmation.</p><h3>Find the right starting point</h3><p>Tell us about your current level and what you want to achieve. Confirm any assessment requirements and course availability before booking.</p><a class="rts-theme-btn" href="{{ route('study-with-us', ['programme' => $course[0]]) }}">Enquire about this course ↗</a></div><div class="col-lg-4"><img class="img-fluid w-100 mb--30" src="{{ asset('assets/images/about/mission-2.jpg') }}" alt="Students learning together"><a class="d-inline-block mt--20" href="{{ route('english') }}">Explore all English courses →</a></div></div>
@else
<div class="rts-section mb--30"><div><span class="d-block mb--20">LANGUAGE OPENS DOORS</span><h2>English for your next chapter</h2></div></div><p class="border-start border-3 p-4 mb--30">Course types are indicative. Novus Education course availability, dates and fees are awaiting confirmation.</p><div class="row g-4">@foreach($english as $slug => $option)<div class="col-lg-4 col-md-6"><a class="d-flex flex-column h-100 border p-5" href="{{ route('english', ['slug' => $slug]) }}"><h3>{{ $option[0] }}</h3><p>{{ $option[1] }}</p><span class="d-inline-block mt--20">Explore course ↗</span></a></div>@endforeach</div>
@endif
</div></section>
@endsection
