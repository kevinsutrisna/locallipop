<x-app-layout>  

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <style>
        .container {
            position: relative;
        }

        .container h1 {
            font-size: 3em;
            margin-left: 1em;
            color: #fff;
        }

        .search-container {
            display: flex;
            justify-content: flex-start;
            margin-top: 2em;
            margin-left: 4em;
        }

        .form-control {
            max-width: 500px;
            width: 100%;
            padding-left: 2.8em;
            padding-right: 2.8em;
        }

        .btn-outline-success {
            margin-left: 0.5rem;
        }

        .container-card {
            margin-top: 2em;
            margin-left: 4em;
            margin-right: 4em;
        }

        .card {
            background: linear-gradient(to right, darkblue, purple, #FF69B4);
            border: 2px solid #fff;
            display: flex;
            flex-direction: row;
            align-items: center;
            margin-top: 2em;
            padding: 1.5em;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            min-height: 200px;
            overflow: hidden;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            width: 50%;
            height: 10em;
            object-fit: cover;
            border-radius: 10px;
            margin-right: 1.5em;
        }

        .card-title {
            font-size: 1.5em;
            font-weight: bold;
            color: #333;
            min-height: 2.5em;
            display: flex;
            align-items: center;
            word-wrap: break-word;
            text-overflow: ellipsis;
        }

        .card-body h5 {
            color: #fff;
        }

        .card-date {
            font-size: 1em;
            color: #fff;
            margin-bottom: 1em;
        }

        .group {
            display: flex;
            justify-content: flex-start;
            gap: 0.5rem;
            align-items: center;
        }

        .btn-detail, .btn-delete, .btn-edit{
            padding: 0.5em 1.5em;
            font-size: 0.8em;
            display: inline-block;
            width: auto;
            height: auto;
        }

        .btn-detail {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }

        .btn-edit {
            color: white;
            font-weight: bold;
        }

        .btn-group {
            display: flex;
            gap: 0.5rem;
            align-items: center;
        }

        .btn-delete {
            background-color: #c82333;
            color: white;
            font-weight: bold;
            margin-left: -0.7em;
        }

        .btn-delete:hover {
            background-color: red;
        }

        .btn-edit:hover {
            color: #fff;
        }

        .button-container {
            position: absolute;
            top: 8em;
            right: 2rem;
            z-index: 10;
        }

        .add-news-btn {
            background-color: #28a745;
            color: #fff;
            font-weight: bold;
            padding: 0.5em 1.5em;
            border: none;
            border-radius: 25px;
            font-size: 1em;
            display: inline-block;
            text-decoration: none;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            margin-left: auto;
            margin-right: 2em;
            margin-top: 5em;
        }

        .add-news-btn:hover {
            transform: scale(1.1);
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        .add-news-btn:active {
            transform: scale(1);
            box-shadow: none;
        }

        .page-link {
            background-color: transparent;
            border: 1px solid #ddd;
            color: #007bff;
            transition: background-color 0.3s, color 0.3s;
        }

        .page-link:hover {
            background-color: #007bff;
            color: white;
        }

        @media (max-width: 768px) {
            .button-container {
                position: static;
                text-align: center;
                margin-top: 2rem;
                margin-bottom: 2rem;
            }

            .container-card {
                margin-left: 1em;
                margin-right: 1em;
            }

            .card {
                flex-direction: column;
                padding: 1em;
            }

            .card img {
                width: 100%;
                margin-right: 0;
                margin-bottom: 1em;
            }

            .card-title {
                font-size: 1.2em;
            }
        }
    </style>

    <div style="margin-top: 3rem; margin-bottom: 10rem;">
        <div class="container">
            <h1>Event News</h1>
        </div>

        <div class="search-container">
            <form class="d-flex" role="search" action="{{ route('news.paginate') }}" method="GET">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="query" value="{{ request('query') }}">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>


        @auth
            @if(auth()->user()->isAdmin())
                <div class="button-container">
                    <a href="{{ route('news.addnews') }}" class="btn btn-primary add-news-btn">
                        Add News | ✚
                    </a>
                </div>
            @endif
        @endauth


        <div class="container-card">
            <div class="row">
                @foreach($news as $item)
                    <div class="col-md-6">
                        <div class="card">
                            <img src="{{ asset($item->image) }}" alt="News Image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->name }}</h5>
                                <p class="card-date">Published on: {{ $item->release }}</p>

                                <div class="group">
                                <a href="{{ route('news.showDetail', $item->id) }}" class="btn btn-primary btn-detail">Detail</a>
                                    @auth
                                        @if(auth()->user()->isAdmin())
                                            <a href="{{ route('news.edit', $item->id) }}" class="btn btn-warning btn-edit">Edit</a>
                                        @endif
                                    @endauth
                                    @auth
                                        @if(auth()->user()->isAdmin())
                                            <form action="{{ route('news.delete', $item->id) }}" method="POST" style="display: inline-block; margin-left: 0.5rem;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-delete">Delete</button>
                                            </form>
                                        @endif
                                    @endauth
                                </div>
            
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center mt-5">
            <li class="page-item">
                <a class="page-link" href="{{ $news->previousPageUrl() }}&query={{ request('query') }}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>

            @foreach ($news->getUrlRange(1, $news->lastPage()) as $page => $url)
                <li class="page-item {{ $page == $news->currentPage() ? 'active' : '' }}">
                    <a class="page-link" href="{{ $url }}&query={{ request('query') }}">
                        {{ $page }}
                    </a>
                </li>
            @endforeach

            <li class="page-item">
                <a class="page-link" href="{{ $news->nextPageUrl() }}&query={{ request('query') }}" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>

    </div>

</x-app-layout>