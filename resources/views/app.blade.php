<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    @include ('layouts.head')


</head>

<body>




    <div class="container">
      <div id="app">
        <div class="columns">
            <div class="column is-3">
              <side-nav></side-nav>
            </div>
            <div class="column is-9">
              <app-home></app-home>
            </div>
        </div>
      </div>      
    </div>      


    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
  </div>
</body>

</html>
