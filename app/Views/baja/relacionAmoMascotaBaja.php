<body>
    <a href="javascript:history.back()" class="boton-volver">
        ⬅ Volver
    </a>
    <div class="container-menu">
        <div class="container-form">
            <h1>Dar de baja un par Amo-Mascota</h1>
             <?= form_open("darDeBajaRelacionAmoMascota", ['class' => 'form-alta', "method" => "post"]) ?>
                <div class="container-inputs-alta">

                    <div class="container-input">
                        <?= form_label("Mascotas:","mascotas") ?>
                        <div class="container-error">
                            <select name="mascotas" id="select-mascota">
                                <option value="" selected disabled>Seleccione una mascota</option>
                                <?php  foreach ($mascotas as $mascota):  ?>
                                    <option value="<?= $mascota["idMascotas"] ?>">
                                        <?= $mascota["nombre"] ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>

                    <div class="container-input">
                        <?= form_label("Amos:","amos") ?>
                        <div class="container-error">
                            <select name="amos" id="select-amos">
                                <option value="" selected disabled>Selecciona un amo</option>
                            </select>
                        </div>
                        
                    </div>

                    <div class="container-input">
                        <?= form_label("Motivo", "motivo")?>
                        <div class="container-error">
                            <select name="motivo">
                                <option value="" selected disabled>Seleccione un motivo</option>
                                <option value="fallecimiento">Fallecimiento</option>
                                <option value="vendida">Vendida</option>
                            </select>
                        </div>
                        
                    </div>
                </div>
                <div class="container-btn-enviar">
                    <?= form_submit("enviar", "Dar de baja") ?>
                </div>
            <?= form_close() ?>
        </div>
    </div>





<script>

    document.getElementById("select-mascota").addEventListener("change", function() {

        const idMascota = this.value
        
        const selectAmos = document.getElementById("select-amos")

        const baseUrl = "<?= site_url() ?>";

        selectAmos.innerHTML = '<option value="">Selecciona un amo</option>';

        if(idMascota){
            fetch(`${baseUrl}buscarAmoActual/${idMascota}`)
                .then(res => res.json())
                .then( data => {
                    const option = document.createElement("option")
                    option.value = data.idAmo
                    option.textContent = data.nombre
                    selectAmos.appendChild(option)
                })
        }else{
            selectAmos.innerHTML = '<option value="">Selecciona un amo</option>'
        }

    })

</script>





</body>