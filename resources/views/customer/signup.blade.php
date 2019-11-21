@extends('master')
@section('title')
    Sign Up
    @endsection
@section('content')
{{--<link rel="stylesheet" href="/css/dangky.css">--}}




<form role="form" class="dangky-section" method="post">
    <field>
    <div class="dangky-form">
        <p>ACCOUNT - SIGN UP</p>
        <div class="text" >First name</div>
        <input type="text" name="firstname" class="email">
        <div class="text">Last name</div>
        <input type="text" name="lastname" class="email">
        <div class="text">Email Address</div>
        <input type="email" name="email" class="email">
        <div class="text">Password</div>
        <input type="password" name="password" class="email">
        <button class="btn-submit" type="submit" name="subcribe">SIGN UP</button>
        <div class="account-alr">
            <span>Already have an account?</span>
            <a href="dangnhap.html">Sign in</a>
        </div>
    </div>
    </field>
    {{csrf_field()}}
</form>
@endsection

