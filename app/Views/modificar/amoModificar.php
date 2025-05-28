<body>
    <a href="javascript:history.back()" class="boton-volver">
        ⬅ Volver
    </a>
    <div class="container-menu">
        <div class="container-form">
            <h1 class="titulo-alta">Modificar Amo</h1>
            <?= form_open("modificarAmo", ['class' => 'form-alta', "method" => "post"]) ?>
            <div class="container-inputs-alta">
                <div class="container-input">
                    <?= form_label("Nombre:","nombre") ?>
                        <?= form_input([ 
                            "name" => "nombre",
                            "class" => "inputForm",
                            "value" => $datos["nombre"] ?? $amoModificar["nombre"] ?? "" 
                        ]) ?>
                        <p class="mensajeError"><?= isset($errors["nombre"]) ? esc($errors["nombre"]) : "" ?></p>
                    
                </div>
                <div class="container-input">
                    <?= form_label("Direccion:","direccion") ?>
                    <?= form_input([ 
                        "name" => "direccion", 
                        "class" => "inputForm",
                        "value" => $datos["direccion"] ?? $amoModificar["direccion"] ?? "" 
                    ]) ?>
                    <p class="mensajeError"><?= isset($errors["direccion"]) ? esc($errors["direccion"]) : "" ?></p>
                </div>
            </div>

            <div class="container-inputs-alta">
                
                <div class="container-input">
                    <?= form_label("Telefono:","telefono") ?>
                    <?= form_input([ 
                        "name" => "telefono", 
                        "class" => "inputForm",
                        "value" => $datos["telefono"] ?? $amoModificar["telefono"] ?? "" 
                    ]) ?>
                    <p class="mensajeError"><?= isset($errors["telefono"]) ? esc($errors["telefono"]) : "" ?></p>   
                </div>

                <?= form_hidden("idAmo", $amoModificar["idAmo"] ?? "") ?>

            </div>

            <div class="container-btn-enviar">
                <?= form_submit("enviar", "Modifcar") ?>
            </div>
                
            <?= form_close() ?>
        </div>
    </div>
</body>