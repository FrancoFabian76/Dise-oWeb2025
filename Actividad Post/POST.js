window.addEventListener("DOMContentLoaded", () => {

    const boton = document.getElementById('btn');
   
    
    boton.addEventListener("click" , (e) => 
        {
            e.preventDefault();

            const nombre = document.getElementById('nombre').value;
            const razon = document.getElementById('razon').value;
            const correo = document.getElementById('correo').value;
            const telefono = document.getElementById('telefono').value;
            const producto = document.getElementById('producto').value;
    
            fetch('api/registro.php',{
                method: 'post',
                headers: {
                    'content-type': 'application/json'
                },
                body: JSON.stringify({
                    nombre: nombre,
                    razon: razon,
                    correo: correo,
                    telefono: telefono,
                    producto: producto

                })
            })
            .then(response => response.JSON())
            .then(data => {
                console.log('respuesta del servidor:', data);
            })
            .catch(error => console.log('error:', error));
    
        });
});


