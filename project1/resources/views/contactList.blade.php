@extends ('layouts.app')


@section('content')



<table class="table">
    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>subject</th>
        <th>Message</th>
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