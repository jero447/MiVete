<body>
    <a href="javascript:history.back()" class="boton-volver">
        ⬅ Volver
    </a>
    <div class="container-menu">
        <div class="container-form">
            <h1 class="titulo-alta">Selecciona el veterinario a modificar</h1>
            <?= form_open("pantallaVeterinarioModificar", ['class' => 'form-alta form-modificar', "method" => "post"]) ?>
                <div class="container-inputs-alta">
                    <div class="container-input">
                        <div class="container-error">
                            <select name="veterinarioModificar">
                                <?php foreach($veterinarios as $veterinario): ?>
                                    <option value="<?= $veterinario["idVeterinario"] ?>"><?= $veterinario["nombre"] ?></option>
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