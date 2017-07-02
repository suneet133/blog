<!DOCTYPE html>
<html>
    <head>
        <title>My Application</title>
        <link rel="stylesheet" href="/bulma/css/bulma.css" />
        <link rel="stylesheet" href="/css/app.css" />
        <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css" />
    </head>
    <body>
        @include('partials.nav')
        <section class="section">
            <div class="container">
                <div class="columns">
                    <div class="column is-three-quarters">
                        @yield('content')
                    </div>
                    <div class="column">
                        @include('partials.sidebar')
                    </div>
                    
                </div>
            </div>
        </section>
        
        @include('partials.footer')
        <script src="/js/jquery.js" type="text/javascript"></script>
    </body>
</html>