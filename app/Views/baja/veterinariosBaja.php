<body>
    <a href="javascript:history.back()" class="boton-volver">
        ⬅ Volver
    </a>
    <div class="container-menu">
        <div class="container-form">
            <h1>Dar de baja un veterinario</h1>
             <?= form_open("darDeBajaVeterinario", ['class' => 'form-alta', "method" => "post"]) ?>
                <div class="container-inputs-alta">
                    <div class="container-input">
                        <?= form_label("Veterinario:","veterinario") ?>
                        <div class="container-error">
                            <select name="veterinario" >
                                <option value="" selected disabled>Seleccione un veterinario</option>
                                <?php  foreach ($veterinarios as $veterinario):  ?>
                                    <?php if($veterinario["fechaEgreso"] === null): ?>
                                        <option value="<?= $veterinario["idVeterinario"] ?>">
                                            <?= $veterinario["nombre"] ?>
                                        </option>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </select>
                        </div>
                        
                    </div>

                    <div class="container-btn-enviar">
                        <?= form_submit("enviar", "Dar de baja") ?>
                    </div>
                </div>
            <?= form_close() ?>
        </div>
    </div>

</body>