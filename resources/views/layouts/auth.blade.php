<!DOCTYPE html>
<html>
    <head>
        <title>My Application</title>
        <link rel="stylesheet" href="/bulma/css/bulma.css" />
        <link rel="stylesheet" href="/css/app.css" />
        <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css" />
    </head>
    <body>
        
        
        <section class="hero is-fullheight is-dark is-bold">
            <div class="hero-head">
                @include('partials.nav')
            </div>
            <div class="hero-body">
                <div class="container">
                    <div class="columns is-vcentered">

                        @yield('content')
                        
                    </div>
                </div>
            </div>
            <div class="hero-foot">
                @include('partials.footer')
            </div>
        </section>
        <script src="/js/jquery.js" type="text/javascript"></script>
    </body>
</html>