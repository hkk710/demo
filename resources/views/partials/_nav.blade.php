<nav class="main-nav main-nav-fixed"{{ Request::is('/') ? ' data-spy=affix' : ' style=margin-bottom:15px' }}>
    <ul>
        <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{url('/')}}">Home</a></li>
        <li class="{{ Request::is('upadevas') ? 'active' : '' }}"><a href="{{url('/upadevas')}}">Upadevas</a></li>
        <li class="{{ Request::is('activities') ? 'active' : '' }}"><a href="{{url('/activities')}}">Activities</a></li>
        <li class="{{ Request::is('festivals') ? 'active' : '' }}"><a href="{{url('/festivals')}}">Festivals</a></li>
        <li class="{{ Request::is('contact_us') ? 'active' : '' }}"><a href="{{url('/contactus')}}">Contact us</a></li>
        <li class="{{ Request::is('admin/login') ? 'active' : '' }}"><a href="{{url('/admin/login')}}">Staff login</a></li>
    </ul>
    <div class="main-nav-hidden">
        <a href="#main-nav-hidden" data-toggle="collapse"><i class="fa fa-bars" aria-hidden="true"></i></a>
    </div>
    <div class="collapse" id="main-nav-hidden">
        <ul>
            <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{url('/')}}">Home</a></li>
            <li class="{{ Request::is('upadevas') ? 'active' : '' }}"><a href="{{url('/upadevas')}}">Upadevas</a></li>
            <li class="{{ Request::is('activities') ? 'active' : '' }}"><a href="{{url('/activities')}}">Activities</a></li>
            <li class="{{ Request::is('festivals') ? 'active' : '' }}"><a href="{{url('/festivals')}}">Festivals</a></li>
            <li class="{{ Request::is('contact_us') ? 'active' : '' }}"><a href="{{url('/contactus')}}">Contact us</a></li>
            <li class="{{ Request::is('admin/login') ? 'active' : '' }}"><a href="{{url('/admin/login')}}">Staff login</a></li>
        </ul>
    </div>
</nav>
