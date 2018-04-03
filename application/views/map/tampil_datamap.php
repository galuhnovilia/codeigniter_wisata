<!DOCTYPE html>
<html>
<head>
  <title>Aplikasi Web GIS dengan Google MAP API</title>
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
<!--  <link rel="stylesheet" href="bootstrap.css">
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places&language=id"></script>
 <script type="text/javascript" src="https://maps.googleapis.com/map/api/js?key=AlzaSyAkalqgZhiwY3u78G6rPbZaSBsAh58PGl0&callback=initMap"></script>-->

  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAgBiLRAb79hMx-oAZFz295qRDQONCeoLI&sensor=false&libraries=places&language=id"></script> 
    <script  type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>assets/js/map.js"></script>
</head>
<body>
  <header id="header">
  <nav class="navbar navbar-default navbar-fixed-top" style="background-color: #232F3E; border-color: #FF8C00;">
    <div class="container">
         <div class="navbar-header">
          <!-- The mobile navbar-toggle button can be safely removed since you do not need it in a non-responsive implementation -->
         <a class="navbar-brand" href="" style="color:white;">Sistem Informasi Geografis dengan lokasi anda sekarang</a>
         </div>
        </div>  
  </nav>
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron" align="center" style="padding:50px 20px 0px 20px; /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#ffd65e+0,febf04+100;Yellow+3D+%232 */

">
        <!--<h3><strong>Aplikasi Web GIS dengan Google MAP API</strong></h3>-->
       <!--  <h4 style="color: black ;">Sistem Informasi Geografis dengan lokasi anda sekarang</h4>-->
            <div id="custom-search-input">
                    <div class="input-group col-md-6">
                        <input type="text" class="form-control input-lg" id="dest" />
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <span class="input-group-btn">
                            <button class="btn btn-info btn-lg" type="submit" id="cari">
                                Search
                            </button>
                        </span>
                    </div>
            </div>
        <div class="row">
          <table class="table">
      <!-- <tr>
          <td><h4>1</h4></td>
          <td><h4>Galuh Ayu Novilia</h4></td>
          <td><h4>131051028</h4></td>   
      </tr>
     <tr>
          <td><h4>2</h4></td>
          <td><h4>Taufan Bagus Dwi Putra Aditama</h4></td>
          <td><h4>131051065</h4></td>
      </tr>
          <td><h4>3</h4></td>
          <td><h4>Rohmat Suseno</h4></td>
          <td><h4>131051066</h4></td>   
      <tr>
          <td><h4>4</h4></td>
          <td><h4>Dhea Saintysta Brilliani</h4></td>
          <td><h4>131051083</h4></td>
      </tr>-->
      </table>
        </div>
      <div id="directions-panel" style="float:right;width:48%; height:600px; overflow:auto;"></div>
      <div id="map-canvas" style="width:50%; height:600px;"></div>
        </div>

</header>
</body>
</html>