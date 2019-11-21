@extends('master')
@section('title')
    Account Login
@endsection
@section('content')

<form role="form" method='post' class="dangky-section">

{{--        <fieldset>--}}
        <div class="dangky-form">
            <p>ACCOUNT - SIGN IN</p>
            @if(Session::has('error'))
                <p class="alert alert-danger p-alert">{{Session::get('error')}}</p>
            @endif
            <div class="text">Email Address</div>
            <input required type="email" name="email" value="{{old('email')}}" class="email">
            <div class="text">Password</div>
            <input type="password" name="password" class="_password">
            <a href="#" class="forgot-password">I forgot my password</a>
           <a href={{route('Homepage')}}>
               <button class="btn-submit" type="submit" name="subcribe">SIGN IN</button>
           </a>
            <div class="account-alr">
                <span>Don't have an account?</span>
                <a href={{route('sign up')}}>Sign up</a>
            </div>
        </div>
{{--        </fieldset>--}}
        {{csrf_field()}}
</form>


    @endsection

