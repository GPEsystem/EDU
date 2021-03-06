@extends('layouts.loginTemplate')

@section('header')

@endsection


@section('content')
<div class="wrapper">
    <div class="logo">
        <img src="https://via.placeholder.com/150" alt="">
    </div>
    <div class="text-center mt-4 name"> EDU </div>
    <form class="p-3 mt-3" method="POST" action="login">
        @csrf
        <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span> <input type="text" name="userName" id="userName" placeholder="Username"> </div>
        <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> <input type="password" name="password" id="pwd" placeholder="Password"> </div> <button class="btn mt-3">Login</button>
    </form>
    <div class="text-center fs-6"> <a href="#">Forget password?</a> or <a href="#">Sign up</a> </div>
</div>
@endsection

