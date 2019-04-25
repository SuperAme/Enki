$(document).ready(function(){
    $.ajax({
        url: 'assets/php/consulta.php',
        type: 'GET',
        dataType: 'html',
        /*dataType: 'html',*/  
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve            
            $(".list").html(response)
        },
        error: function(){
            console.log("error")
        }
    })
})
/*$.ajax({
    url: 'assets/php/consulta.php',
    type: 'GET',
    dataType: 'html',
    /*dataType: 'html',*/  
    /*success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
        console.log("mm")
        $("#cont").html(response)
    },
    error: function(){
        console.log("error")
    }
})*/