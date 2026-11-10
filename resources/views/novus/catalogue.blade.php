@extends('novus.layout')
@section('content')
@include('novus.hero')
<section class="rts-section-padding"><div class="container">
    <form class="mb--40" method="get" action="{{ $category ? route($category) : route('programmemes') }}"><label for="programmeme-search">Find your programme</label><div><input class="form-control mb--20" id="programmeme-search" type="search" name="q" value="{{ $query }}" maxlength="120" placeholder="Search business, computing, leadership…"><button type="submit" class="rts-theme-btn">Search</button></div></form>
    <nav class="d-flex flex-wrap gap-3 mb--30" aria-label="programmeme categories"><a href="{{ route('programmemes', ['q' => $query]) }}" @class(['active' => !$category])>All programmes</a>@foreach($categories as $slug => $group)<a href="{{ route($slug, ['q' => $query]) }}" @class(['active' => $category === $slug])>{{ $group[0] }}</a>@endforeach</nav>
    <p class="border-start border-3 p-4 mb--30">Indicative catalogue: programmeme availability, awards, fees, duration and entry requirements for Novus Education are awaiting confirmation.</p>
    <p>{{ count($items) }} {{ count($items) === 1 ? 'programmeme' : 'programmemes' }}{{ $query ? ' matching “'.$query.'”' : '' }}</p>
    <div class="row g-4">@forelse($items as $programmeme)<div class="col-lg-4 col-md-6"><a class="d-flex flex-column h-100 border p-5 rts-programme" href="{{ url($programmeme['category'].'/'.$programmeme['slug']) }}"><span class="d-block mb--20">{{ $categories[$programmeme['category']][0] }}</span><h2>{{ $programmeme['title'] }}</h2><p>Novus Education · Availability to be confirmed</p><span class="d-inline-block mt--20">View programme ↗</span></a></div>@empty<div class="col-12 p-5"><h2>No programmes found</h2><p>Try another subject or browse the complete catalogue.</p><a href="{{ route('programmemes') }}" class="d-inline-block mt--20">Reset search →</a></div>@endforelse</div>
</div></section>
@endsection
