<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chuck Norris Search</title>
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
</head>
<body>
   <header>
       <div class="container-fluid ">
           <div class="row">
               <div class="col-md-1 col-sm-1">
                   <img src="{{asset('img/googlelogop.png')}}" class="margin-top img-responsive" height="44">
               </div>
               <div class="col-md-5 col-sm-7  margin-top">
                  <form id="formulario">
                   <div class="input-group">
                      <input type="text" class="form-control"  id="data">
                       <span class="input-group-btn">
                           <button class="btn btn-default" type="button" id="buscar">
                               <span class="glyphicon glyphicon-search text-color"></span>
                           </button>
                       </span>
                   </div>
                  </form>
                   
               </div>
               <div class="col-md-1 col-sm-1 col-md-offset-5 col-xs-offset-2 col-sm-offset-2">
                   <img src="{{asset('img/photo.png')}}" alt="" height="40" style="margin-top:15px;">
               </div>
           </div>

       </div>
   </header>
   <div class="container-fluid ">
       <div class="row">
          <!-- Aqui se volcará toda la consulta resultante mediante ajax -->
           <div class="col-md-6 col-md-offset-1" id="refresh"> </div>
       </div>
   </div>
<script type="application/javascript" src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<script type="application/javascript" src="{{asset('js/miScript.js')}}"></script>
</body>
</html>