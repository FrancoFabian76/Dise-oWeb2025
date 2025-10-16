window.addEventListener("DOMContentLoaded", () => {
    const boton = document.getElementById('btn');

    boton.addEventListener("click", (e) => {
        e.preventDefault();

        const nombre = document.getElementById('nombre').value;
        const razon = document.getElementById('razon').value;
        const correo = document.getElementById('correo').value;
        const telefono = document.getElementById('telefono').value;
        const producto = document.getElementById('producto').value;

        fetch('http://localhost/api/POST2.php', {
            method: 'post',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                nombre: nombre,
                razon: razon,
                correo: correo,
                telefono: telefono,
                producto: producto
            })
        })
        .then(response => response.json())
        .then(data => {
            console.log('respuesta del servidor:', data);

            const message = document.getElementById('message');
            message.textContent = 'Datos enviados correctamente.';
            message.style.color = 'green';
        })
        .catch(error => {
            console.log('error:', error);

            const message = document.getElementById('message');
            message.textContent = 'Ocurrió un error al enviar los datos.';
            message.style.color = 'red';
        });
    });
});
