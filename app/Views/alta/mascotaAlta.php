<body>
    <a href="javascript:history.back()" class="boton-volver">
        ⬅ Volver
    </a>
    <div class="container-menu">
        <div class="container-form">
            <h1 class="titulo-alta">Dar de alta a una mascota</h1>
            <?= form_open("insertarMascota", ['class' => 'form-alta', "method" => "post"]) ?>
            <div class="container-inputs-alta">
                <div>

                    <div class="container-input">

                        <?= form_label("Nombre:","nombre") ?>

                        <div class="container-error">
        
                            <?=form_input([ "name" => "nombre","class" => "inputForm", "value" => $datos["nombre"] ?? ""])?>
                            <p class="mensajeError"><?= isset($errors["nombre"]) ? esc($errors["nombre"]) : "" ?></p>

                        </div>

                    </div>

                    
                    
                </div>
                <div>

                    <div class="container-input">

                        <?= form_label("Especie:","especie") ?>

                        <div class="container-error">

                         <?=form_input([ "name" => "especie","class" => "inputForm", "value" => $datos["especie"] ?? ""])?>
                         <p class="mensajeError"><?= isset($errors["especie"]) ? esc($errors["especie"]) : "" ?></p>

                        </div>

                    </div>

                    
                   
                </div>
            </div>

            <div class="container-inputs-alta">
                <div>

                    <div class="container-input">

                        <?= form_label("Raza:","raza") ?>

                        <div class="container-error">

                            <?=form_input([ "name" => "raza","class" => "inputForm", "value" => $datos["raza"] ?? ""])?>
                            <p class="mensajeError"><?= isset($errors["raza"]) ? esc($errors["raza"]) : "" ?></p>

                        </div>

                    </div>

                    
                    
                </div>
                <div>

                    <div class="container-input">

                        <?= form_label("Nro. Registro:","nro_registro") ?>

                        <div class="container-error">

                            <?=form_input([ "name" => "nro_registro","class" => "inputForm", "value" => $datos["nroRegistro"] ?? ""])?>
                            <p class="mensajeError"><?= isset($errors["nroRegistro"]) ? esc($errors["nroRegistro"]) : "" ?></p>

                        </div>

                    </div>

                    
                    
                </div>
            </div>

            <div class="container-inputs-alta">
                <div>

                    <div class="container-input">

                        <?= form_label("Edad:","edad") ?>

                        <div class="container-error">

                            <?=form_input([ "name" => "edad","class" => "inputForm", "value" => $datos["edad"] ?? ""])?>
                            <p class="mensajeError"><?= isset($errors["edad"]) ? esc($errors["edad"]) : "" ?></p>

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