<body>
    <div class="container-menu">
        <div class="container-form">
            <h1 class="titulo-alta">Modificar veterinario</h1>
            <?= form_open("modificarVeterinario", ['class' => 'form-alta', "method" => "post"]) ?>
            <div class="container-inputs-alta">
                <div>
                    <?= form_label("Nombre:","nombre") ?>
                    <?=form_input([ "name" => "nombre", "value" => $veterinarioModificar["nombre"]])?>
                </div>
                <div>
                    <?= form_label("Especialidad:","especialidad") ?>
                    <?=form_input([ "name" => "especialidad", "value" => $veterinarioModificar["especialidad"]])?>
                </div>
            </div>

            <div class="container-inputs-alta">
                
                <div>
                    <?= form_label("Telefono:","telefono") ?>
                    <?=form_input([ "name" => "telefono", "value" => $veterinarioModificar["telefono"]])?>
                </div>
                
            </div>

            <?= form_hidden("idVeterinario", $veterinarioModificar["idVeterinario"]) ?>

            <div class="container-btn-enviar">
                <?= form_submit("enviar", "Modificar") ?>
            </div>
                
            <?= form_close() ?>
        </div>
    </div>
</body>