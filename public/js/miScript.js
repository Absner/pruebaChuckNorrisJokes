
$(document).ready(function(){
    //console.log("hola mundo");
    //busqueda();
    //var dataindex="";

    var dataindex =   sessionStorage.getItem("blanco");
    $('#data').val(dataindex);
    //console.log($('#data').val(dataindex));
    Ajaxs(dataindex);
    
    
    
    $('#formData').submit(function(e){
        var data    =   $('#buscador01').val();
        sessionStorage.setItem("blanco", data);
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
            success: function(item){
                console.log(item);
                $.each(item.result,function(key,item){
                    refresh += "<div class="+"row"+">";
                    refresh += '<h3><a href="'+item.url+'"\>'+item.id+'</a></h3>';
                    refresh += '<p class="text-color1">'+item.url+'</p>';
                    refresh += "<h4>"+item.value+"</h4>";
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

