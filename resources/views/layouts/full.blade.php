@include('layouts.head')
@include('layouts.nav')
<main class="container">
    <div class="row">
        <div class="col-md-12" role="main">
            @yield('content')
        </div>
    </div>

</main>

@include('layouts.footer')