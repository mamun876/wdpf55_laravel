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
            <h5 class="card-title">Product Entry</h5>

            <!-- session inserted successfull message -->
         
            @if($errors->any())
            <div class="alert">
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </div>
            @endif

            <!-- General Form Elements -->
            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input name="name" type="text" value="{{old('name')}}" class="form-control">
        </div>
    </div>
    <div class="row mb-3">
        <label for="description" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
            <textarea name="description"  id="description" cols="20" rows="5" class="form-control quill-editor-full mb-4">{{ old('description') }}</textarea>
        </div>
    </div>
    <div class="row mb-3">
        <label for="price" class="col-sm-2 col-form-label">Price</label>
        <div class="col-sm-10">
            <input name="price" type="text" class="form-control" value="{{old('price')}}">
        </div>
    </div>
    
    <div class="row mb-3">
        <label for="category" class="col-sm-2 col-form-label">Category</label>
        <div class="col-sm-10">
            <select name="category" class="form-select">
                <option value="">Select Category</option>
                @foreach($cats as $cat)
                    <option value="{{ $cat->id }}" {{old('category') ==$cat->id ?'selected':''}}>{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row mb-3">
        <label for="availability" class="col-sm-2 col-form-label">Availability</label>
        <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="availability" id="available" value="1" {{old('availability') ? 'checked':''}}>
                <label class="form-check-label" for="available">
                    Available
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="availability" id="not_available" value="0" {{old('availability')==0?'checked':''}}>
                <label class="form-check-label" for="not_available">
                    Not Available
                </label>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <label for="tags" class="col-sm-2 col-form-label">Tags</label>
        <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="tags[]" id="full_sleeves" value="full_sleeves" {{ in_array('full-sleeves', old('tags',[])) ? 'checked' : '' }}>
                <label class="form-check-label" for="full_sleeves">
                    Full Sleeves
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="tags[]" id="half_sleeves" value="half_sleeves" {{ in_array('half_sleeves', old('tags',[])) ? 'checked' : '' }}>
                <label class="form-check-label" for="half_sleeves">
                    Half Sleeves
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="tags[]" id="half_sleeves" value="leather" {{ in_array('leather', old('tags',[])) ? 'checked' : '' }}>
                <label class="form-check-label" for="leather">
                    Leather
                </label>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <label for="photo" class="col-sm-2 col-form-label">Photo Upload</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" name="photo" accept="image/*">
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