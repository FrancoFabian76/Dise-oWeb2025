fetch('api/registro.php',{
    method: 'post',
    headers: {
        'content-type': 'application/json'
    },
    body: JSON.stringify({
        nombre: 'nombre',
        correo: 'correo@gmail.com'
    })
})
.then(response => response.JSON())
.then(data => {
    console.log('respuesta del servidor:', data);
})
.catch(error => console.log('error:', error));