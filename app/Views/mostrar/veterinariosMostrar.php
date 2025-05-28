<a href="javascript:history.back()" class="boton-volver">
        ⬅ Volver
    </a>
<div class="container-tabla">
    <h1>Mostrar Veterinarios</h1>
    <div class="tabla">
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Especialidad</th>
                    <th>Telefono</th>
                    <th>Fecha de ingreso</th>
                    <th>Fecha de egreso</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($veterinarios as $veterinario): ?>

                    <tr>
                        <td>
                            <?= $veterinario["nombre"] ?>
                        </td>
                        <td>
                            <?= $veterinario["especialidad"] ?>
                        </td>
                        <td>
                            <?= $veterinario["telefono"] ?>
                        </td>
                        <td>
                            <?= $veterinario["fechaIngreso"] ?>
                        </td>
                        <td>
                            <?= $veterinario["fechaEgreso"] ?>
                        </td>
                    </tr>

                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>