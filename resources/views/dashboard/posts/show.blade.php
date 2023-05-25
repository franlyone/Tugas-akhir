@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-5">{{ $post->title }}</h1>

                <a href="/posts" class="btn btn-success mb-5"><span data-feather="globe"></span> Back to assets</a>

                @if($post->image)
                    <img src="{{ asset('storage/'.$post->image) }}" alt="" class="img-fluid">
                @else
                    <img src="pd.jpg" alt="" class="img-fluid">
                @endif

                <article class="my-3">
                    {!! $post->body !!}
                </article>
                
            </div>
        </div>
    </div>
@endsection