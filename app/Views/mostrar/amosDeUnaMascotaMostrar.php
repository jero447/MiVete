<a href="javascript:history.back()" class="boton-volver">
        ⬅ Volver
    </a>
<div class="container-datos">
    <h1 class="titulo-mostrar">Mostrar amos de una mascota</h1>
    <div class="container-mostra-amos">
        <div class="seleccion">

            <h2>Selecciona una mascota</h2>
            
            <div class="menu-seleccion">
                <?= form_open("buscarMascotas", ["style" => "display:flex"]) ?>
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
            

                <table>
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Fecha de alta</th>
                            <th>Fecha de baja</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($amosEncontrados as $amo): ?>
                            <tr class="tr-datos">
                                <td><?= htmlspecialchars($amo["nombre"]) ?></td>
                                <td><?= htmlspecialchars($amo["direccion"]) ?></td>
                                <td><?= htmlspecialchars($amo["telefono"]) ?></td>
                                <td><?= htmlspecialchars($amo["fechaAlta"]) ?></td>
                                <?php foreach( $registrosRelacion as $registro ): ?>
                                    <?php if( $registro["idAmo"] == $amo["idAmo"] ): ?>
                                        <td><?= htmlspecialchars($registro["fechaFin"]) ?></td>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>    

    </div>

</div>