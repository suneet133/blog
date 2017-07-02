<nav class="nav">
    <div class="nav-left">
        <a class="nav-item" href="/">
            <h1 class="title is-bold">Blog</h1>
        </a>
    </div>
    <div class="nav-center">
        <a class="nav-item" href="#">
            <span class="icon">
                <i class="fa fa-github"></i>
            </span>
        </a>
        <a class="nav-item" href="#">
            <span class="icon">
                <i class="fa fa-twitter"></i>
            </span>
        </a>
    </div>
    <!-- This "nav-toggle" hamburger menu is only visible on mobile -->
    <!-- You need JavaScript to toggle the "is-active" class on "nav-menu" -->
    <span class="nav-toggle">
        <span></span>
        <span></span>
        <span></span>
    </span>
    <!-- This "nav-menu" is hidden on mobile -->
    <!-- Add the modifier "is-active" to display it on mobile -->
    <div class="nav-right nav-menu">
        <a href="/" class="nav-item">
            Home
        </a>
        <a href="/posts" class="nav-item">
            Posts
        </a>
        <a class="nav-item">
            About
        </a>
        <div class="nav-item">
        @if(Auth::check())
            <div class="field is-grouped">
                <p class="control">
                    <a class="button" >
                        <span class="icon">
                            <i class="fa fa-user-circle"></i>
                        </span>
                        <span>{{Auth::user()->name}}</span>
                    </a>
                    <a class="button is-light" href="/logout">
                        <span>Logout</span>
                    </a>
                </p>
            </div>
            @else
                <div class="field is-grouped">
                    <p class="control">
                        <a class="button" href="/login">
                            <span>Login</span>
                        </a>
                        <a class="button is-light" href="/register">
                            <span>Register</span>
                        </a>
                    </p>
                </div>
            @endif
        </div>
    </div>
</nav>