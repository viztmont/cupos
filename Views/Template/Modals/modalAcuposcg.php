
<!-- Modal Add/Eddit-->
<div class="modal fade" id="modalFormAcuposC" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">

        <div class="modal-content">

            <div class="modal-header headerUpdate">
                <h5 class="modal-title" id="numCupoAC"> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                
                <form id="formAcuposC" name="formAcuposC" class="form-horizontal" >
                    <input type="hidden" id="idAcuposC" name="idAcuposC">
                    <input type="hidden" id="foto_actual" name="foto_actual" value="">
                    <input type="hidden" id="foto_remove" name="foto_remove" value="0">
                    <input type="hidden" id="txtAsesorACP" name="txtAsesorACP">
                    <input type="hidden" id="txtTiempoACo" name="txtTiempoACo">
                    <div class="row">

                        <div class="col-md-4">

                            <div class="form-group">
                                <label class="control-label">Asesor </label>
                                <input class="form-control" id="txtAsesorAC" name="txtAsesorAC" disabled="disabled">
                            </div>

                            <div class="form-group">
                                <div class="form-group">
                                    <label class="font-weight-bold">Cliente</label>
                                    <select class="form-control selectpicker" data-live-search="true" id="listClienteAC" name="listClienteAC" required="">
                                        <option class="font-weight-bold" value="CLIENTE 001">CLIENTE 001</option>
                                        <option class="font-weight-bold" value="CLIENTE 002">CLIENTE 002</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label font-weight-bold">Tipo log??stica</label>
                                <select class="form-control selectpicker" id="listTipoLogisticaAC" name="listTipoLogisticaAC" required="">
                                    <option class="font-weight-bold" value="">Seleccionar campo</option>
                                </select>
                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="form-group">
                                <label class="control-label font-weight-bold">Estado</label>
                                <select class="form-control selectpicker" id="listEstadoAC" name="listEstadoAC" required="">
                                    <option class="font-weight-bold" value="Libre">Libre</option>
                                    <option class="font-weight-bold" value="Programado">Programado</option>
                                    <option class="font-weight-bold" value="En proceso">En proceso</option>
                                    <option class="font-weight-bold" value="Cancelado">Cancelado</option>
                                </select> 
                            </div>
                            
                            <div class="form-group">

                                <label class="control-label font-weight-bold">Hora</label>

                                <div class="row">

                                    <div class="form-group col-md-4">
                                        <select class="form-control font-weight-bold" id="listHoraAC" name="listHoraAC"required="">
                                        </select>
                                    </div>
                                    
                                    <div class="form-group col-md-4">
                                        <select class="form-control font-weight-bold" id="listMinutosAC" name="listMinutosAC"required="">
                                            <option class="font-weight-bold" value="00">00</option>
                                            <option class="font-weight-bold" value="01">01</option>
                                            <option class="font-weight-bold" value="02">02</option>
                                            <option class="font-weight-bold" value="03">03</option>
                                            <option class="font-weight-bold" value="04">04</option>
                                            <option class="font-weight-bold" value="05">05</option>
                                            <option class="font-weight-bold" value="06">06</option>
                                            <option class="font-weight-bold" value="07">07</option>
                                            <option class="font-weight-bold" value="08">08</option>
                                            <option class="font-weight-bold" value="09">09</option>
                                            <option class="font-weight-bold" value="10">10</option>
                                            <option class="font-weight-bold" value="11">11</option>
                                            <option class="font-weight-bold" value="12">12</option>
                                            <option class="font-weight-bold" value="13">13</option>
                                            <option class="font-weight-bold" value="14">14</option>
                                            <option class="font-weight-bold" value="15">15</option>
                                            <option class="font-weight-bold" value="16">16</option>
                                            <option class="font-weight-bold" value="17">17</option>
                                            <option class="font-weight-bold" value="18">18</option>
                                            <option class="font-weight-bold" value="19">19</option>
                                            <option class="font-weight-bold" value="20">20</option>
                                            <option class="font-weight-bold" value="21">21</option>
                                            <option class="font-weight-bold" value="22">22</option>
                                            <option class="font-weight-bold" value="23">23</option>
                                            <option class="font-weight-bold" value="24">24</option>
                                            <option class="font-weight-bold" value="25">25</option>
                                            <option class="font-weight-bold" value="26">26</option>
                                            <option class="font-weight-bold" value="27">27</option>
                                            <option class="font-weight-bold" value="28">28</option>
                                            <option class="font-weight-bold" value="29">29</option>
                                            <option class="font-weight-bold" value="30">30</option>
                                            <option class="font-weight-bold" value="31">31</option>
                                            <option class="font-weight-bold" value="32">32</option>
                                            <option class="font-weight-bold" value="33">33</option>
                                            <option class="font-weight-bold" value="34">34</option>
                                            <option class="font-weight-bold" value="35">35</option>
                                            <option class="font-weight-bold" value="36">36</option>
                                            <option class="font-weight-bold" value="37">37</option>
                                            <option class="font-weight-bold" value="38">38</option>
                                            <option class="font-weight-bold" value="39">39</option>
                                            <option class="font-weight-bold" value="40">40</option>
                                            <option class="font-weight-bold" value="41">41</option>
                                            <option class="font-weight-bold" value="42">42</option>
                                            <option class="font-weight-bold" value="43">43</option>
                                            <option class="font-weight-bold" value="44">44</option>
                                            <option class="font-weight-bold" value="45">45</option>
                                            <option class="font-weight-bold" value="46">46</option>
                                            <option class="font-weight-bold" value="47">47</option>
                                            <option class="font-weight-bold" value="48">48</option>
                                            <option class="font-weight-bold" value="49">49</option>
                                            <option class="font-weight-bold" value="50">50</option>
                                            <option class="font-weight-bold" value="51">51</option>
                                            <option class="font-weight-bold" value="52">52</option>
                                            <option class="font-weight-bold" value="53">53</option>
                                            <option class="font-weight-bold" value="54">54</option>
                                            <option class="font-weight-bold" value="55">55</option>
                                            <option class="font-weight-bold" value="56">56</option>
                                            <option class="font-weight-bold" value="57">57</option>
                                            <option class="font-weight-bold" value="58">58</option>
                                            <option class="font-weight-bold" value="59">59</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">    
                                        <input class="form-control" id="txtTiempoAC" name="txtTiempoAC" disabled="disabled">
                                    </div> 

                                </div>

                            </div>

                            <div class="form-group">
                                
                                <div class="photo">
                                    <label class="font-weight-bold" for="foto">Cotizaci??n</label>
                                    <div class="prevPhoto">
                                        <span class="delPhoto notBlock">X</span>
                                        <label for="foto"></label>
                                        <div>
                                            <img id="img" src="<?= media(); ?>/images/uploads/portada_categoria.png">
                                        </div>
                                    </div>
                                    <div class="upimg">
                                        <input type="file" name="foto" id="foto">
                                    </div>
                                    <div id="form_alert"></div>
                                </div>  

                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="form-group">
                                <label class="control-label font-weight-bold">Observaci??n</label>
                                <textarea class="form-control font-weight-bold" id="txtObservacionAC" name="txtObservacionAC" rows="8"></textarea>
                            </div>

                        </div>                        

                        <div class="form-group col-xl-12">
                            <div class="form-group">
                                <label for="listArea">CLIENTE</label>
                                <select class="form-control" data-live-search="true" id="listCliente" name="listCliente">

                                </select>
                            </div>
                        </div>

                        <div class="form-group col-xl-12" id="flete">
                            <br>
                            <h5 class="text-center">Flete</h5>
                            <br>
                            <div class="row">

                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label class="control-label font-weight-bold">Flete</label>
                                        <input class="form-control font-weight-bold" id="txtFleteAC" name="txtFleteAC" type="text" placeholder="Flete" required="">
                                    </div>

                                </div>

                                <div class="col-md-4">
                                
                                    <div class="form-group">
                                        <label class="control-label font-weight-bold">Quintales </label>
                                        <input class="form-control font-weight-bold" id="txtQuintalesAC" name="txtQuintalesAC" type="text" placeholder="Quintales" required="">
                                    </div>

                                </div>

                            </div>

                        </div>     
                        
                        <div class="form-group col-xl-12" id="domicilio">
                            <br>
                            <h5 class="text-center">Datos del domicilio</h5>
                            <br>
                            <div class="row">

                                <div class="form-group col-md-3">
                                    <label class="font-weight-bold">Nombre Receptor</label>
                                    <input class="form-control font-weight-bold" id="txtNombreReceptorAC" name="txtNombreReceptorAC">
                                </div>
                                
                                <div class="form-group col-md-2">
                                    <label class="font-weight-bold">Contacto</label>
                                    <input type="tel" pattern="[0-9()+]{8}" class="form-control" id="numContactoReceptorAC" name="numContactoReceptorAC" maxlength="8">
                                </div>
                                
                                <div class="form-group col-md-2">
                                    <label class="font-weight-bold">Departamentos</label>
                                    <select class="form-control selectpicker" id="listDepartamentosReceptorAC" name="listDepartamentosReceptorAC" required>
                                        <option selected>Seleccione</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-2">
                                    <label class="font-weight-bold">Municipios</label>
                                    <select class="form-control" id="listMunicipiosReceptorAC" name="listMunicipiosReceptorAC">
                                        <option selected>Seleccione</option>
                                    </select>
                                </div>
                                
                                <div class="form-group col-md-3">
                                    <label class="font-weight-bold">Direcci??n</label>
                                    <input type="text" class="form-control font-weight-bold" id="txtDireccionReceptorAC" name="txtDireccionReceptorAC">
                                </div>
                            
                            </div>
                        </div>
                    
                    </div>

                    <div class="col-lg-4">
                        <button id="btnActionForm" class="btn btn-info"  type="submit"><i
                            class="fa fa-fw fa-lg fa-check-circle"></i><span
                            id="btnText">Guardar</span>
                        </button>&nbsp;&nbsp;&nbsp;
                        <button class="btn btn-danger" type="button" data-dismiss="modal"><i
                            class="fa fa-fw fa-lg fa-times-circle"></i>Cerrar
                        </button>
                    </div>
                    <br>

                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal View-->
<div class="modal fade" id="modalViewAcupoC" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header header-primary">
                <h5 class="modal-title" id="titleModal">Datos del cupo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <tbody>

                        <tr>
                            <td>Id:</td>
                            <td id="celCupo">1</td>
                        </tr>

                        <tr>
                            <td>Asesor:</td>
                            <td id="celAsesor">Jacob</td>
                        </tr>

                        <tr>
                            <td>Cliente:</td>
                            <td id="celCliente">Jacob</td>
                        </tr>

                        <tr>
                            <td>Estado:</td>
                            <td id="celEstado">Jacob</td>
                        </tr>

                        <tr>
                            <td>Log??stica:</td>
                            <td id="celLogistica">Jacob</td>
                        </tr>

                        <tr>
                            <td>Cotizaci??n:</td>
                            <td id="imgCotizacion">Activo</td>
                        </tr>

                        <tr>
                            <td>Hora asignada:</td>
                            <td id="celHora_asignada">Jacob</td>
                        </tr>

                        <tr>
                            <td>Observaci??n:</td>
                            <td id="celObservacion"></td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<?php footerAdmin($data); ?>

<!-- OCULTAR FLETE Y DATOS DEL DOMICILIO-->
<script>
    let tipo = ["Transporte propio", "Domicilio"];
    let listTipoLogistica = document.getElementById("listTipoLogisticaAC");
    function Recorrer(combobox, valores) {
        document.getElementById('flete').style.display = 'none';
        document.getElementById('domicilio').style.display = 'none';
        for (let index of valores) {
            combobox.innerHTML += `<option value="${index}">${index}</option>`;
        }
    }
    
    function llenarDepar() {
        Recorrer(listTipoLogistica, tipo);
    }

    llenarDepar();

    listTipoLogistica.addEventListener("change", (e) => {
        let dato = e.target.value;
        
        switch (dato) {
            case "Transporte propio":
                document.getElementById('flete').style.display = 'none';
                document.getElementById('domicilio').style.display = 'none';
            break;
            case "Transporte propio":
                document.getElementById('flete').style.display = 'none';
                document.getElementById('domicilio').style.display = 'none';
            break;
            case "Domicilio":
                document.getElementById('flete').style.display = 'block';
                document.getElementById('domicilio').style.display = 'block';
            break;
            
            default:
            break;
        }
    });


</script>
<!-- LLENAR DEPARTAMENTOS Y MUNICIPIO -->
<script>
    let departamentos = ["Ahuachap??n","Caba??as", "Chalatenango", "Cuscatl??n", "La Libertad", "La Paz", "La Uni??n", "Moraz??n", "San Miguel", "San Salvador", "San Vicente", "Santa Ana", "Sonsonate", "Usulut??n"];
      let ahuchapan = ["Ahuachap??n","Apaneca","Atiquizaya","Concepci??n de Ataco","El Refugio"," Guaymango","Jujutla","San Francisco Men??ndez","San Lorenzo","San Pedro Puxtla","Tacuba","Tur??n"];
      let cabanas = ["Sensuntepeque", "Cinquera", "Dolores", "Guacotecti", "Ilobasco", "Jutiapa", "San Isidro", "Tejutepeque", "Victoria"];
      let chalatenango = ["Chalatenango","Agua Caliente","Arcatao","Azacualpa","Cital??","Comalapa","Concepci??n Quezaltepeque","Dulce Nombre de Mar??a","El Carrizal","El Para??so","La Laguna","La Palma","La Reina","Las Flores","Las Vueltas","Nombre de Jes??s","Nueva Concepci??n","Nueva Trinidad","Ojos de Agua","Potonico","San Antonio de La Cruz","San Antonio Los Ranchos","San Fernando","San Francisco Lempa","San Francisco Moraz??n","San Ignacio","San Isidro Labrador","San Luis del Carmen","San Miguel de Mercedes","San Rafael","Santa Rita","Tejutla"];
      let cuscatlan = ["Cojutepeque","Candelaria","El Carmen","El Rosario","Monte San Juan","Oratorio de Concepci??n","San Bartolom?? Perulap??a","San Crist??bal","San Jos?? Guayabal","San Pedro Perulap??n","San Rafael Cedros","San Ram??n","Santa Cruz Analquito","Santa Cruz Michapa","Suchitoto","Tenancingo"];
      let laLibertad = ["Santa Tecla","Antiguo Cuscatl??n","Chiltiup??n","Ciudad Arce","Col??n","Comasagua","Huiz??car","Jayaque","Jicalapa","La Libertad","Nuevo Cuscatl??n","Quezaltepeque","Sacacoyo","San Jos?? Villanueva","San Juan Opico","San Mat??as","San Pablo Tacachico","Tanique","Tamanique","Teotepeque","Tepecoyo","Zaragoza"];
      let laPaz = ["Zacatecoluca","Cuyultit??n","El Rosario","Jerusal??n","Mercedes La Ceiba","Olocuilta","Para??so de Osorio","San Antonio Masahuat","San Emigdio","San Francisco Chinameca","San Juan Nonualco","San Juan Talpa","San Juan Tepezontes","San Luis La Herradura","San Luis Talpa","San Miguel Tepezontes","San Pedro Masahuat","San Pedro Nonualco","San Rafael Obrajuelo","Santa Mar??a Ostuma","Santiago Nonualco","Tapalhauca"];
      let laUnion = ["La Uni??n","Anamor??s","Bol??var","Concepci??n de Oriente","Conchagua","El Carmen","El Sauce","Intipuc??","Lislique","Meanguera del Golfo","Nueva Esparta","Pasaquina","Polor??s","San Alejo","San Jos??","Santa Rosa de Lima","Yayantique","Yucuaiqu??n",];
      let morazan = ["San Francisco Gotera","Arambala","Cacaopera","Chilanga","Corinto","Delicias de Concepci??n","El Divisadero","El Rosario","Gualococti","Guatajiagua","Joateca","Jocoaitique","Jocoro","Lolotiquillo","Meanguera","Osicala","Perqu??n","San Carlos","San Fernando","San Isidro","San Sim??n","Sensembra","Sociedad","Torola","Yamabal","Yoloaiqu??n"];
      let sanMiguel = ["San Miguel","Carolina","Chapeltique","Chinameca","Chirilagua","Ciudad Barrios","Comacar??n","El Tr??nsito","Lolotique","Moncagua","Nueva Guadalupe","Nuevo Ed??n de San Juan","Quelepa","San Antonio del Mosco","San Gerardo","San Jorge","San Luis de La Reina","San Rafael Oriente","Sesori","Uluazapa"];
      let sanSalvador = ["San Salvador","Aguilares","Apopa","Ayutuxtepeque","Ciudad Delgado","Cuscatancingo","El Paisnal","Guazapa","Ilopango","Mejicanos","Nejapa","Panchimalco","Rosario de Mora","San Marcos","San Mart??n","Santiago Texacuangos","Santo Tom??s","Soyapango","Tonacatepeque"];
      let sanVicente = ["San Vicente","Apastepeque","Guadalupe","San Cayetano Istepeque","San Esteban Catarina","San Ildefonso","San Lorenzo","San Sebasti??n","Santa Clara","Santo Domingo","Tecoluca","Tepetit??n","Verapaz"];
      let santaAna = ["Santa Ana"," Candelaria de la Frontera","Chalchuapa","Coatepeque","El Congo","El Porvenir","Masahuat","Metap??n","San Antonio Pajonal","San Sebasti??n Salitrillo","Santa Rosa Guachipil??n","Santiago de la Frontera","Texistepeque"];
      let sonsonate = ["Sonsonate","Acajutla","Armenia","Caluco","Cuisnahuat","Izalco","Juay??a","Nahulingo","Nahuizalco","Salcoatit??n","San Antonio del Monte","San Juli??n","Santa Catarina Masahuat"," Santa Isabel Ishuat??n","Santo Domingo de Guzm??n","Sonzacate"];
      let usulutan = ["Usulut??n","Alegr??a","Berl??n","California","Concepci??n Batres","El Triunfo","Ereguayqu??n","Estanzuelas","Jiquilisco","Jucuapa","Jucuar??n","Mercedes Uma??a","Nueva Granada","Ozatl??n","Puerto El Triunfo","San Agust??n","San Buenaventura","San Dionisio","San Francisco Javier","Santa Elena","Santa Mar??a","Santiago de Mar??a","Tecap??n"];


      let listDepartamentosAC = document.getElementById("listDepartamentosReceptorAC");
      let listMunicipiosAC = document.getElementById("listMunicipiosReceptorAC");

      function Recorrer(combobox, valores) {
        listMunicipiosAC.innerHTML = "";
        for (let index of valores) {
          combobox.innerHTML += `
                <option class="font-weight-bold" value="${index}">${index}</option>
                `;
        }
      }

    
      function llenarDepar() {
        Recorrer(listDepartamentosAC, departamentos);
      }

      llenarDepar();

      listDepartamentosAC.addEventListener("change", (e) => {
        let dato = e.target.value;

        switch (dato) {
          case "Ahuachap??n":
            Recorrer(listMunicipiosAC, ahuchapan.slice());
            break;
          case "Caba??as":
            Recorrer(listMunicipiosAC, cabanas.slice());
            break;
          case "Chalatenango":
            Recorrer(listMunicipiosAC, chalatenango.slice());
            break;
            case "Cuscatl??n":
            Recorrer(listMunicipiosAC, cuscatlan.slice());
            break;
            case "La Libertad":
            Recorrer(listMunicipiosAC, laLibertad.slice());
            break;
            case "La Paz":
            Recorrer(listMunicipiosAC, laPaz.slice());
            break;
            case "La Uni??n":
            Recorrer(listMunicipiosAC, laUnion.slice());
            break;
            case "Moraz??n":
            Recorrer(listMunicipiosAC, morazan.slice());
            break;            
            case "San Miguel":
            Recorrer(listMunicipiosAC, sanMiguel.slice());
            break;
            case "San Salvador":
            Recorrer(listMunicipiosAC, sanSalvador.slice());
            break;
            case "San Vicente":
            Recorrer(listMunicipiosAC, sanVicente.slice());
            break;
            case "Santa Ana":
            Recorrer(listMunicipiosAC, santaAna.slice());
            break;
            case "Sonsonate":
            Recorrer(listMunicipiosAC, sonsonate.slice());
            break;
            case "Usulut??n":
            Recorrer(listMunicipiosAC, usulutan.slice());
            break;

          default:
            break;
        }
      });
</script>