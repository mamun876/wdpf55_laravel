@extends('backend.layouts.app')

@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Form Elements</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Elements</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">General Form Elements</h5>

            <!-- session inserted successfull message -->
            @if(session('msg'))
            <div class="alert alert-success">
              {{ session('msg') }}
            </div>
            @endif
            <!-- error message -->
            @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

            <!-- General Form Elements -->
            <form action="{{ route('category.store') }}" method="post">
    @csrf
    <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input name="name" type="text" class="form-control">
        </div>
    </div>
    <div class="row mb-3">
        <label for="description" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
            <textarea name="description" id="description" cols="20" rows="5" class="form-control quill-editor-full mb-4"></textarea>
        </div>
    </div>
    <div class="row mb-3">
        <label for="price" class="col-sm-2 col-form-label">Price</label>
        <div class="col-sm-10">
            <input name="price" type="text" class="form-control">
        </div>
    </div>
    <div class="row mb-3">
        <label for="category" class="col-sm-2 col-form-label">Category</label>
        <div class="col-sm-10">
            <select name="category" class="form-select">
                <option value="">Select Category</option>
                @foreach($cats as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Submit Button</label>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Submit Form</button>
        </div>
    </div>
</form>
<!-- End General Form Elements -->

          </div>
        </div>

      </div>


    </div>
  </section>
</main>
@endsection