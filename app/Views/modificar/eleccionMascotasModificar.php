<body>
    <a href="javascript:history.back()" class="boton-volver">
        ⬅ Volver
    </a>
    <div class="container-menu">
        <div class="container-form">
            <h1 class="titulo-alta">Selecciona la mascota a modificar</h1>
            <?= form_open("pantallaMascotasModificar", ['class' => 'form-alta form-modificar', "method" => "post"]) ?>
                <div class="container-inputs-alta">
                    <div class="container-input">
                        <div class="container-error">
                            <select name="mascotaModificar">
                                <?php foreach($mascotas as $mascota): ?>
                                    <?php if($mascota["fechaDefuncion"] == null): ?>
                                        <option value="<?= $mascota["idMascotas"] ?>"><?= $mascota["nombre"] ?></option>
                                    <?php endif ?>
                                <?php endforeach ?>   
                            </select>
                        </div>
                        
                    </div>
                    
                    <?= form_submit("enviar", "Seleccionar") ?>
                </div>
            <?= form_close() ?>
        </div>
    </div>
</body>