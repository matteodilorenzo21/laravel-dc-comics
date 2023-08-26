<header>

    <div class="stripe">

        <div class="container">

            <a href="#">dc power visa©</a>

            <a href="#">dc additional sites</a>

        </div>

    </div>

    <div class="container d-flex">

        <figure>
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/dc-logo.png') }}" alt="DC Logo">
            </a>
        </figure>

        <nav>

            <ul>
                <li><a href="{{ route('characters') }}">CHARACTERS</a></li>
                <li><a href="{{ route('comics') }}">COMICS</a></li>
                <li><a href="{{ route('movies') }}">MOVIES</a></li>
                <li><a href="{{ route('tv') }}">TV</a></li>
                <li><a href="{{ route('games') }}">GAMES</a></li>
                <li><a href="{{ route('collectibles') }}">COLLECTIBLES</a></li>
                <li><a href="{{ route('videos') }}">VIDEOS</a></li>
                <li><a href="{{ route('fans') }}">FANS</a></li>
                <li><a href="{{ route('news') }}">NEWS</a></li>
                <li><a href="{{ route('shop') }}">SHOP</a></li>
            </ul>

        </nav>

        <div>
            <div class="searchbar">
                <input type="text" placeholder="Search">
                <i class="fas fa-search"></i>
            </div>
        </div>

    </div>
</header>
