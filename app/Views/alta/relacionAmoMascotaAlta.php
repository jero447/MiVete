<body>
    <div class="container-menu">
        <div class="container-form">
            <h1 class="titulo-alta">Dar de alta a un par amo-mascota</h1>
            <?= form_open("insertarParAmoMascota", ['class' => 'form-alta', "method" => "post"]) ?>
            <div class="container-inputs-alta">
                <div>
                    <?= form_label("Amos:","amos") ?>
                    <select name="amos">
                        <option value="" selected disabled>Seleccione algun amo</option>
                        <?php  foreach ($amos as $amo):  ?>
                            <option value="<?= $amo["idAmo"] ?>">
                                <?= $amo["nombre"] ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div>
                    <?= form_label("Mascotas:","mascotas") ?>
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
                </div>
            </div>
            <div class="container-btn-enviar">
                <?= form_submit("enviar", "Enviar") ?>
            </div>
                
            <?= form_close() ?>
        </div>
    </div>
</body>