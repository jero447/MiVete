<div class="container-datos">
    <h1>Mostrar mascotas de un amo</h1>
    <div class="container-mostra-amos">
        <div class="seleccion">

            <h2>Selecciona un amo</h2>
            
            <div class="menu-seleccion">
                <?= form_open("buscarAmos") ?>
                    <select name="amos">
                        <?php foreach ($amos as $amo): ?>
                            <?php if($amo["idAmo"]  === $idAmoSeleccionado): ?>
                                <option value="<?= $amo["idAmo"] ?>" selected>
                                    <?= $amo["nombre"] ?>
                                </option>
                            <?php else: ?>
                                <option value="<?= $amo["idAmo"] ?>">
                                    <?= $amo["nombre"] ?>
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
                <p>Especie</p>
                <p>Raza</p>
                <p>Nro registro</p>
                <p>Edad</p>
                <p>Fecha de alta</p>
            </div>

            <div>
                
                <?php foreach ($mascotasEncotradas as $mascota): ?>
                    <div class="registros">
                        <p> <?= $mascota["nombre"] ?> </p>
                        <p> <?= $mascota["especie"] ?> </p>
                        <p> <?= $mascota["raza"] ?> </p>
                        <p> <?= $mascota["nroRegistro"] ?> </p>
                        <p> <?= $mascota["edad"] ?> </p>
                        <p> <?= $mascota["fechaAlta"] ?> </p>
                    </div>
                <?php endforeach ?>
            </div>

        </div>

    </div>

</div>