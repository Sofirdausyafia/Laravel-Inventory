 <!DOCTYPE html>
  <html>
    <head>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{asset('materialize/css/materialize.min.css')}}" media="screen,projection"/>
      <link href="{{asset('materialize/css/materialize.css')}}" type="text/css" rel="stylesheet" 
          media="screen,projection"/>
    </head>
    
    <body>
      <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!">one</a></li>
        <li><a href="#!">two</a></li>
        <li class="divider"></li>
        <li><a href="#!">three</a></li>
      </ul>
  
      <nav>
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo">Logo</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
          </ul>
        </div>
      </nav>

      <!--JavaScript at end of body for optimized loading-->
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="{{asset('materialize/js/materialize.min.js')}}"></script>
      <script src="{{asset('materialize/js/materialize.js')}}"></script>
      <script src="{{asset('materialize/js/init.js')}}"></script>

      <script type="text/javascript">
        $(document).ready(function(){
          $('.tabs').tabs();
        });
      </script>

      <script type="text/javascript">
        $(document).ready(function(){
            $(".dropdown-button").dropdown();
            $('select').material_select();
       });
      </script>
    
      <script type="text/javascript">
        $(document).ready(function(){
            $('.slider').slider();
        });
      </script>

    </body>
  </html>
  