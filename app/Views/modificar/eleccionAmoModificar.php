<body>
    <a href="javascript:history.back()" class="boton-volver">
        ⬅ Volver
    </a>
    <div class="container-menu">
        <div class="container-form">
            <h1 class="titulo-alta">Selecciona el amo a modificar</h1>
            <?= form_open("pantallaModificarAmo", ['class' => 'form-alta form-modificar', "method" => "post"]) ?>
                <div class="container-inputs-alta">
                    <div class="container-input">
                        <div class="container-error">
                            <select name="amoModificar">
                                <?php foreach($amos as $amo): ?>
                                    <option value="<?= $amo["idAmo"] ?>"><?= $amo["nombre"] ?></option>
                                <?php endforeach ?>   
                            </select>
                        </div>
                        
                    </div>
                    
                    <?= form_submit("enviar", "Seleccionar") ?>
                </div>
            <?= form_close() ?>
        </div>
    </div>
</body>