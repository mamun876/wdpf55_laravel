@extends ('layouts.app')



@section('content')

<div class="container mt-5">
    <div class="row">


        <div class="container mt-5">
            <h1>Contact Us</h1>
            <form method="post" action="send">
                @csrf
                <div class="mb-3">
                    <label for="name"  class="form-label">Your Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" required>
                </div>
                <div class="mb-3">
                    <label for="email"  class="form-label" >Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="subject"  class="form-label" >Subject</label>
                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Enter Subject" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>


@endsection