
<!--//por cada accion del controlador se crea un archivo de views-->
<!--Mosstramos la variable/objeto del controlador -->

<h1>
    Listado de usuarios
</h1>
<?php while ($usuario = $todos_los_usuarios->fetch_object()): ?><!--Para que me recorra la variable notas-->
<?=$usuario->email ?> - <?= $usuario->fecha ?> <br/><!--Creo la variable no para poder imprimir -->

<?php endwhile;?>