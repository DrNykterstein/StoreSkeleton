<div class="contenedor">
        <h2>Tienda de Camisas</h2>
        <div class="contenedor-flex">
            <!-- Cards -->
            <?php foreach ($data['productos'] as $camisetas): ?>
                <article class="producto">
                    <div class="contenido">
                        <img src="<?php echo IMG.$camisetas['imagen']; ?>">
                        <h3><?php echo $camisetas['nombre'];?></h3>
                        <a href="#" class="boton">Agregar</a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div><!--Contenedor para flex-box -->