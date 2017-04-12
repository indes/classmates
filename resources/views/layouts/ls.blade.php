@include('layouts.head')
@include('layouts.nav')

<main class="container">
    <div class="row">
        <div class="col-md-4" role="complementary">
            @yield('sidebar')
        </div>

        <div class="col-md-8" role="main">
            @yield('content')
        </div>
    </div>

</main>


@include('layouts.footer')