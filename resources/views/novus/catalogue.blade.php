@extends('novus.layout')
@section('content')
@include('novus.hero')
<section class="rts-section-padding"><div class="container">
    <form class="mb--40" method="get" action="{{ $category ? route($category) : route('programmes') }}"><label for="programme-search">Find your programme</label><div><input class="form-control mb--20" id="programme-search" type="search" name="q" value="{{ $query }}" maxlength="120" placeholder="Search business, computing, leadership…"><button type="submit" class="rts-theme-btn">Search</button></div></form>
    <nav class="d-flex flex-wrap gap-3 mb--30" aria-label="Programme categories"><a href="{{ route('programmes', ['q' => $query]) }}" @class(['active' => !$category])>All programmes</a>@foreach($categories as $slug => $group)<a href="{{ route($slug, ['q' => $query]) }}" @class(['active' => $category === $slug])>{{ $group[0] }}</a>@endforeach</nav>
    <p class="border-start border-3 p-4 mb--30">Indicative catalogue: programme availability, awards, fees, duration and entry requirements for Novus Education are awaiting confirmation.</p>
    <p>{{ count($items) }} {{ count($items) === 1 ? 'programme' : 'programmes' }}{{ $query ? ' matching “'.$query.'”' : '' }}</p>
    <div class="row g-4">@forelse($items as $programme)<div class="col-lg-4 col-md-6"><a class="d-flex flex-column h-100 border p-5 rts-program" href="{{ url($programme['category'].'/'.$programme['slug']) }}"><span class="d-block mb--20">{{ $categories[$programme['category']][0] }}</span><h2>{{ $programme['title'] }}</h2><p>Novus Education · Availability to be confirmed</p><span class="d-inline-block mt--20">View programme ↗</span></a></div>@empty<div class="col-12 p-5"><h2>No programmes found</h2><p>Try another subject or browse the complete catalogue.</p><a href="{{ route('programmes') }}" class="d-inline-block mt--20">Reset search →</a></div>@endforelse</div>
</div></section>
@endsection
