<!DOCTYPE html>
<html>
    <head>
        <title>
            @yield('title', 'A4 Application')
        </title>

        <meta charset='utf-8'>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="/css/master.css" type='text/css' rel='stylesheet'>
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
      
        @stack('head')

    </head>
    <body>

        <div class="container">
           

            <header>      

                <nav>
                    <ul class="nav nav-tabs" role="tablist">
                        <li><a href='/'>HOME</a></li>
                        <li><a href='/tasks/new'>ADD TASKS</a></li>
                        <li><a href='/tasks/assign'>ASSIGN TASKS</a></li>

                    </ul>
                </nav>

            </header>
            
             @if(Session::get('message') != null)
                <div class='message'>{{ Session::get('message') }}</div>
            @endif

            <section>
                @yield('content')
            </section>
           

            <footer>
                &copy; {{ date('Y') }} &nbsp;&nbsp;

            </footer>

        </div>

        @stack('body')

    </body>
</html>
