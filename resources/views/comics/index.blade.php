@extends('layouts.main')

@section('title', 'Comics')

@php
    $comics = App\Models\Comic::all();
@endphp

@section('main-content')
    <main>
        <div class="text-center">
            <h1 class="text-center text-white pt-3">REGISTERED COMICS</h1>
            <span class="text-white">UPLOAD A NEW COMIC</span>
            <button id="add-comic-btn" class="mt-2 mx-2"
                onclick="window.location.href = '{{ route('comics.create') }}'">+</button>
        </div>

        <table class="my-3">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Series</th>
                    <th>Sale Date</th>
                    <th>Type</th>
                    <th>Artists</th>
                    <th>Writers</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td><a class="text-white" href="{{ url('/comics/' . ($loop->index + 1)) }}">
                                <img class="comic-miniature" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                                {{ $comic->title }}</a></td>
                        <td>{{ Str::limit($comic->description, 90, '...') }}</td>
                        <td>${{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>
                            @foreach (json_decode($comic->artists) as $artist)
                                {{ $artist }},
                            @endforeach
                        </td>
                        <td>
                            @foreach (json_decode($comic->writers) as $writer)
                                {{ $writer }},
                            @endforeach
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </main>
@endsection
