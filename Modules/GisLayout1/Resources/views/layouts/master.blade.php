<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Page GIS Depok</title>
    <!-- Compressed CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.2/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/notyf.min.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <style> 
    .bg-radient{
      background: #fff !important;
      -webkit-box-shadow: -5px 7px 15px -9px rgba(0,0,0,0.75);
      -moz-box-shadow: -5px 7px 15px -9px rgba(0,0,0,0.75);
      box-shadow: -5px 7px 15px -9px rgba(0,0,0,0.75);
      color: black !important;
    }
    .border-8{
      border: 8px solid white;
    }
    .yellow-text{
      color: yellow !important;
    }
    .white-text{
      color: #fff !important;
    }
    .bold-text{
      font-weight: bold;
    }
    .depok-bg {
      background: #00004E;
    }
    .grey-text{
      color: #666 !important
    }
    </style>

    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.2/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.2/dist/js/uikit-icons.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</head>
  <body>
  @include('gislayout1::layouts/navbar')
  @include('gislayout1::layouts/sidebar')
  <div class="content-padder content-background">
      <div class="uk-section-small uk-section-default header">
          <div class="uk-container uk-container-large">
              <h3><span class="ion-speedometer"></span> Dashboard</h3>
                <div class="uk-alert-success" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <p> Welcome back, Èrik Campobadal</p>
                </div>                 
          </div>
      </div>
      <div class="uk-section-small">
          @yield('content')
      </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.min.js"
  integrity="sha256-UGwvyUFH6Qqn0PSyQVw4q3vIX0wV1miKTracNJzAWPc=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.transit/0.9.12/jquery.transit.min.js"
  integrity="sha256-rqEXy4JTnKZom8mLVQpvni3QHbynfjPmPxQVsPZgmJY=" crossorigin="anonymous"></script>
<script src="{{asset('js/notyf.min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/status.js')}}"></script>
<script src="{{asset('js/notification.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
  </body>
</html>