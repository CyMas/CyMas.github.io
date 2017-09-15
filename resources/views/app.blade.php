<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>YTS API</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
  <link href="{{ url('style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  @yield('head')
</head>
<body>
  <nav class="grey darken-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="/" class="brand-logo">YTS API</a>
      <ul class="right hide-on-med-and-down">
        <li><a target="_blank" href="http://www.utorrent.com/">Download μTorrent</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a target="_blank" href="http://www.utorrent.com/">Download μTorrent</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  
  @yield('content')  

  <footer class="page-footer grey darken-3">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">YTS API</h5>
          <p class="grey-text text-lighten-4">Welcome to the YTS API website. Here you will be able to browse and download YIFY movies in excellent 720p, 1080p and 3D quality, all at the smallest file size. Only <a href="https://yts.ag/">here </a>: YTS Movies Torrents. </p>


        </div>
        
        
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
  <script type="text/javascript">
    (function($){
      $(function(){
        $('.button-collapse').sideNav();
      });
    })(jQuery);
  </script>

  @yield('script')

  </body>
</html>
