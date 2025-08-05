<?php 

/* ¡Hemos recibido nuestro primer producto! Es el legendario "The Legend of Zelda" para la consola NES, 
lanzado en 1986, y lo venderemos a 50.00. Necesitamos registrar esta información fundamental en 
nuestro sistema. ¿Cómo podemos estructurar estos cuatro datos para que cada pieza de información 
tenga una etiqueta descriptiva? 
Crea un script PHP. Dentro de él, define una única variable llamada $videojuego que contenga toda la 
información del producto descrito en la narrativa. 
Tip: Un arreglo asociativo te permite guardar datos usando una "clave" (como "titulo") para identificar 
cada "valor" (como "The Legend of Zelda").*/

#1:

$videojuego =["nombre" => ["The ", "Legend ", "of ", "Zelda "],
    "consola" => "NES ",
    "año" => "1986 ",
    "precio" => "50.00 " ];


    


/*Un cliente ha preguntado por el juego que acabamos de ingresar. Necesitamos una forma rápida de 
generar una ficha de producto clara y legible a partir de los datos que ya tenemos guardados. 
Tomando la variable $videojuego de la actividad anterior, escribe el código PHP necesario para imprimir 
en pantalla una frase formateada que muestre todos sus datos, como por ejemplo: Título: The Legend of 
Zelda | Consola: NES | Año: 1986 | Precio: $50.00. 
Tip: Para construir la frase, necesitarás obtener cada dato del arreglo usando su clave correspondiente y 
unirlo con el texto descriptivo. */

#2:


echo "Titulo: " . $videojuego['nombre'][0] . $videojuego['nombre'][1] . $videojuego['nombre'][2] . $videojuego['nombre'][3] . "<br>Consola: " . $videojuego['consola'] . "<br>Año de Lanzamiento: " . $videojuego['año']  . "<br>Precio: " . $videojuego['precio'];


/*Nos hemos dado cuenta de que es crucial saber cuántas unidades tenemos en stock (10 copias) y si el 
juego está actualmente a la venta. Esta información no estaba en el registro original. Necesitamos 
añadirla al producto que ya existe en el sistema sin perder los datos anteriores. 
Partiendo de la variable $videojuego ya existente, modifica tu script para que, después de su creación, 
se le añadan dos nuevos datos: un contador de stock y un indicador de si está a la venta (que debe ser 
verdadero). Luego, muestra nuevamente la ficha del producto, ahora con la información completa. 
Tip: Piensa en el arreglo como un formulario. Si quieres añadir un nuevo campo con su valor, ¿cómo lo 
harías en la estructura que ya tienes? No necesitas crear un arreglo desde cero. */

#3:





?>