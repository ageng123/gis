@extends('../Ws_template/Layout')
@section('content')
  <div class="fluid-container">
    <div class="row" style="height: 100%; width: 100%">
    <div id="mapid" style="height:53rem;z-index: 1; "></div>
    </div>
  </div>
@endsection
@section('js')
<script>
  function initmap()
  {
    var mymap = L.map('mapid', {
      zoomControl: false
    }).setView([51.505, -0.09], 13);
    L.tileLayer( 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
    subdomains: ['a','b','c']
    }).addTo(mymap);
    L.control.zoom({
     position:'topright'
}).addTo(mymap);
  }
  function login()
  {
    let username = $('input[name=username]').val();
    let password = $('input[name=password]').val();
    console.log(username+'/'+password);
    $.ajax({
      method: 'POST',
      contentType: 'application/json',
      DataType: 'json',
      async: false,
      data: {
        username: username,
        password: password
      },
      url: '{{route('authen')}}',
      success: function(data){
      }
    })
  }
  
  $(document).ready(function(){
    initmap();
    $('.sidenav').sidenav();
    $('.modal').modal();
  })
</script>
@endsection