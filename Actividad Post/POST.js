window.addEventListener("DOMContentLoaded", () => {


    const boton = document.getElementById('btn');
   
    
    boton.addEventListener("click" , (e) => 
        {
            e.preventDefault();


            const nombre = document.getElementById('nombre').value;
            const correo = document.getElementById('correo').value;
            
    
    
            fetch('api/registro.php',{
                method: 'post',
                headers: {
                    'content-type': 'application/json'
                },
                body: JSON.stringify({
                    nombre: nombre,
                    correo: correo
                })
            })
            .then(response => response.JSON())
            .then(data => {
                console.log('respuesta del servidor:', data);
            })
            .catch(error => console.log('error:', error));
    
        });
    
    
    


});


