<body>
    <div class="container-menu">
        <div class="container-form">
            <h1 class="titulo-alta">Modificar mascota</h1>
            <?= form_open("modificarMascota", ['class' => 'form-alta', "method" => "post"]) ?>
            <div class="container-inputs-alta">
                <div>
                    <?= form_label("Nombre:","nombre") ?>
                    <?=form_input([ "name" => "nombre", "value" => $mascotaModificar["nombre"]])?>
                </div>
                <div>
                    <?= form_label("Especie:","especie") ?>
                    <?=form_input([ "name" => "especie", "value" => $mascotaModificar["especie"]])?>
                </div>
            </div>

            <div class="container-inputs-alta">
                <div>
                    <?= form_label("Raza:","raza") ?>
                    <?=form_input([ "name" => "raza", "value" => $mascotaModificar["raza"]])?>
                </div>
                <div>
                    <?= form_label("Nro. Registro:","nro_registro") ?>
                    <?=form_input([ "name" => "nro_registro", "value" => $mascotaModificar["nroRegistro"]])?>
                </div>
            </div>

            <div class="container-inputs-alta">
                <div>
                    <?= form_label("Edad:","edad") ?>
                    <?=form_input([ "name" => "edad", "value" => $mascotaModificar["edad"]])?>
                </div>
            </div>

            <?= form_hidden("idMascotas", $mascotaModificar["idMascotas"]) ?>

            <div class="container-btn-enviar">
                <?= form_submit("enviar", "Modificar") ?>
            </div>
                
            <?= form_close() ?>
        </div>
    </div>
</body>