@extends('layout')

@section('css_header')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
@endsection

@section("content")
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">Edit article {{$article->title}}</h1>
            <form method="POST" action="{{url('articles')}}/{{$article->id}}">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{$article->id}}">
                <div class="field">
                    <label class="label" for="title">Title</label>
                    <div class="control">
                        <input class="input @error('title') is-danger @enderror" type="text" name="title" id="title" value="{{$article->title}}">
                        @error('title')
                        <p class="help is-danger">{{ $errors->first('title') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="excerpt">Excerpt</label>
                    <div class="control">
                        <input class="input @error('excerpt') is-danger @enderror" type="text" name="excerpt" id="excerpt" value="{{$article->excerpt}}">
                        @error('title')
                        <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="body">Body</label>
                    <div class="control">
                        <textarea class="textarea @error('body') is-danger @enderror" id="body" name="body">{{$article->body}}</textarea>
                        @error('title')
                        <p class="help is-danger">{{ $errors->first('body') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field is-grouped">

                    <div class="field">

                        <div class="control">
                            <button class="button is-link" type="submit">Submit</button>
                        </div>

                        <div class="control">
                            <button class="button is-text">Cancel</button>
                        </div>

                    </div>

                </div>


            </form>
        </div>
    </div>


@endsection
