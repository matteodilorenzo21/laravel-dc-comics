<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- FONTAWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>{{ env('APP_NAME') }} | Add a new comic</title>
    <link rel="icon" href="@yield('icon', asset('images/favicon.ico'))" type="image/ico">

    @vite('resources/js/app.js')
</head>

<body class="bg-secondary bg-opacity-25">

    {{-- HEADER --}}
    <header id="create-header" class="bg-dark ps-5">
        <div class="container-fluid d-flex align-items-center">

            <figure class="ms-1">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/dc-logo.png') }}" alt="DC Logo">
                </a>
            </figure>

            <nav>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="{{ route('characters') }}">CHARACTERS</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('comics.index') }}">COMICS</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('movies') }}">MOVIES</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('tv') }}">TV</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('games') }}">GAMES</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('collectibles') }}">COLLECTIBLES</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('videos') }}">VIDEOS</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('fans') }}">FANS</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('news') }}">NEWS</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('shop') }}">SHOP</a></li>
                </ul>
            </nav>
        </div>
    </header>

    {{-- MAIN --}}
    <main id="create-main" class="container">

        <div class="card">

            {{-- CARD-TITLE --}}
            <div class="card-title border border-dark rounded-top mb-0 py-2">

                <div class="row">

                    <div class="col-9">

                        <h1 class="ms-3 mb-0">New comic</h1>

                    </div>

                    <div class="col-3 d-flex justify-content-end">

                        <a class="btn btn-primary mt-2 me-3" href="{{ url('/comics') }}">GO BACK</a>

                    </div>

                </div>

            </div>


            {{-- CARD-BODY --}}
            <div class="card-body border border-dark rounded-bottom border-top-0 mt-0">

                @include('components.forms.error-alert')

                <form method="POST" action="{{ route('comics.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    id="title" name="title" value="{{ old('title') }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="series" class="form-label">Series</label>
                                <input type="text" class="form-control @error('series') is-invalid @enderror"
                                    id="series" name="series" value="{{ old('series') }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="type" class="form-label">Type</label>
                                <input type="text" class="form-control" id="type" name="type"
                                    value="{{ old('type', 'comic book') }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" step="0.01"
                                    class="form-control @error('price') is-invalid @enderror" id="price"
                                    name="price" min="0" value="{{ old('price') }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="sale_date" class="form-label">Sale Date</label>
                                <input type="date" class="form-control" id="sale_date" name="sale_date"
                                    value="{{ old('sale_date') }}">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="thumb" class="form-label">Thumbnail URL</label>
                                <input type="text" class="form-control @error('thumb') is-invalid @enderror"
                                    id="thumb" name="thumb" oninput="updatePreviewImage()"
                                    value="{{ old('thumb') }}">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-1">
                                <img src="{{ old('thumb', 'https://www.pulsecarshalton.co.uk/wp-content/uploads/2016/08/jk-placeholder-image.jpg') }}"
                                    alt="preview" id="create-preview-thumb" class="ms-3">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="artists" class="form-label">Artists</label>
                                <input type="text" class="form-control" id="artists" name="artists"
                                    value="{{ old('artists') }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="writers" class="form-label">Writers</label>
                                <input type="text" class="form-control" id="writers" name="writers"
                                    value="{{ old('writers') }}">
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="reset" class="btn btn-danger me-2"><i class="fa-solid fa-rotate-right"></i>
                            reset</button>
                        <button type="submit" class="btn btn-success ms-2"><i class="fa-solid fa-check"></i>
                            create
                            comic</button>
                    </div>

                </form>

            </div>


        </div>

    </main>

    <script>
        const placeholder = "https://www.pulsecarshalton.co.uk/wp-content/uploads/2016/08/jk-placeholder-image.jpg";

        function updatePreviewImage() {
            const thumbInput = document.getElementById("thumb");
            const previewThumb = document.getElementById("create-preview-thumb");

            if (thumbInput.value) {
                previewThumb.src = thumbInput.value;
            } else {
                previewThumb.src = placeholder;
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
