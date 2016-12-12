
$(document).ready(function(){
    //console.log("hola mundo");
    //busqueda();
    //var dataindex="";
var dataindex;
    //var dataindex =   sessionStorage.getItem("blanco");
    $('#data').val(dataindex);
    console.log($('#data').val(dataindex));
    Ajaxs(dataindex);
    
    
    
    $('#formData').submit(function(e){
        var dataindex   =   sessionStorage.getItem("blanco");
        $('#data').val(dataindex);
        console.log(dataindex);
        
    });
    
    
    
    
    $('#buscar').click(function(){
        //$('#refresh').html($('#data').val());
        var info    =   $('#data').val();
        var refresh =   '';
        
        Ajaxs(info);

    });
    
    $('#search').click(function(){
        var data    =   $('#buscador01').val();
        sessionStorage.setItem("blanco", data);
    });
    
    $('#buscador01').on('keyup', function(){
        //$('#refresh').html($('#data').val());
        /*var info    =   $('#data').val();
        var refresh =   '';
        Ajaxs(info);*/
        dataindex   =   sessionStorage.getItem("blanco");
        $('#data').val(dataindex);
    });
    
    $('#formulario').submit(function(e){
        e.preventDefault();
    });
    
});

function Ajaxs(info){
    
console.log(info);
 
            $.ajax({
            url: 'https://api.chucknorris.io/jokes/search?query='+info,
            type: 'GET',
            success: function(data){
                console.log(data);
                $.each(data.result,function(key,data){
                    refresh += "<div class="+"row"+">";
                    refresh += "<h3><a href=\""+data.url+"\">"+data.id+"</a></h3>";
                    refresh += "<p>"+data.url+"</p>";
                    refresh += "<h4>"+data.value+"</h4>";
                    refresh += "</div>";
                    refresh += "<hr>";
                });
     

                $('#refresh').html(refresh);
                
            },
            error: function(status, err){
                alert('error.');
                console.log(err);
            }
        });

}