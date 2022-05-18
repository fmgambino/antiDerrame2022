<main class=" container-fluid" style="overflow-y:scroll;">

  <div class="">

    <div class="container-fluid">
      <div class="">
        <!-- widget temperatura-->
        <div id="m-booked-prime-days-99676 ">
          <div class="weather-customize widget-type-prime-days .d-block d-sm-block d-md-none">
            <div class="booked-prime-days-in">
              <div class="booked-prime-days-data">
                <div class="booked-pd-today">
                  <div class="booked-pd-today-img wrz-03 "></div>
                  <div class="booked-pd-today-temperature">
                    <div class="booked-wzs-pd-val">
                      <div class="booked-wzs-pd-number"><span class="plus">+</span>25</div>
                      <div class="booked-wzs-pd-dergee">
                        <div class="booked-wzs-pd-dergee-val">&deg;</div>
                        <div class="booked-wzs-pd-dergee-name">C</div>
                      </div>
                    </div>
                  </div>
                  <div class="booked-pd-today-extreme">
                    <div class="booked-pd booked-pd-h"><span>Alta:</span><span class="plus">+</span>32</div>
                    <div class="booked-pd booked-pd-l"><span>Baja:</span><span class="plus">+</span>16</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row ">
      <!-- TEMP -->
      <div class="col-12 col-md-6 col-xl-4">
        <div class="mdl-card  weather">
          <div class="mdl-card__supporting-text mdl-card--expand hc-color-naranja">
            <div class="mdl-card__title">
              <h2 class="mdl-card__title-text">Temperatura</h2>
              <i class="material-icons">thermostat</i>
            </div>
            <div class="mdl-card__supporting-text mdl-card--expand hc-contenedor row">
              <p id="display_tempamb" class="weather-temperature  hc-valor">--<sup>&deg;</sup></p>
              <h1 class="hc-unidades">°C</h1>
            </div>
          </div>
        </div>
      </div>
      <!-- HUM-->
      <div class="col-12 col-md-6 col-xl-4">
        <div class="mdl-card  weather">
          <div class="mdl-card__supporting-text mdl-card--expand hc-color-celeste">
            <div class="mdl-card__title">
              <h2 class="mdl-card__title-text ">Humedad %</h2>
            </div>
            <div class="mdl-card__supporting-text mdl-card--expand hc-contenedor row">
              <p id="display_hum" class="weather-temperature hc-valor">--</p>
              <h1 class="hc-unidades">%</h1>
            </div>
          </div>
        </div>
      </div>
      <!-- Nivel CO2 -->
      <div class="col-12 col-md-6 col-xl-4">
        <div class="mdl-card  weather">
          <div class="mdl-card__supporting-text mdl-card--expand hc-color-gris ">
            <div class="mdl-card__title">
              <h2 class="mdl-card__title-text">CO2</h2>
              <i class="material-icons">local_fire_department</i>
              <div class="mdl-layout-spacer"></div>
            </div>
            <div class="mdl-card__supporting-text mdl-card--expand row hc-contenedor" style="">
              <p id="display_co2" class="hc-valor weather-temperature ">--<sup>&deg;</sup></p>
              <h1 class="hc-unidades">PPM</h1>
            </div>
          </div>
        </div>
      </div>
      <!-- pH -->
      <div class="col-12 col-md-6 col-xl-4">
        <div class="mdl-card  weather">
          <div class="mdl-card__supporting-text mdl-card--expand hc-color-verde">
            <div class="mdl-card__title">
              <h2 class="mdl-card__title-text">pH</h2>
              <i class="material-icons">colorize</i>


            </div>
            <p id="display_ph" class="weather-temperature">--</p>

          </div>
        </div>
      </div>
      <!-- Conductividad -->
      <div class="col-12 col-md-6 col-xl-4">
        <div class="mdl-card  weather">
          <div class="mdl-card__supporting-text mdl-card--expand hc-color-azul">
            <div class="mdl-card__title">
              <h2 class="mdl-card__title-text">Conductividad</h2>
              <i class="material-icons">bolt</i>
            </div>
            <div class="hc-contenedor row">
              <p id="display_cdtv" class="weather-temperature hc-valor ">--</p>
              <h1 class="hc-unidades">uS/cm</h1>
            </div>
          </div>
        </div>
      </div>
      <!-- H2O -->
      <div class="col-12 col-md-6 col-xl-4">
        <div class="mdl-card  weather">
          <div class="mdl-card__supporting-text mdl-card--expand hc-color-azul-2">
            <div class="mdl-card__title">
              <h2 class="mdl-card__title-text ">Nivel H2O</h2>
              <i class="material-icons">water</i>
            </div>
            <div>
              <p id="display_niv" class="weather-temperature hc-textresposive p-1">--</p>
            </div>
          </div>
        </div>
      </div>


    </div>


    <!-- Actuadores-->
    <div class="row">
      <div class="col-12 col-md-4 hc-box-a">
        <div class="mdl-card  trending">
          <div class="mdl-card__supporting-text hc-color-rojo">
            <div class="mdl-card__title ">
              <h2 class="mdl-card__title-text">Actuadores</h2>
            </div>
            <ul class="mdl-list">
              <li class="mdl-list__item">
                <span class="mdl-list__item-primary-content list__item-text">BOMBA DE AGUA</span>
                <span class="mdl-list__item-secondary-content" style="padding-top: 6px;">
                  <!-- SWITCH-->
                  <label class="switch mr-2">
                    <input onchange="sw1_change()" type="checkbox" id="display_sw1">
                    <span class="slider round"></span>
                  </label>
                </span>
                <img src="<?php echo base_url('images/cancel.png') ?>" class="hc-icono-cancel" id="icono1" alt="">
              </li>
              <li class="mdl-list__item list__item--border-top">
                <span class="mdl-list__item-primary-content list__item-text">EXTRACTORES</span>
                <span class="mdl-list__item-secondary-content " style="padding-top: 6px;">
                  <!-- SWITCH-->
                  <label class="switch mr-2">
                    <input onchange="sw2_change()" type="checkbox" id="display_sw2">
                    <span class="slider round"></span>
                  </label>
                </span>
                <img src="<?php echo base_url('images/cancel.png') ?>" class="hc-icono-cancel" id="icono2" alt="">
              </li>

              <li class="mdl-list__item list__item--border-top">
                <span class="mdl-list__item-primary-content list__item-text">DIFUSOR C02</span>
                <span class="mdl-list__item-secondary-content" style="padding-top: 6px;">
                  <!-- SWITCH-->
                  <label class="switch mr-2">
                    <input onchange="sw3_change()" type="checkbox" id="display_sw3">
                    <span class="slider round"></span>
                  </label>
                </span>
                <img src="<?php echo base_url('images/cancel.png') ?>" class="hc-icono-cancel" id="icono3" alt="">
              </li>

              <li class="mdl-list__item list__item--border-top">
                <span class="mdl-list__item-primary-content list__item-text">LUCES UV</span>
                <span class="mdl-list__item-secondary-content">
                  <input onchange="slider_change()" id="display_slider" class="mdl-slider mdl-js-slider slider--colored-light-blue" type="range" min="0" max="254" value="100" tabindex="0">
                </span>

              </li>

              <div class="mdl-card__title ">
                <h2 class="mdl-card__title-text">Parámetros </h2>
              </div>

              <form id="formulario">
                <li class="mdl-list__item list__item--border-top row hc-hover">
                  <div class="col-12 text-center mb-3">
                    <span class="">TEMPERATURA en °C</span>
                  </div>
                  <div class="col-6">
                    <span class="mdl-list__item-secondary-content">
                      <input name="formtempmin" class="form-control" placeholder="Min en °C" type="text">
                    </span>
                  </div>
                  <div class="col-6">
                    <span class="mdl-list__item-secondary-content">
                      <input name="formtempmax" class="form-control" placeholder="Max en °C" type="text">
                    </span>
                  </div>
                </li>

                <li class="mdl-list__item list__item--border-top row hc-hover">
                  <div class="col-12 text-center mb-3">
                    <span class="">HUMEDAD en %</span>
                  </div>
                  <div class="col-6">
                    <span class="mdl-list__item-secondary-content">
                      <input name="formhummin" class="form-control" placeholder="Min en %" type="text">
                    </span>
                  </div>
                  <div class="col-6">
                    <span class="mdl-list__item-secondary-content">
                      <input name="formhummax" class="form-control" placeholder="Max en %" type="text">
                    </span>
                  </div>
                </li>

                <li class="mdl-list__item list__item--border-top row hc-hover">
                  <div class="col-12 text-center mb-3">
                    <span class="">CO2 en PPM</span>
                  </div>
                  <div class="col-6">
                    <span class="mdl-list__item-secondary-content">
                      <input name="formco2min" class="form-control" placeholder="Min en PPM" type="text">
                    </span>
                  </div>
                  <div class="col-6">
                    <span class="mdl-list__item-secondary-content">
                      <input name="formco2max" class="form-control" placeholder="Max en PPM" type="text">
                    </span>
                  </div>
                </li>

                <li class="mdl-list__item list__item--border-top">
                  <div style="width: 50%; text-align: initial; ">
                    <span class="mdl-list__item-primary-content list__item-text ">TIEMPO DE CIRCULACION DE AGUA</span>
                  </div>
                  <div style="width: 50%; padding-left: 15px; padding-right: 15px;">
                    <span class="mdl-list__item-secondary-content ">
                      <input name="formtime" id="" class="form-control " placeholder="Tiempo en min." type="text">
                    </span>
                  </div>
                </li>

                <button type="submit" class=" btn btn-primary mt-3 pl-5 pr-5">Enviar</button>

              </form>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-8 hc-box-b">
        <!-- Table-->
        <!-- Line chart-->
        <div class="">
          <div class="mdl-card mdl-shadow--2dp line-chart">
            <div class="mdl-card__title">
              <h2 class="mdl-card__title-text hc-color-text-gris">Nivel CO2</h2>
            </div>
            <div class="mdl-card__supporting-text">
              <canvas id="my_chart" width="300" height="300"></canvas>
            </div>
          </div>
        </div>
        <!-- Table-->

        <!-- Table-->
        <!-- Line chart 2-->
        <div class="">
          <div class="mdl-card mdl-shadow--2dp line-chart">
            <div class="mdl-card__title">
              <h2 class="mdl-card__title-text hc-color-text-naranja">Tem. Ambiente</h2>
            </div>
            <div class="mdl-card__supporting-text">
              <canvas id="my_chart2" width="300" height="300"></canvas>
            </div>
          </div>
        </div>
        <!-- Table-->


      </div>
    </div>
  </div>
  </div>
</main>
<script type="text/javascript">
  var css_file = document.createElement("link");
  var widgetUrl = location.href;
  css_file.setAttribute("rel", "stylesheet");
  css_file.setAttribute("type", "text/css");
  css_file.setAttribute("href", 'https://s.bookcdn.com/css/w/booked-wzs-widget-prime-days.css?v=0.0.1');
  document.getElementsByTagName("head")[0].appendChild(css_file);

  function setWidgetData_99676(data) {
    if (typeof(data) != 'undefined' && data.results.length > 0) {
      for (var i = 0; i < data.results.length; ++i) {
        var objMainBlock = document.getElementById('m-booked-prime-days-99676');
        if (objMainBlock !== null) {
          var copyBlock = document.getElementById('m-bookew-weather-copy-' + data.results[i].widget_type);
          objMainBlock.innerHTML = data.results[i].html_code;
          if (copyBlock !== null) objMainBlock.appendChild(copyBlock);
        }
      }
    } else {
      alert('data=undefined||data.results is empty');
    }
  }
  var widgetSrc = "https://widgets.booked.net/weather/info?action=get_weather_info;ver=7;cityID=37228;type=6;scode=124;ltid=3457;domid=582;anc_id=60187;countday=4;cmetric=1;wlangID=4;color=ffffff;wwidth=250;header_color=ffffff;text_color=ffffff;link_color=ffffff;border_form=1;footer_color=ffffff;footer_text_color=ffffff;transparent=1;v=0.0.1";
  widgetSrc += ';ref=' + widgetUrl;
  widgetSrc += ';rand_id=99676';
  var weatherBookedScript = document.createElement("script");
  weatherBookedScript.setAttribute("type", "text/javascript");
  weatherBookedScript.src = widgetSrc;
  document.body.appendChild(weatherBookedScript)
</script><!-- weather widget end -->
<script>
  var ctx = document.getElementById('my_chart').getContext('2d');
  var ctx2 = document.getElementById('my_chart2').getContext('2d');
  //var ctx3 = document.getElementById('my_chart3').getContext('2d');
  //var ctx4 = document.getElementById('my_chart4').getContext('2d');

  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: [<?php echo $dates ?>],
      datasets: [{
        label: '° C',
        data: [<?php echo $co2s ?>],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
        ],
        borderWidth: 1
      }]
    },
    options: {
      maintainAspectRatio: false,
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });


  var myChart2 = new Chart(ctx2, {
    type: 'line',
    data: {
      labels: [<?php echo $dates ?>],
      datasets: [{
        label: '%',
        data: [<?php echo $hums ?>],
        backgroundColor: [
          'rgba(30, 170, 132, 0.2)',
        ],
        borderColor: [
          'rgba(30, 170, 132, 1)',
        ],
        borderWidth: 1
      }]
    },
    options: {
      maintainAspectRatio: false,
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
  /*
   var myChart3 = new Chart(ctx3, {
     type: 'line',
     data: {
       labels: [<?php echo $dates ?>],
       datasets: [{
         label: 'pH',
         data: [<?php echo $phs ?>],
         backgroundColor: [
           'rgba(30, 170, 132, 0.2)',
         ],
         borderColor: [
           'rgba(30, 170, 132, 1)',
         ],
         borderWidth: 1
       }]
     },
     options: {
       maintainAspectRatio: false,
       scales: {
         yAxes: [{
           ticks: {
             beginAtZero: true
           }
         }]
       }
     }
   });
  */
  /*
       var myChart4 = new Chart(ctx4, {
         type: 'line',
         data: {
           labels: [<?php echo $dates ?>],
           datasets: [{
             label: '%',
             data: [<?php echo $co2s ?>],
             backgroundColor: [
               'rgba(30, 170, 132, 0.2)',
             ],
             borderColor: [
               'rgba(30, 170, 132, 1)',
             ],
             borderWidth: 1
           }]
         },
         options: {
           maintainAspectRatio: false,
           scales: {
             yAxes: [{
               ticks: {
                 beginAtZero: true
               }
             }]
           }
         }
       });
     */

  var formulario = document.getElementById('formulario');
  formulario.addEventListener('submit', function(e) {
    e.preventDefault();
    console.log('capture el click');

    var datos = new FormData(formulario);
    if (datos.get('formtempmin') === "" || datos.get('formtempmax') === "" || datos.get('formhummin') === "" || datos.get('formhummax') === "" || datos.get('formco2min') === "" || datos.get('formco2max') === "" || datos.get('formtime') === "") {
      console.log('completar todos los campos');
      Swal.fire({
        title: 'Debes Completar Todos Los Campos!',
        icon: 'error',
        confirmButtonText: 'ok'
      })
    } else {
      client.publish(device_topic + 'actions/ftempmin', datos.get('formtempmin'));
      client.publish(device_topic + 'actions/ftempmax', datos.get('formtempmax'));
      client.publish(device_topic + 'actions/fhummin', datos.get('formhummin'));
      client.publish(device_topic + 'actions/fhummax', datos.get('formhummax'));
      client.publish(device_topic + 'actions/fco2min', datos.get('formco2min'));
      client.publish(device_topic + 'actions/fco2max', datos.get('formco2max'));
      client.publish(device_topic + 'actions/ftime', datos.get('formtime'));

      Swal.fire(
        'perfecto!',
        'Datos enviados con exito!',
        'success'
      )
    }
  })

  const options = {
    connectTimeout: 1000,
    // Authentication
    clientId: 'client_id_' + Math.floor((Math.random() * 1000000) + 1),
    username: '<?php echo MQTT_USER; ?>',
    password: '<?php echo MQTT_PASSWORD; ?>',
    keepalive: 60,
    clean: true,
  }

  // WebSocket connect url
  const WebSocket_URL = 'wss://broker.emqx.io:8084/mqtt';
  const client = mqtt.connect(WebSocket_URL, options)

  var device_topic = '<?php echo ROOT_TOPIC . "/" . $_SESSION['selected_topic'] . "/" ?>';
  client.on('connect', () => {
    console.log('Conexión Exitosa ^_^');

    client.subscribe(device_topic + "data", {
      qos: 0
    }, (error) => {
      if (error) {
        console.log("Error al Suscribir");
      } else {
        console.log("Suscrito al Broker con Exito!");
        console.log("Proyecto de Inversión");
        console.log("San Miguel de Tucumán - Tucumán - Argentina");
        console.log("by ELECTRÓNICA GAMBINO");
        console.log("2022");
      }

    })
  })

  var contCo2 = 0;
  var contcdtv = 0;
  
  var sumadorA = 0;
  var sumadorB = 0;
  var sumadorC = 0;
  var co2, cdtv;

  client.on('message', (topic, message) => {
    console.log('Msg desde el topico: ', topic, ' ----> ', message.toString());

    if (topic == device_topic + "data") {
      var splitted = message.toString().split(",");

      var sumco2 = splitted[0];
      var tempamb = splitted[1];
      var hum = splitted[2];
      var ph = splitted[3];
      var niv = splitted[4];


      var switch1 = splitted[5];
      var switch2 = splitted[6];
      var switch3 = splitted[7];
      var sumcdtv = splitted[8];

      var estado1 = splitted[9];;
      var estado2 = splitted[10];
      var estado3 = splitted[11];

      var numEntero = parseInt(sumco2);
      sumadorA = sumadorA + numEntero;
      contCo2++;
      if (contCo2 == 1) {
        co2 = numEntero
      }
      if (contCo2 == 10) {
        co2 = sumadorA / 10;
        contCo2 = 0;
        sumadorA = 0;
        console.log("valor promedio de co2 calculado");
        console.log(co2);
      }

      console.log("valor que llega de conductividad");
      console.log(sumcdtv);
      var numcdtv = parseFloat(sumcdtv);
      console.log("valor de cdtv ");
      console.log(numcdtv);
      if (numcdtv != "NaN") {
        sumadorB = sumadorB + numcdtv;
        contcdtv++;
        if (contcdtv == 1) {
          cdtv = numcdtv;
        }
        if (contcdtv == 5) {
          cdtv = sumadorB / 5;
          contcdtv = 0;
          sumadorB = 0;
          console.log("valor promedio de cdtv calculado");
          console.log(cdtv);
        }
      }

      

      $("#display_co2").html(co2);
      $("#display_tempamb").html(tempamb);
      $("#display_hum").html(hum);
      $("#display_ph").html(ph);
      $("#display_cdtv").html(cdtv);



      if (niv == 0) {
        $("#display_niv").html("ALTO");
      } else {
        $("#display_niv").html("OPTIMO");
      }

      if (switch1 == "1") {
        $("#display_sw1").prop('checked', true);

      } else {
        $("#display_sw1").prop('checked', "");
      }

      if (switch2 == "1") {
        $("#display_sw2").prop('checked', true);
      } else {
        $("#display_sw2").prop('checked', "");
      }

      if (switch3 == "1") {
        $("#display_sw3").prop('checked', true);
      } else {
        $("#display_sw3").prop('checked', "");
      }

      var img3 = "<?php echo base_url('images/cancelblanco.png') ?>";
      var img4 = "<?php echo base_url('images/checkblanco.png') ?>";

      var imagen4 = document.getElementById('icono1');
      var imagen5 = document.getElementById('icono2');
      var imagen6 = document.getElementById('icono3');

      console.log("ingrese estado = 1");

      if (estado1 == "1") {
        console.log("ingrese estado1 = 1");
        imagen4.src = img4;
        imagen4.classList.remove("hc-icono-cancel");
        imagen4.classList.add("hc-icono-check");
      } else {
        console.log("ingrese estado1 = 0");
        imagen4.src = img3;
        imagen4.classList.remove("hc-icono-check");
        imagen4.classList.add("hc-icono-cancel");
      }

      if (estado2 == "1") {
        imagen5.src = img4;
        imagen5.classList.remove("hc-icono-cancel");
        imagen5.classList.add("hc-icono-check");
      } else {
        imagen5.src = img3;
        imagen5.classList.remove("hc-icono-check");
        imagen5.classList.add("hc-icono-cancel");
      }

      if (estado3 == "1") {
        imagen6.src = img4;
        imagen6.classList.remove("hc-icono-cancel");
        imagen6.classList.add("hc-icono-check");
      } else {
        imagen6.src = img3;
        imagen6.classList.remove("hc-icono-check");
        imagen6.classList.add("hc-icono-cancel");
      }

    }
  })

  client.on('reconnect', (error) => {
    console.log('reconnecting:', error);
  })

  client.on('error', (error) => {
    console.log('Connect Error:', error);
  })

  var img1 = "<?php echo base_url('images/cancelblanco.png') ?>";
  var img2 = "<?php echo base_url('images/checkblanco.png') ?>";

  function sw1_change() {
    var imagen1 = document.getElementById('icono1');
    if ($('#display_sw1').is(":checked")) {
      console.log("ingrese en sw1_change ok");
      client.publish(device_topic + 'actions/sw1', "1"); //Valor que envio al broker             
      imagen1.src = img2;
      imagen1.classList.remove("hc-icono-cancel");
      imagen1.classList.add("hc-icono-check");
    } else {
      console.log("ingrese en sw1_change else");
      client.publish(device_topic + 'actions/sw1', "0");
      imagen1.src = img1;
      imagen1.classList.remove("hc-icono-check");
      imagen1.classList.add("hc-icono-cancel");
    }
  }

  function sw2_change() {
    var imagen2 = document.getElementById('icono2');
    if ($('#display_sw2').is(":checked")) {
      client.publish(device_topic + 'actions/sw2', "1");
      imagen2.src = img2;
      imagen2.classList.remove("hc-icono-cancel");
      imagen2.classList.add("hc-icono-check");
    } else {
      client.publish(device_topic + 'actions/sw2', "0");
      imagen2.src = img1;
      imagen2.classList.remove("hc-icono-check");
      imagen2.classList.add("hc-icono-cancel");
    }
  }

  function sw3_change() {
    var imagen3 = document.getElementById('icono3');
    if ($('#display_sw3').is(":checked")) {
      client.publish(device_topic + 'actions/sw3', "1");
      imagen3.src = img2;
      imagen3.classList.remove("hc-icono-cancel");
      imagen3.classList.add("hc-icono-check");
    } else {
      client.publish(device_topic + 'actions/sw3', "0");
      imagen3.src = img1;
      imagen3.classList.remove("hc-icono-check");
      imagen3.classList.add("hc-icono-cancel");
    }
  }

  function slider_change() {
    value = $('#display_slider').val();
    client.publish(device_topic + 'actions/slider', value);
  }


  // FUNCIONES CIRCULOS DE ESTADOS

  function ce1_change() {
    if ($('#display_sw1').is(":checked")) {
      client.publish(device_topic + 'actions/sw1', "1"); //Valor que envio al broker
    } else {
      client.publish(device_topic + 'actions/sw1', "0");
    }
  }

  function ce2_change() {
    if ($('#display_sw1').is(":checked")) {
      client.publish(device_topic + 'actions/sw1', "1"); //Valor que envio al broker
    } else {
      client.publish(device_topic + 'actions/sw1', "0");
    }
  }

  function ce3_change() {
    if ($('#display_sw1').is(":checked")) {
      client.publish(device_topic + 'actions/sw1', "1"); //Valor que envio al broker
    } else {
      client.publish(device_topic + 'actions/sw1', "0");
    }
  }
</script>