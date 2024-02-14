@extends('layout')
@section('title', 'Registration')
@section('content')
<div class="container">
    <h1 style="width: 300px" class="mt-3 ms-auto me-auto">Registration</h1><br>
    <form action="{{route('registration.post')}}" method="POST" style="width: 500px" class="ms-auto  me-auto mt-5">
    @csrf
        <div class="mb-3">
            <label for="Username" class="form-label">Username:</label>
            <input type="text" class="form-control" placeholder="Username">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address:</label>
            <input type="email" class="form-control" placeholder="email address">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control">
        </div>        
        <div id="emailHelp" class="form-text mb-2">We'll never share your details with anyone else.</div>
        <button type="submit" class="btn btn-primary" style="width: 500px">Submit</button>
    </form>
</div>
@endsection
