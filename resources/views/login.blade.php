@extends('layout')
@section('title', 'Login')
@section('content')
<div class="container">
    <h1 style="width: 300px" class="mt-3 ms-auto me-auto">LOG IN</h1><br>
    <form action="{{route('login.post')}}" method="POST" style="width: 500px" class="ms-auto  me-auto mt-5">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address:</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="email address" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
        </div>
        <button type="submit" class="btn btn-primary" style="width: 500px">Submit</button>
    </form>
</div>
@endsection