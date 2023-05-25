@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content">
            <div class="col-md-8">
                <h1 class="mb-5">{{ $post->title }}</h1>

                <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

                @if($post->image)
                    <img src="{{ asset('storage/'.$post->image) }}" alt="" class="img-fluid">
                 @else
                    <img src="pd.jpg" alt="" class="img-fluid">
                @endif
                <article class="my-3">
                    {!! $post->body !!}
                </article>
                

                <a href="/posts" class="d-block mt-3 text-decoration-none">back to post</a>
            </div>
        </div>
    </div>


        
        
        

    
@endsection    