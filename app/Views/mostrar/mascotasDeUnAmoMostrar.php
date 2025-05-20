<div class="container-datos">
    <h1 class="titulo-mostrar">Mostrar mascotas de un amo</h1>
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
            
           <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Especie</th>
                        <th>Raza</th>
                        <th>Nro registro</th>
                        <th>Edad</th>
                        <th>Fecha de alta</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($mascotasEncotradas as $mascota): ?>
                        <tr class="tr-datos">
                            <td><?= htmlspecialchars($mascota["nombre"]) ?></td>
                            <td><?= htmlspecialchars($mascota["especie"]) ?></td>
                            <td><?= htmlspecialchars($mascota["raza"]) ?></td>
                            <td><?= htmlspecialchars($mascota["nroRegistro"]) ?></td>
                            <td><?= htmlspecialchars($mascota["edad"]) ?></td>
                            <td><?= htmlspecialchars($mascota["fechaAlta"]) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>

    </div>

</div>