<?php

$comics = config('comics');

?>

<section>

    <div class="container">

        <div class="series-label">

            <h2>current series</h2>

        </div>

        <div class="row" id="comics-list">

            @foreach ($comics as $comic)
                <div class="column">
                    <a href="{{ url("/comic/$loop->index") }}">
                        <div class="card">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{ $comic['title'] }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>

        <div class="btn-container">

            <button>load more</button>

        </div>

    </div>

</section>
