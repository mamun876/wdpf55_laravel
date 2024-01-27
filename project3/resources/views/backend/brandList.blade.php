@extends('backend.layouts.app')
@section('title', 'Home Page')
@section('content')

<main id="main" class="main">
    <div class="pt-4 pb-2">
        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
        <p class="text-center small">Enter your username & password to login</p>
    </div>

    <div class="container mt-4">
        @if (session('msg'))
        <div class="alert alert-danger">{{ session('msg') }}</div>
        @endif
        <table class="table table-striped text-center my-4">
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Image</th>
                <th>Description</th>
                <th>Action</th>
            </tr>

            @foreach ($brands as $item)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->logo }}</td>
                <td>{{ $item->description }}</td>
                <td>
                    <form action="{{ route('brands.destroy', $item->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('brands.show', $item->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('brands.edit', $item->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    {!! $brands->withQueryString()->links('pagination::bootstrap-5') !!}
</main>


@endsection