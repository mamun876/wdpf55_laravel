@extends ('layouts.app')


@section('content')

@if(session('msg'))
<div class="alert alert-success">
    {{session('msg')}}
</div>
@endif

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>subject</th>
            <th>Message</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($messages as $message)
        <tr>
            <td>{{$message->id}}</td>
            <td>{{$message->name}}</td>
            <td>{{$message->email}}</td>
            <td>{{$message->subject}}</td>
            <td>{{$message->message}}</td>
            <td><a href="/edit/{{$message->id}}">Edit</a> | <a href="/delete/{{$message->id}}">Delete</a></td>
            <!-- <td><button class="btn btn-danger">Delete</button></td>
        <td><button class="btn btn-primary">Edit</button></td> -->
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>subject</th>
            <th>Message</th>
        </tr>
    </tfoot>

</table>



@endsection