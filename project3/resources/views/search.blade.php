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

            <!-- Default Table -->
            <form action="get">
                <input type="text" name="search" placeholder="search">
            </form>
            <table class="table">
              <thead>
                <tr>
                  <th>SL</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>description</th>
                  <th>Category</th>
                  <th>tags</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
               
              @foreach($products as $key=>$item)
                <tr>
                  <td>{{$key+1}}</td>
                  <td><img src="{{ asset('image/' . $item->image) }}" width="100px" alt=""></td>

                  <td>{{$item->name}}</td>
                  <td>{{$item->price}}</td>
                  <td>{!!$item->description!!}</td>
                  <td>{{implode(",", $item->tags)}}</td>
                  <td>{{$item->category->name ?? 'N/A'}}</td>
                  <td>
                    <ul>
                    @foreach($item->tags as $tag)
                    <li>{{$tag}}</li>
                    @endforeach
                    </ul>
                    
                  </td>
                  <td><a href="{{route('product.edit', $item->id)}}">Edit</a> | <a href="{{route('product.delete', $item->id)}}" onclick="return confirm('are you sure to delete')">delete</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <!-- End Default Table Example -->
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection