@extends('master')
@section('content')



<div class="container my-5">
    <h1>contact us</h1>
    <form action="{{ route ('savecontact')}}" method="post">
        @csrf 
        <div class="row shadow p-5">
            <div class="col-6">
                <label class="form-label" for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name">

            </div>

            <div class="col-6">
                <label class="form-label" for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" id="phone">

            </div>

            <div class="col-12">
                <label class="form-label" for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email">

            </div>

            <div class="col-12">
                <label class="form-label" for="message">Message</label>
                <textarea  name="message" class="form-control" id="message"></textarea>

            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary mt-5">send</button>

            </div>

        </div>
    </form>

</div>
@endsection
