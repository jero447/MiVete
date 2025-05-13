<div class="container-datos">
    <h1>Mostrar amos de una mascota</h1>
    <div class="container-mostra-amos">
        <div class="seleccion">

            <h2>Selecciona una mascota</h2>
            
            <div class="menu-seleccion">
                <?= form_open("buscarMascotas") ?>
                    <select name="mascotas">
                        <?php foreach ($mascotas as $mascota): ?>
                            <?php if($mascota["idMascotas"]  === $idMascotaSeleccionada): ?>
                                <option value="<?= $mascota["idMascotas"] ?>" selected>
                                    <?= $mascota["nombre"] ?>
                                </option>
                            <?php else: ?>
                                <option value="<?= $mascota["idMascotas"] ?>">
                                    <?= $mascota["nombre"] ?>
                                </option>
                            <?php endif ?>
                        <?php endforeach ?>
                    </select>
                    <?= form_submit("buscar", "Buscar") ?>
                <?= form_close() ?>
            </div>
            

        </div>

        <div class="tabla-datos-amos">
            
            <div class="encabezado">
                <p>Nombre</p>
                <p>Direccion</p>
                <p>Telefono</p>
            </div>

            <div>
                
                <?php foreach ($amosEncontrados as $amo): ?>
                    <div class="registros">
                        <p> <?= $amo["nombre"] ?> </p>
                        <p> <?= $amo["direccion"] ?> </p>
                        <p> <?= $amo["telefono"] ?> </p>
                    </div>
                <?php endforeach ?>
            </div>

        </div>

    </div>

</div>