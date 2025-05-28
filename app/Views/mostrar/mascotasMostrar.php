<a href="javascript:history.back()" class="boton-volver">
        ⬅ Volver
    </a>
<div class="container-tabla">
    <h1>Mostrar Mascotas</h1>
    <div class="tabla">
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Especie</th>
                    <th>Raza</th>
                    <th>Nro de registro</th>
                    <th>Edad</th>
                    <th>Fecha de alta</th>
                    <th>Fecha de defuncion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($mascotas as $mascota): ?>

                    <tr>
                        <td>
                            <?= $mascota["nombre"] ?>
                        </td>
                        <td>
                            <?= $mascota["especie"] ?>
                        </td>
                        <td>
                            <?= $mascota["raza"] ?>
                        </td>
                        <td>
                            <?= $mascota["nroRegistro"] ?>
                        </td>
                        <td>
                            <?= $mascota["edad"] ?>
                        </td>
                        <td>
                            <?= $mascota["fechaAlta"] ?>
                        </td>
                        <td>
                            <?= $mascota["fechaDefuncion"] ?>
                        </td>
                    </tr>

                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>