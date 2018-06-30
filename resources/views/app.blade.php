<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    @include ('layouts.head')


</head>

<body>

    <div class="container">
            <div id="app">
              {{-- @yield('content') --}}
              <app-home></app-home>
            </div>
    </div>


    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
  </div>
</body>

</html>
