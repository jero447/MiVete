<a href="javascript:history.back()" class="boton-volver">
        ⬅ Volver
    </a>
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
                        <th>Fecha de baja</th>
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
                            <?php foreach( $registroRelacionAmo as $registro ): ?>
                                    <?php if( $registro["idMascota"] == $mascota["idMascotas"] ): ?>
                                        <td><?= htmlspecialchars($registro["fechaFin"]) ?></td>
                                    <?php endif ?>
                                <?php endforeach ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>

    </div>

</div>