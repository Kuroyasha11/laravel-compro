<nav id="navbar" class="navbar">
    <ul>
        <li><a class="{{ Request::is('home*') ? 'active' : '' }}" href="{{ route('home.index') }}">Home</a></li>
        <li><a class="{{ Request::is('features*') ? 'active' : '' }}" href="#">Features</a></li>
        <li><a class="{{ Request::is('pricing*') ? 'active' : '' }}" href="#">Pricing</a></li>
        <li><a class="{{ Request::is('blog*') ? 'active' : '' }}" href="#">Blog</a></li>
        {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="#">Drop Down 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                            class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="#">Deep Drop Down 1</a></li>
                        <li><a href="#">Deep Drop Down 2</a></li>
                        <li><a href="#">Deep Drop Down 3</a></li>
                        <li><a href="#">Deep Drop Down 4</a></li>
                        <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                </li>
                <li><a href="#">Drop Down 2</a></li>
                <li><a href="#">Drop Down 3</a></li>
                <li><a href="#">Drop Down 4</a></li>
            </ul>
        </li> --}}
        <li><a class="{{ Request::is('contant*') ? 'active' : '' }}" href="#">Contact Us</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav>