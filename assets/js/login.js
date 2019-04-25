jQuery(document).on('submit','#login', function(event){
    event.preventDefault()
    $.ajax({
        url: 'assets/php/login.php',
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function(){
            console.log("enviando...")
        },
        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
            if(response.error == false){
                if(response.type == 'C'){
                    location.href='./clients.php'
                }else if(response.type == 'E'){
                    location.href='./employees.php'
                }
            }else{
                alert('Datos no validos')
            }
    }
    })
})