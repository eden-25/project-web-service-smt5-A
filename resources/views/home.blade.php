@extends('layouts.app')

@section('content')

@include('sections.hero')

<main class="max-w-7xl mx-auto px-4 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
        <div class="lg:col-span-3">
            @include('sections.berita-terbaru')
            @include('sections.berita-pilihan')
        </div>

        @include('sections.sidebar')
    </div>
</main>

@endsection
