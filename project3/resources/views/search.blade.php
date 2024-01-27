@extends('backend.layouts.app')
@section('title', 'Search')
@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>General Tables</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">General</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Default Table</h5>

            <!-- Search Form -->
            <form action="" method="get">
              <input type="text" name="search" placeholder="search">
              <select name="cat" id="">
                <option value="">Select One</option>
                <option value="1">full_sleeves</option>
                <option value="2">leather</option>
                <option value="3">Shoe</option>
              </select>
              <input type="submit" value="search">
            </form>

            <!-- Display Message if No Products Found -->
           

            <!-- Table -->
            <table class="table">
              <thead>
                <tr>
                  <th>SL</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Description</th>
                  <th>Category</th>
                  <th>Tags</th>
                  <th>Action</th>
                </tr>
              </thead>
              @if(Session::has('msg'))
              <div class="alert alert-warning">
                {{ Session::get('msg') }}
              </div>
            @endif

              <tbody>
                @foreach($products as $key=>$item)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td><img src="{{ asset('image/' . $item->image) }}" width="100px" alt=""></td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->price}}</td>
                    <td>{!!$item->description!!}</td>
                    <td>{{$item->category->name ?? 'N/A'}}</td>
                    <td>{{implode(",", $item->tags)}}</td>
                    <td>
                      <ul>
                        @foreach($item->tags as $tag)
                          <li>{{$tag}}</li>
                        @endforeach
                      </ul>
                    </td>
                    <td><a href="{{route('product.edit', $item->id)}}">Edit</a> | <a href="{{route('product.delete', $item->id)}}" onclick="return confirm('Are you sure to delete')">Delete</a></td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            <!-- End Table -->
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection
