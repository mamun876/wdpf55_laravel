@extends ('layouts.app')



@section('content')

<div class="container mt-5">
    <div class="row">


        <div class="container mt-5">

            <!-- error message -->
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif


            <!-- session data -->
            @if(session('msg'))
            <div class="alert alert-success">
                {{session('msg')}}
            </div>
            @endif
            <h1>Contact Us</h1>

            <form method="post" action="/update/{{$single['id']}}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" value="{{old('name')?old('name'):$single['name']}}" name="name" class="form-control" id="name" placeholder="Enter your name">
                    @error('name')
                    <div class="form-text alert alert-danger" id="emailhelp">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="text" value="{{old('email')?old('email'):$single['email']}}" name="email" class="form-control" id="email" placeholder="Enter your email">
                    @error('email')
                    <div class="form-text alert alert-danger" id="emailhelp">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" name="subject" value="{{old('subject')?old('subject'):$single['subject']}}" class="form-control" id="subject" placeholder="Enter Subject">
                    @error('subject')
                    <div class="form-text alert alert-danger" id="emailhelp">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message">{{old('subject')?old('subject'):$single['subject']}}</textarea>
                    @error('message')
                    <div class="form-text alert alert-danger" id="emailhelp">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>


@endsection