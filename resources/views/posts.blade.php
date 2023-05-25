@extends('layouts.main')


@section('container')

   @if(session()->has('success'))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
   @endif

   <h1 class="mb-3 text-center">{{ $title }}</h1>

   <div class="row justify-content-center mb-3">
      <div class="col-md-6">
         <form action="/posts">
            @if(request('category'))
               <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            <div class="input-group mb-3">
               <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
               <button class="btn btn-danger" type="submit">Search</button>
            </div>
         </form>
      </div>
   </div>

   {{-- @if ($posts->count())
      @if($posts[0]->image)
         <img src="{{ asset('storage/'.$posts[0]->image) }}" alt="" class="img-fluid">
      @endif

      <div class="card mb-3">
         <div class="card-body text-center">
         <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
         <p>
            <small>
               By. <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</p>
        
            </small>
         </p>

         <p class="card-text">{{ $posts[0]->excerpt }}</p>

         <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">See more</a>
         </div>
      </div>
   @else
      <p class="text-center fs-4">No post found.</p>
   @endif --}}

   <div class="container">
      <div class="row">
         @foreach ($posts->skip(0) as $post)
            <div class="col-md-4 mb-3">
               <div class="card" style="height:350px;">
                  <div class="position-absolute bg-dark text-white px-3 py-2" style="background-color:rgba(0, 0, 0, 0.7); z-index:2;"><a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                  @if($post->image)
                     <div class="foto" style="width: 346px; height:190px; overflow:hidden;">
                        <img src="{{ asset('storage/'.$post->image) }}" alt="" class="img-fluid">
                     </div>
                  @else
                     <img src="pd.jpg" alt="" class="img-fluid">
                  @endif
                 <a href="/posts/{{ $post->slug }}"><div class="conf">
                     <h5>{{ $post->title }}</h5>
                  </div></a>
                  <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p>
                     <small>
                        <div class="ps1">
                           <div class="ps2">
                              <img src="/img/user.jpg" alt="">
                           </div>
                        </div><a href="/posts?author={{ $post->author->username }}" style="color:red" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}</p>
                     </small>

                  <p class="card-text" style="height: 50px;">{{ $post->excerpt }}</p>
                  {{-- <a href="/posts/{{ $post->slug }}" class="btn btn-danger">See more</a> --}}
                  </div>
               </div>
            </div>
         @endforeach
      </div>
   </div>


   <div class="d-flex justify-content-center" style="border:0">
   {{ $posts->links()  }}
   </div>

@endsection    