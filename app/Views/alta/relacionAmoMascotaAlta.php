<body>
    <a href="javascript:history.back()" class="boton-volver">
        ⬅ Volver
    </a>
    <div class="container-menu">
        <div class="container-form">
            <h1 class="titulo-alta">Alta amo-mascota</h1>
            <?= form_open("insertarParAmoMascota", ['class' => 'form-alta', "method" => "post"]) ?>
            <div class="container-inputs-alta">
                <div class="container-input">
                        <div>
                            <?= form_label("Amos:","amos") ?>
                        </div>
                        <div class="container-error">
                            <select name="amos">
                                <option value="" selected disabled>Seleccione algun amo</option>
                                <?php  foreach ($amos as $amo):  ?>
                                    <option value="<?= $amo["idAmo"] ?>">
                                        <?= $amo["nombre"] ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                            <p class="mensajeError"><?= isset($errors["idAmo"]) ? esc($errors["idAmo"]) : "" ?></p>
                        </div>
                </div>
                <div>
                    <div class="container-input">
                        <?= form_label("Mascotas:","mascotas") ?>
                        <div class="container-error">
                            <select name="mascotas">
                            <option value="" selected disabled>Seleccione una mascota</option>
                            <?php  foreach ($mascotas as $mascota):  ?>
                                <?php if($mascota["amoActual"] === null && $mascota["fechaDefuncion"] === null): ?>
                                    <option value="<?= $mascota["idMascotas"] ?>">
                                        <?= $mascota["nombre"] ?>
                                    </option>
                                <?php endif ?>
                            <?php endforeach ?>
                            </select>
                            <p class="mensajeError"><?= isset($errors["idMascota"]) ? esc($errors["idMascota"]) : "" ?></p>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <div class="container-btn-enviar">
                <?= form_submit("enviar", "Enviar") ?>
            </div>
                
            <?= form_close() ?>
        </div>
    </div>
</body>