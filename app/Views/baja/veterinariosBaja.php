<body>
    <div class="container-menu">
        <div class="container-form">
            <h1>Dar de baja un veterinario</h1>
             <?= form_open("darDeBajaVeterinario", ['class' => 'form-alta', "method" => "post"]) ?>
                <div class="container-inputs-baja">
                    <div>
                        <?= form_label("Veterinario:","veterinario") ?>
                        <select name="veterinario">
                            <option value="" selected disabled>Seleccione una mascota</option>
                            <?php  foreach ($veterinarios as $veterinario):  ?>
                                <?php if($veterinario["fechaEgreso"] === null): ?>
                                    <option value="<?= $veterinario["idVeterinario"] ?>">
                                        <?= $veterinario["nombre"] ?>
                                    </option>
                                <?php endif ?>
                            <?php endforeach ?>
                        </select>
                    </div>

                    <div class="container-btn-baja">
                        <?= form_submit("enviar", "Dar de baja") ?>
                    </div>
                </div>
            <?= form_close() ?>
        </div>
    </div>

</body>