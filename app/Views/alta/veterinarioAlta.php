<body>
    <div class="container-menu">
        <div class="container-form">
            <h1 class="titulo-alta">Dar de alta a un veterinario</h1>
            <?= form_open("insertarVeterinario", ['class' => 'form-alta', "method" => "post"]) ?>
            <div class="container-inputs-alta">
                <div>
                    <?= form_label("Nombre:","nombre") ?>
                    <?=form_input([ "name" => "nombre"])?>
                </div>
                <div>
                    <?= form_label("Especialidad:","especialidad") ?>
                    <?=form_input([ "name" => "especialidad"])?>
                </div>
            </div>

            <div class="container-inputs-alta">
                
                <div>
                    <?= form_label("Telefono:","telefono") ?>
                    <?=form_input([ "name" => "telefono"])?>
                </div>
                
            </div>

            <div class="container-btn-enviar">
                <?= form_submit("enviar", "Enviar") ?>
            </div>
                
            <?= form_close() ?>
        </div>
    </div>
</body>