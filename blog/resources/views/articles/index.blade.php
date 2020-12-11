@extends('layout')

@section("content")

    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">

                <ul class="style1">
                    @foreach($articles as $article)
                        <li class="first">
                            <a href="articles/{{$article->id}}"><h3>{{ $article->title }}</h3></a>
                            <p>
                                <a href="articles/{{$article->id}}">{{ $article->excerpt }}</a>
                            </p>
                        </li>
                    @endforeach
                </ul>
                <p>
                    {{ $articles->links() }}
                </p>

            </div>
        </div>
    </div>



@endsection
