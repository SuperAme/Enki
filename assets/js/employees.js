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
function select_vivienda(){
    var id = $("#combobox").val();
    var a = {"id":id};
    $.ajax({
        data: a,
        url: "assets/php/mostrar_datos.php",
        type: "post",
        success: function(response){                                    
            $("#panel_consulta").html(response);
        }
    })
}
function actualizarV(){
    let identify = $("#input_identify").val();
    let tipo = $("#input_tipo").val(); 
    let prop = $("#input_prop").val(); 
    let input_recamaras = $("#input_recamaras").val();
    let precio = $("#input_precio").val();
    let input_modalidad = $("#input_modalidad").val();
    let input_pais = $("#input_pais").val();
    let input_estado = $("#input_estado").val();
    $.post("assets/php/update_vivienda.php",{
        "identify": identify,
        "tipo": tipo,
        "prop": prop,
        "input_recamaras":input_recamaras,
        "precio":precio,
        "input_modalidad":input_modalidad,
        "input_pais": input_pais,
        "input_estado": input_estado
    }).done(function(data){
        if (data.includes('insert')){
            alert("Registro actualizado");
            location.reload()
        }else{
            alert("error")
        }
    })
}