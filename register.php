<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Submit POI - WisataOne</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="teal lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">WISATAOne</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/">HOME</a></li>
        <li><a href="#">Wisata</a></li>
        <li><a href="/submit">Upload</a></li>
        <li><a href="/login">Masuk</a></li>
        <li><a href="/register">Daftar</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="/">HOME</a></li>
        <li><a href="#">Wisata</a></li>
        <li><a href="/submit">Upload</a></li>
        <li><a href="/login">Masuk</a></li>
        <li><a href="/register">Daftar</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>


  <div class="container col s6 l12 m12">
    <form class="center" action=#>
      <div class="row">
        <h4>Mendaftar Pengguna Baru</h4>
      </div>

      <div class="row">
        <div class="input-field col s6 l6">
          <input id="lat" type="text" class="validate">
          <label class="active" for="lat">Nama Depan</label>
        </div>

        <div class="input-field col s6 l6">
          <input id="long" type="text" class="validate">
          <label class="active" for="long">Nama Belakang</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 l12">
          <input id="nama_poi" type="email" class="validate">
          <label class="active" for="nama_poi">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 l12">
          <input id="nama_poi" type="text" class="validate">
          <label class="active" for="nama_poi">Username</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6 l6">
          <input id="lat" type="password" class="validate">
          <label class="active" for="lat">Password</label>
        </div>

        <div class="input-field col s6 l6">
          <input id="long" type="password" class="validate">
          <label class="active" for="long">Confirm Password</label>
        </div>
      </div>
      <!-- INPUT FILE HERE-->

      <div class="row">
        <button class="btn waves-effect waves-light" type="submit" name="action">DAFTAR
          <i class="material-icons right">send</i>
        </button>
      </div>

    </form>
  </div>

  <!-- <footer class="page-footer orange" style="position:fixed;bottom:0;left:0;width:100%;">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Kelompok 3</a>
      </div>
    </div>
  </footer> -->


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>