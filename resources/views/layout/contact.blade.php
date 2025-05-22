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
  class="w3-bar-item w3-button">Zatvori Meni✕</a>

  <a href="{{route('public.index')}}" onclick="w3_close()" class="w3-bar-item w3-button">Početna</a>

  <a href="{{route('public.list')}}" onclick="w3_close()" class="w3-bar-item w3-button">Svi proizvodi</a>

  

  <a href="{{ route('public.kontakt') }}" onclick="w3_close()" class="w3-bar-item w3-button">Kontakt</a>
  

</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    <div class="w3-right w3-padding-16"> <a href="{{route('login')}}" class="w3-button w3-blue w3-round-large w3-small">Uloguj se</a></div>

    <!-- <div class="w3-center w3-padding-16">Eterna</div> -->
    <div class="w3-center w3-padding-16">
      <img src="{{ asset('images/logo.png') }}"  style="height:30px;"><br>
      Eterna
    </div>
  </div>
</div>
  
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
    <h2 class="w3-center">Kontaktirajte nas</h2>

    <div class="w3-row-padding w3-padding-16">
        <div class="w3-half">
            <h3>Posetite nas</h3>
            <div id="map" style="width:100%; height:400px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.3009279470534!2d20.459769299999998!3d44.81543370000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7ab26947331d%3A0x67586e044140009b!2sKneza%20Mihaila%206%2C%20Beograd%2011000!5e0!3m2!1sen!2srs!4v1746708083276!5m2!1sen!2srs" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <div class="w3-half w3-padding-large">
            <h3>Kontakt Podaci</h3>
            <p><strong>Firma Eterna</strong></p>
            <p>Adresa: Kneza Mihaila 6, 11000 Beograd, Srbija</p>
            <p><strong>Telefon:</strong> +381 11 123 456</p>
            <p><strong>Email:</strong> kontakt@eterna.com</p>
            <p><strong>Radno vreme:</strong> Ponedeljak - Petak, 09:00 - 17:00</p>
        </div>
    </div>
</div>

  <!-- First Photo Grid-->
  
</div>
  

  <!-- Footer -->
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
