<html>
<div class="logo-middle">
    <a href={{route('Homepage')}} class="logo">s l m p l e</a>
</div>
<div class="right-menu">
    @if(Auth::check())
        <div><a href="">{{Auth::User()->first_name}}</a></div>
        <div class="fas fa-shopping-cart cart"></div>
        <div><a href={{route('logout')}}>Log Out</a> </div>
    @else
        <div><a href={{route('mLogin')}}>My account</a></div>
        <div class="fas fa-shopping-cart cart"></div>

    @endif
</div>
</html>
