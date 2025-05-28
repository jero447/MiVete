<body>
    <a href="javascript:history.back()" class="boton-volver">
        ⬅ Volver
    </a>
    <div class="container-menu">
        <div class="container-form">
            <h1 class="titulo-alta">Dar de alta a un Amo</h1>
            <?= form_open("insertarAmo", ['class' => 'form-alta', "method" => "post"]) ?>
            <div class="container-inputs-alta">
                <div class="container-error">
                    <div class="container-input">
                        <?= form_label("Nombre:","nombre") ?>
                        <div class="container-error">
                            <?= form_input(["name" => "nombre", "class" => "inputForm" ,"value" => $datos["nombre"] ?? ""]) ?>
                            <p class="mensajeError"><?= isset($errors["nombre"]) ? esc($errors["nombre"]) : "" ?></p>
                        </div>
                    </div>           
                </div>
                <div>
                    <div class="container-input">
                        <?= form_label("Direccion:","direccion") ?>
                        <div class="container-error">
                            <?=form_input([ "name" => "direccion", "class" => "inputForm","value" => $datos["direccion"] ?? ""])?>
                            <p class="mensajeError"><?= isset($errors["direccion"]) ? esc($errors["direccion"]) : "" ?></p>
                        </div>
                    </div>
                    
                    
                </div>
            </div>

            <div class="container-inputs-alta">
                
                <div class="container-input">
                    <?= form_label("Telefono:","telefono") ?>
                    <div class="container-error">
                        <?=form_input([ "name" => "telefono", "class" => "inputForm","value" => $datos["telefono"] ?? ""])?>
                        <p class="mensajeError"><?= isset($errors["telefono"]) ? esc($errors["telefono"]) : "" ?></p>
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