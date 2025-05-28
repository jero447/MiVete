<body>
    <a href="javascript:history.back()" class="boton-volver">
        ⬅ Volver
    </a>
    <div class="container-menu">
        <div class="container-form">
            <h1 class="titulo-alta">Modificar mascota</h1>
            <?= form_open("modificarMascota", ['class' => 'form-alta', "method" => "post"]) ?>
            <div class="container-inputs-alta">
                <div class="container-input">
                    <?= form_label("Nombre:","nombre") ?>
                    <?= form_input([
                        "name" => "nombre", 
                        "class" => "inputForm",
                        "value" => $datos["nombre"] ?? $mascotaModificar["nombre"] ?? ""
                    ]) ?>
                    <p class="mensajeError"><?= isset($errors["nombre"]) ? esc($errors["nombre"]) : "" ?></p>
                </div>
                <div class="container-input">
                    <?= form_label("Especie:","especie") ?>
                    <?= form_input([
                        "name" => "especie", 
                        "class" => "inputForm",
                        "value" => $datos["especie"] ?? $mascotaModificar["especie"] ?? ""
                    ]) ?>
                    <p class="mensajeError"><?= isset($errors["especie"]) ? esc($errors["especie"]) : "" ?></p>
                </div>
            </div>

            <div class="container-inputs-alta">
                <div class="container-input">
                    <?= form_label("Raza:","raza") ?>
                    <?= form_input([
                        "name" => "raza", 
                        "class" => "inputForm",
                        "value" => $datos["raza"] ?? $mascotaModificar["raza"] ?? ""
                    ]) ?>
                    <p class="mensajeError"><?= isset($errors["raza"]) ? esc($errors["raza"]) : "" ?></p>
                </div>
                <div class="container-input">
                    <?= form_label("Nro. Registro:","nro_registro") ?>
                     <?= form_input([
                        "name" => "nro_registro", 
                        "class" => "inputForm",
                        "value" => $datos["nroRegistro"] ?? $mascotaModificar["nroRegistro"] ?? ""
                    ]) ?>
                    <p class="mensajeError"><?= isset($errors["nroRegistro"]) ? esc($errors["nroRegistro"]) : "" ?></p>
                </div>
            </div>

            <div class="container-inputs-alta">
                <div class="container-input">
                    <?= form_label("Edad:","edad") ?>
                     <?= form_input([
                        "name" => "edad", 
                        "class" => "inputForm",
                        "value" => $datos["edad"] ?? $mascotaModificar["edad"] ?? ""
                    ]) ?>
                    <p class="mensajeError"><?= isset($errors["edad"]) ? esc($errors["edad"]) : "" ?></p>
                </div>
            </div>

            <?= form_hidden("idMascotas", $mascotaModificar["idMascotas"] ?? "") ?>

            <div class="container-btn-enviar">
                <?= form_submit("enviar", "Modificar") ?>
            </div>
                
            <?= form_close() ?>
        </div>
    </div>
</body>