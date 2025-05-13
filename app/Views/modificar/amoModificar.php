<body>
    <div class="container-menu">
        <div class="container-form">
            <h1 class="titulo-alta">Modificar Amo</h1>
            <?= form_open("modificarAmo", ['class' => 'form-alta', "method" => "post"]) ?>
            <div class="container-inputs-alta">
                <div>
                    <?= form_label("Nombre:","nombre") ?>
                    <?=form_input([ "name" => "nombre", "value" => $amoModificar["nombre"]])?>
                </div>
                <div>
                    <?= form_label("Direccion:","direccion") ?>
                    <?=form_input([ "name" => "direccion", "value" => $amoModificar["direccion"]])?>
                </div>
            </div>

            <div class="container-inputs-alta">
                
                <div>
                    <?= form_label("Telefono:","telefono") ?>
                    <?=form_input([ "name" => "telefono", "value" => $amoModificar["telefono"]])?>
                </div>

                <?= form_hidden("idAmo", $amoModificar["idAmo"]) ?>

            </div>

            <div class="container-btn-enviar">
                <?= form_submit("enviar", "Modifcar") ?>
            </div>
                
            <?= form_close() ?>
        </div>
    </div>
</body>