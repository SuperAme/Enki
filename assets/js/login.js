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
            console.log(response)
    }
    })
})