const formulario = document.querySelector('#formulario');

formulario.addEventListener('submit', function(event) {
    event.preventDefault();
    if(formulario.f_llegada.value == '' || formulario.f_salida.value == '' || formulario.Canchas.value == ''){
        alertSW('Todos los campos son requeridos', 'warning');
    }else{
        formulario.submit();
    }
});



