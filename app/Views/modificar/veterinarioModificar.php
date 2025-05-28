<body>
    <a href="javascript:history.back()" class="boton-volver">
        ⬅ Volver
    </a>
    <div class="container-menu">
        <div class="container-form">
            <h1 class="titulo-alta">Modificar veterinario</h1>
            <?= form_open("modificarVeterinario", ['class' => 'form-alta', "method" => "post"]) ?>
            <div class="container-inputs-alta">
                <div class="container-input">
                    <?= form_label("Nombre:","nombre") ?>
                    <?= form_input([
                        "name" => "nombre",
                        "class" => "inputForm",
                        "value" => $datos["nombre"] ?? $veterinarioModificar["nombre"] ?? ""
                    ]) ?>
                    <p class="mensajeError"><?= isset($errors["nombre"]) ? esc($errors["nombre"]) : "" ?></p>
                </div>
                <div class="container-input">
                    <?= form_label("Especialidad:","especialidad") ?>
                    <?= form_input([
                        "name" => "especialidad",
                        "class" => "inputForm",
                        "value" => $datos["especialidad"] ?? $veterinarioModificar["especialidad"] ?? ""
                    ]) ?>
                    <p class="mensajeError"><?= isset($errors["especialidad"]) ? esc($errors["especialidad"]) : "" ?></p>
                </div>
            </div>

            <div class="container-inputs-alta">
                
                <div class="container-input">
                    <?= form_label("Telefono:","telefono") ?>
                    <?= form_input([
                        "name" => "telefono",
                        "class" => "inputForm",
                        "value" => $datos["telefono"] ?? $veterinarioModificar["telefono"] ?? ""
                    ]) ?>
                     <p class="mensajeError"><?= isset($errors["telefono"]) ? esc($errors["telefono"]) : "" ?></p>
                </div>
                
            </div>

            <?= form_hidden("idVeterinario", $veterinarioModificar["idVeterinario"] ?? "") ?>

            <div class="container-btn-enviar">
                <?= form_submit("enviar", "Modificar") ?>
            </div>
                
            <?= form_close() ?>
        </div>
    </div>
</body>