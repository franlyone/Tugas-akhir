@extends('layouts.main')


@section('container')

    <h1 class="mb-5">Post Category</h1>

    <div class="container">
        <div class="row">
            @foreach ($categories->skip(0) as $category)
            <div class="col-md-4 mb-3">
                 <div class="card" style="height:240px;">
                   {{-- <div class="position-absolute bg-dark text-white px-3 py-2" style="background-color:rgba(0, 0, 0, 0.7); z-index:2;"><a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $category->name }}</a></div> --}}
                    {{-- @if($post->image) --}}
                      <div class="foto" style="width: 346px; height:190px; overflow:hidden;">
                         <img src="" alt="" class="img-fluid">
                      </div>
                   {{-- @else
                      <img src="pd.jpg" alt="" class="img-fluid">
                   @endif  --}}
                   <a href="/posts?category={{ $category->slug }}"><div class="conf">
                      <h5>{{ $category->name }}</h5>
                   </div></a>
                   <div class="card-body">
                   <h5 class="card-title">{{ $category->name }}</h5>
                   {{-- <a href="/posts/{{ $post->slug }}" class="btn btn-danger">See more</a> --}}
                   </div>
                </div>
             </div>
            @endforeach 
        </div>
    </div>
@endsection    