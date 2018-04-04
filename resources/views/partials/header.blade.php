<header class="page-head">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
        <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fullwidth" data-lg-layout="rd-navbar-static" class="rd-navbar" style="background-color: black;">
            <div class="rd-navbar-inner" >
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                    <!-- RD Navbar Toggle-->
                    <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                    <!-- RD Navbar Brand-->
                    <div class="rd-navbar-brand"><a href="{{url('/')}}" class="brand-name">
                            {{--<div class="ratio-one-one">--}}
                                {{--<div class="content">--}}
                                    {{--<img src="{{asset('images/logo-white-bg.jpg')}}" class="img-width">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div>--}}
                                {{--<img src="{{asset('images/logo-black-bg-header.jpeg')}}" class="img-width">--}}
                                <div class="text">MINDS</div>
                            {{--</div>--}}

                    </a></div>
                </div>
                <div class="rd-navbar-nav-wrap">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                        {{--<li><a href="./">Login</a>--}}
                        <li class="active"><a href="{{url('/') . '/'}}">Home</a></li>
                        <li><a href="{{url('about')}}">About</a></li>
                        {{--<li><a href="{{url('publications')}}">Publications</a></li>--}}
                        <li><a href="{{url('team')}}">Team</a></li>
                        <li><a href="{{url('projects')}}">Projects</a></li>
                        <li><a href="{{url('resources')}}">Resources</a></li>
                        {{--<li><a href="{{url('products')}}">Team</a>--}}
                            {{--<ul class="rd-navbar-dropdown">--}}
                                {{--<li><a href="#">Students</a></li>--}}
                                {{--<li><a href="#">Reserchers</a></li>--}}
                                {{--<li><a href="#">Visitors</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        <li><a href="{{url('news')}}">News & Events</a></li>
                        {{--<li><a href="{{url('contacts')}}">Research</a></li>--}}
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>