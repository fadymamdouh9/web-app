@extends('master')
@section('content')

<!-- <h1>faddd</h1>
<h2>welcome {{$name}} </h2>
<ul>
    @foreach($films as $film)
    <li>{{$film}}</li>
    @endforeach
</ul>

<h2>user</h2>
<ul>
    @foreach($users as $user)
    <li>{{$user->name}}-{{$user->email}}</li>
    @endforeach
</ul> -->






<div class="container my-5">
    <h1>About</h1>
    <form action="{{ route ('savecontact')}}" method="post">
        @csrf 
        <div class="row shadow p-5">
            <div class="col-6">
                <label class="form-label" for="name">Name : <strong>SOUQ</strong></label>
               

            </div>

            <div class="col-6">
                <label class="form-label" for="phone">Phone : <strong>0120233333</strong></label>
                
            </div>

            <div class="col-12">
                <label class="form-label" for="email">Email : <strong>souq@gmail.com</strong></label>
                

            </div>

            <div class="col-12">
                <label class="form-label" for="message">Message : <strong>Have nice time</strong></label>
                

            </div>

            
        </div>
    </form>

</div>
@endsection
