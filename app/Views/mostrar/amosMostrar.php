<a href="javascript:history.back()" class="boton-volver">
        ⬅ Volver
    </a>
<div class="container-tabla">
    <h1>Mostrar Amos</h1>
    <div class="tabla">
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Fecha de alta</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($amos as $amo): ?>

                    <tr>
                        <td>
                            <?= $amo["nombre"] ?>
                        </td>
                        <td>
                            <?= $amo["direccion"] ?>
                        </td>
                        <td>
                            <?= $amo["telefono"] ?>
                        </td>
                        <td>
                            <?= $amo["fechaAlta"] ?>
                        </td>
                    </tr>

                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
