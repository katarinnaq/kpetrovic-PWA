<!DOCTYPE html>
<html>
<head>
<title>@yield("title")</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
</head>
<body>

<div class="container">
    @yield("content")
    <!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Zatvori Meni ✕</a>
   
  <a href="{{route('public.index')}}" onclick="w3_close()" class="w3-bar-item w3-button">Početna</a>

  <a href="{{route('public.list')}}" onclick="w3_close()" class="w3-bar-item w3-button">Svi proizvodi</a>

  <a href="{{ route('public.kontakt') }}" onclick="w3_close()" class="w3-bar-item w3-button">Kontakt</a>

</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
      <div class="w3-right w3-padding-16"> <a href="{{route('login')}}" class="w3-button w3-blue w3-round-large w3-small">Uloguj se</a></div>

   <div class="w3-center w3-padding-16">
      <img src="{{ asset('images/logo.png') }}"  style="height:30px;"><br>
      Eterna
    </div>
    
  </div>
</div>
  
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
   
  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
  <h1 class="w3-center w3-bold">Izdvajamo iz ponude</h1>

<div class="w3-row-padding w3-padding-16 w3-center" id="food">
    @foreach($proizvodi as $proizvod)
        <div class="w3-quarter w3-padding-16">
            <img src="{{ asset('images/' . $proizvod->slika) }}"
                 alt="{{ $proizvod->naziv }}"
                 class="w3-round w3-border"
                 style="width:100%; margin-bottom:16px;">
            <h3>{{ $proizvod->naziv }}</h3>
            <p>{{ $proizvod->opis }}</p>
        </div>
    @endforeach
</div>

<div class="w3-center w3-margin-top">
    <a href="{{ route('public.list') }}" class="w3-button w3-green w3-round-large">Pogledaj sve proizvode</a>
</div>
  </div>

  
  </div>
  
<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-pale-blue w3-center">
  <h3>RAF 2025</h3>
  <p>Katarina Petrović 25-23IT</p>
  <p>Powered by 
    <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">
      w3.css
    </a>
  </p>
</footer>


<!-- End page content -->
</div>
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
