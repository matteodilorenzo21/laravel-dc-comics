@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')
    <main>
        <div class="text-center">
            <h1 class="text-center text-white py-3">REGISTERED COMICS</h1>
            <span class="text-white">UPLOAD A NEW COMIC</span>
            <a id="add-comic-btn" class="mt-2 mx-2" href="{{ route('comics.create') }}">+</a>
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
                        <td>
                            <a class="text-white" href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                                <img class="comic-miniature" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                                {{ $comic->title }}
                            </a>
                        </td>
                        <td>{{ Str::limit($comic->description, 90, '...') }}</td>
                        <td>${{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>{{ $comic->artists }}</td>
                        <td>{{ $comic->writers }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection
