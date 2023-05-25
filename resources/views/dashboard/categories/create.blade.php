@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Categories</h1>
    </div>
    <div class="col-lg-8">   
        <form method="POST" action="/dashboard/categories" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Category Name</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" autofocus required value="{{ old('name') }}">
              @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="slug" class="form-label @error('slug') is-invalid @enderror">Slug</label>
              <input type="text" class="form-control" id="slug" name="slug" required value="{{ old('slug') }}">
              @error('slug')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary">Create Category</button>
          </form>
    </div>

<script>
  function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFRevent) {
      imgPreview.src = oFRevent.target.result; 
    }
  }

</script>

@endsection