<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Jquery Mobile -->
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <link rel="manifest" href="manifest.json">
    <title>Multi Sensor ESP32</title>
    
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <!-- load otomatis / realtime -->
    <script type="text/javascript">
        
        $(document).ready(function() {
            setInterval(function() {
                $("#ceksuhu").load('ceksuhu.php');
                $("#cekkelembaban1").load('cekkelembaban1.php');
                $("#cekkelembaban2").load('cekkelembaban2.php');
            }, 1000);

        } );
    </script>

  </head>
  <body>

    <div class="container" style="text-align: center; margin-top:200px">
        <h2>Monitoring Multi Sensor ESP32 <br> Secara Realtime</h2>

        <div style="display: flex;">
        <!-- menampilkan nilai sensor suhu -->
        <div class="card text-center" style="width: 33.33%">
            <div class="card-header" style="font-size: 30px; font-weight: bold; background-color:yellow">
                Suhu
            </div>
            <div class="card-body">
              <h1> <span id="ceksuhu"> 0 </span> </h1>
            </div>
        </div>
        <!-- akhir menampilkan nilai suhu -->

        <!-- menampilkan nilai sensor kelembaban POT 1 -->
        <div class="card text-center" style="width: 33.33%">
            <div class="card-header" style="font-size: 30px; font-weight: bold; background-color:blue; color:white">
                Kelembaban POT 1
            </div>
            <div class="card-body">
              <h1><span id="cekkelembaban1"> 0 </span></h1>
            </div>
        </div>
        <!-- akhir menampilkan nilai kelembaban POT 1 -->

        <!-- menampilkan nilai sensor kelembaban POT 2 -->
        <div class="card text-center" style="width: 33.33%">
            <div class="card-header" style="font-size: 30px; font-weight: bold; background-color:red; color:white">
                Kelembaban POT 2
            </div>
            <div class="card-body">
              <h1><span id="cekkelembaban2"> 0 </span></h1>
            </div>
        </div>
        <!-- akhir menampilkan nilai Kelembaban POT 2 -->
        
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
    window.addEventListener('load', () => {
      registerSW();
    });
 
    // Register the Service Worker
    async function registerSW() {
      if ('serviceWorker' in navigator) {
        try {
          await navigator
                .serviceWorker
                .register('serviceworker.js');
        }
        catch (e) {
          console.log('SW registration failed');
        }
      }
    }
 </script>
  </body>
</html>