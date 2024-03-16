<!--
por cada accion del controlador se crea un archivo de views
Mostrar un formulario
-->
<h1>Listar notas</h1>
<?php while($nota = $notas->fetch_object()): ?>
    <?=$nota->titulo?> - <?=$nota->fecha?> <br/>
<?php endwhile;?>
