@extends('master')
@section('title')
    Sign Up
    @endsection
@section('content')
{{--<link rel="stylesheet" href="/css/dangky.css">--}}




<form role="form" class="dangky-section" method="post">

    <div class="dangky-form">

        <p>ACCOUNT - SIGN UP</p>
        @if(Session::has('error'))
            <p class="alert alert-danger p-alert">{{Session::get('error')}}</p>
        @endif
        <div class="text" >First name</div>
        <input required type="text" name="firstname" class="email">
        <div class="text">Last name</div>
        <input required type="text" name="lastname" class="email">
        <div class="text">Email</div>
        <input required type="email" name="email" class="email">
        <div class="text">Password</div>
        <input required type="password" name="password" class="email">
        <div class="text">Address</div>
        <input required type="email" name="email" class="email">
        <button class="btn-submit" type="submit" name="subcribe">SIGN UP</button>
        <div class="account-alr">
            <span>Already have an account?</span>
            <a href="{{route('mLogin')}}">Sign in</a>
        </div>
    </div>

    {{csrf_field()}}
</form>
@endsection

