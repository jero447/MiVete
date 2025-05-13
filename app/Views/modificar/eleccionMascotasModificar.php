<body>
    <div class="container-menu">
        <div class="container-form">
            <h1 class="titulo-alta">Selecciona la mascota a modificar</h1>
            <?= form_open("pantallaMascotasModificar", ['class' => 'form-alta form-modificar', "method" => "post"]) ?>
                <div class="container-inputs-alta">
                    <select name="mascotaModificar">
                        <?php foreach($mascotas as $mascota): ?>
                            <option value="<?= $mascota["idMascotas"] ?>"><?= $mascota["nombre"] ?></option>
                        <?php endforeach ?>   
                    </select>
                    <?= form_submit("enviar", "Seleccionar") ?>
                </div>
            <?= form_close() ?>
        </div>
    </div>
</body>