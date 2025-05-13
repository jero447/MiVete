<body>
    <div class="container-menu">
        <div class="container-form">
            <h1 class="titulo-alta">Selecciona el amo a modificar</h1>
            <?= form_open("pantallaModificarAmo", ['class' => 'form-alta form-modificar', "method" => "post"]) ?>
                <div class="container-inputs-alta">
                    <select name="amoModificar">
                        <?php foreach($amos as $amo): ?>
                            <option value="<?= $amo["idAmo"] ?>"><?= $amo["nombre"] ?></option>
                        <?php endforeach ?>   
                    </select>
                    <?= form_submit("enviar", "Seleccionar") ?>
                </div>
            <?= form_close() ?>
        </div>
    </div>
</body>