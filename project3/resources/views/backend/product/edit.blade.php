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
            <form action="{{ route('product.update', $products->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input name="name" type="text" value="{{$products->name? $products->name:old('name')}}" class="form-control">
        </div>
    </div>
    <div class="row mb-3">
        <label for="description" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
            <textarea name="description"  id="description" cols="20" rows="5" class="form-control tinymce-editor mb-4">{{$products->description? $products->description:old('description')}}</textarea>
        </div>
    </div>
    <div class="row mb-3">
        <label for="price" class="col-sm-2 col-form-label">Price</label>
        <div class="col-sm-10">
            <input name="price" type="text" class="form-control" value="{{$products->price? $products->price:old('price')}}">
        </div>
    </div>
    
    <div class="row mb-3">
        <label for="category" class="col-sm-2 col-form-label">Category</label>
        <div class="col-sm-10">
            <select name="category" class="form-select">
                <option value="">Select Category</option>
                @foreach($cats as $cat)
                    <option value="{{ $cat->id }}" @selected(old('category', $products->category_id)== $cat->id)>{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row mb-3">
        <label for="availability" class="col-sm-2 col-form-label">Availability</label>
        <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="availability" id="available" value="1" @checked(old('availability', $products->availability)==1)>
                <label class="form-check-label" for="available">
                    Available
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="availability" id="not_available" value="0" @checked(old('availability', $products->availability)==0)>
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
                <input class="form-check-input" type="checkbox" name="tags[]" id="full_sleeves" value="full_sleeves" @checked(old('tags', in_array('full-sleeves', $products->tags))=='full sleeves')>
                <label class="form-check-label" for="full_sleeves">
                    Full Sleeves
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="tags[]" id="half_sleeves" value="half_sleeves" @checked(old('tags',in_array('half_sleeves', $products->tags))=='half_sleeves')>
                <label class="form-check-label" for="half_sleeves">
                    Half Sleeves
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="tags[]" id="half_sleeves" value="leather" @checked(old('tags', in_array('leather', $products->tags))=='leather')>
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
    <img src="{{asset('image/'.$products->image)}}" alt="">
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Update</label>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Update</button>
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