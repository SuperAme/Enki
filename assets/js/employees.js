$(document).ready(function(){
    
    $.ajax({
        url: 'assets/php/consulta_employees.php',
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


function search(){
    var valor = $('.tipo').val()
    $.ajax({
        type: 'POST',
        url: 'assets/php/consulta_employees.php',
        data: {'valor':valor},
    }).done(function(response){
        $(".list").html(response)
    }).fail(function(){
        alert('Hubo un error')
    })
}
function search1(){
    var valor1 = $('.prop').val()
    $.ajax({
        type: 'POST',
        url: 'assets/php/consulta_employees.php',
        data: {'valor1':valor1},
    }).done(function(response){
        $(".list").html(response)
    }).fail(function(){
        alert('Hubo un error')
    })
}
function search2(){
    var valor2 = $('.modalidad').val()
    $.ajax({
        type: 'POST',
        url: 'assets/php/consulta_employees.php',
        data: {'valor2':valor2},
    }).done(function(response){
        $(".list").html(response)
    }).fail(function(){
        alert('Hubo un error')
    })
}
/*$.ajax({prop,modalidad
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