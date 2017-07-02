<!DOCTYPE html>
<html>
<head>
    <title>My Application</title>
    <link rel="stylesheet" href="/bulma/css/bulma.css"/>
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css"/>
</head>

<body>
<section class="hero is-info is-fullheight">
    <!-- Hero header: will stick at the top -->
    <div class="hero-head">
        <header class="nav">
            <div class="container">
                <div class="nav-left">
                    <a class="nav-item">
                        <h1 class="title">Blog</h1>
                    </a>
                </div>
                <span class="nav-toggle">
          <span></span>
          <span></span>
          <span></span>
        </span>
                <div class="nav-right nav-menu">
                    <a href="/" class="nav-item is-active">
                        Home
                    </a>
                    <a href="/posts" class="nav-item">
                        Posts
                    </a>
                    <a class="nav-item">
                        About
                    </a>
                    <span class="nav-item">
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
                    </span>
                </div>
            </div>
        </header>
    </div>

    <!-- Hero content: will be in the middle -->
    <div class="hero-body">
        <div class="container has-text-centered">
            <h1 class="title">
                Blog
            </h1>
            <h2 class="subtitle">
                Welcome to the main page for this blog
            </h2>
        </div>
    </div>

    <!-- Hero footer: will stick at the bottom -->
    <div class="hero-foot">
        <nav class="tabs is-boxed is-fullwidth">
            <div class="container">
                <ul>
                    <li class="is-active"><a>Overview</a></li>
                    <li><a>Modifiers</a></li>
                    <li><a>Grid</a></li>
                    <li><a>Elements</a></li>
                    <li><a>Components</a></li>
                    <li><a>Layout</a></li>
                </ul>
            </div>
        </nav>
    </div>
</section>
</body>
</html>