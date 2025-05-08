<body>
    <div class="container-menu">
        <div class="container-form">
            <h1 class="titulo-alta">Dar de alta a una mascota</h1>
            <?= form_open("insertarMascota", ['class' => 'form-alta', "method" => "post"]) ?>
            <div class="container-inputs-alta">
                <div>
                    <?= form_label("Nombre:","nombre") ?>
                    <?=form_input([ "name" => "nombre"])?>
                </div>
                <div>
                    <?= form_label("Especie:","especie") ?>
                    <?=form_input([ "name" => "especie"])?>
                </div>
            </div>

            <div class="container-inputs-alta">
                <div>
                    <?= form_label("Raza:","raza") ?>
                    <?=form_input([ "name" => "raza"])?>
                </div>
                <div>
                    <?= form_label("Nro. Registro:","nro_registro") ?>
                    <?=form_input([ "name" => "nro_registro"])?>
                </div>
            </div>

            <div class="container-inputs-alta">
                <div>
                    <?= form_label("Edad:","edad") ?>
                    <?=form_input([ "name" => "edad"])?>
                </div>
            </div>
            <div class="container-btn-enviar">
                <?= form_submit("enviar", "Enviar") ?>
            </div>
                
            <?= form_close() ?>
        </div>
    </div>
</body>