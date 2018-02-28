<!doctype html>
<html lang="en">
@include('Includes.head')
<body>
<div class="container">
    <header>
        @include('Includes.menu')
    </header>
    <main role="main">


        @yield('content')
    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    @include('Includes.jsfooter')
    <footer>
        @include('Includes.footer')
    </footer>
</div>
</body>
</html>