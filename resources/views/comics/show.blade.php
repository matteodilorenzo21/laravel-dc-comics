@extends('layouts.main')

@section('title', $comic->title)

@section('main-content')
    <section id="comic-details">
        <figure>
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="comic-thumb">
        </figure>

        <div class="container">
            <div class="row">
                <div class="col" id="upper-left">
                    <h1>{{ $comic->title }}</h1>
                    <div class="available-band d-flex space-between">
                        <p>U.S Price: <span>{{ $comic->price }}</span></p>
                        <button class="available-btn">check availability</button>
                    </div>
                    <div class="comic-description">
                        <p>{{ $comic->description }}</p>
                    </div>
                </div>
                <div class="col" id="upper-right">
                    <p>ADVERTISEMENT</p>
                    <figure>
                        <img src="{{ asset('images/adv.jpg') }}" alt="ad">
                    </figure>
                </div>
            </div>
            <div class="row">
                <div class="col" id="lower-left">
                    <h3>Talent</h3>
                    <div id="upper-talent">
                        <div class="row">
                            <div class="col talent-left">
                                <h6>Art by:</h6>
                            </div>
                            <div class="col talent-right">
                                <p>
                                    @php
                                        $artists = json_decode($comic->artists);
                                    @endphp
                                    @foreach ($artists as $key => $artist)
                                        {{ $artist }}{{ $key < count($artists) - 1 ? ', ' : '.' }}
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="lower-talent">
                        <div class="row">
                            <div class="col talent-left">
                                <h6>Written by:</h6>
                            </div>
                            <div class="col talent-right">
                                <p>
                                    @php
                                        $writers = json_decode($comic->writers);
                                    @endphp
                                    @foreach ($writers as $key => $writer)
                                        {{ $writer }}{{ $key < count($writers) - 1 ? ', ' : '.' }}
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" id="lower-right">
                    <h3>Specs</h3>
                    <div id="upper-specs">
                        <div class="row">
                            <div class="col specs-left">
                                <h6>Series:</h6>
                            </div>
                            <div class="col specs-right">
                                <p class="specs-type">{{ $comic->series }}</p>
                            </div>
                        </div>
                    </div>
                    <div id="lower-specs">
                        <div class="row">
                            <div class="col specs-left">
                                <h6>U.S. Price:</h6>
                            </div>
                            <div class="col specs-right">
                                <p>{{ $comic->price }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col specs-left">
                                <h6>On Sale Date:</h6>
                            </div>
                            <div class="col specs-right">
                                <p>{{ $comic->sale_date }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection