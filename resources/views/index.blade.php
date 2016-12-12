<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chuck Norris Search</title>
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
</head>
<body>
    <div class="container-fluid">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 margin-top25 ">
                <img src="{{asset('img/googlelogo.png')}}" alt="" class="img-responsive center-block" >
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <form id="formData" action="Search/">
                    <div class="form-group">
                        <input type="text" class="form-control" id="buscador01">
                    </div>
                    
                    <div class="form-group center">
                        <button class=" btn btn-default" id="session">Buscar en chuck joker</button>
                        <button class=" btn btn-default">Me siento con suerte</button>
                    </div>
                    
                </form>
                
            </div>
        </div>
        
    </div>
<script type="application/javascript" src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<script type="application/javascript" src="{{asset('js/miScript.js')}}"></script>
</body>
</html>