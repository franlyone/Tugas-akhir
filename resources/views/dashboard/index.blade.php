@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    {{-- <h1 class="h2">Welcome, {{ auth()->user()->name }}</h1> --}}
  </div>

  @foreach ($posts->skip(0) as $post)
    <div class="card mb-3" style="max-width: 500px;" style="display: inline">
      <div class="row g-0">
        <div class="col-md-4">
          @if($post->image)
            <div class="foto" style="width: 140px; height : 200px; overflow:hidden;">
                <img src="{{ asset('storage/'.$post->image) }}" alt="" class="img-fluid" style="width:100%; height:200px;">
            </div>
          @else
            <img src="pd.jpg" alt="" class="img-fluid">
          @endif
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->slug }}</p>
            <p class="card-text"><small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></p>
          </div>
        </div>
      </div>
    </div>
  @endforeach  

  
@endsection