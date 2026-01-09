<x-app-layout>

    <style>

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .container .title{
            color: #fff;
            font-size: 4em;
            text-align: center;
            margin-bottom: 0.5em;
        }

        .container .img {
            width: 80%;
            height: auto;
            justify-content: center;
            border: solid #fff;
        }

        .container-body .date {
            margin-top: 1em;
            padding-left: 6.5em;
            margin-bottom: 1em;
            color: #fff;
            font-size: 1.2em;
        }

        .container-body .desc {
            text-align: center;
            padding-left: 5em;
            padding-right: 5em;
            color: #fff;
        }

        .container-body .btn {
            margin-top: 5em;
            margin-left: 5em;
        }


    </style>

    <div class="container mt-5">
        <h1 class="title"><b>{{ $news->name }}</b></h1>
        <img src="{{ asset($news->image) }}" alt="News Image" class="img">
        <div class="container-body">
            <p class="date"><b><i>Published on: {{ $news->release }}</i></b></p>
            <p class="desc">{{ $news->detail }}</p>

            <a href="{{ route('news.paginate') }}" class="btn btn-primary">Back to News</a>

        </div>
    </div>
</x-app-layout>