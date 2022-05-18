<header class="mdl-layout__header">
    <div class="mdl-layout__header-row ">
        

        <div id="m-booked-prime-days-99676 ml-5 hc-margin" style=" margin: auto;">
          <div class="weather-customize widget-type-prime-days d-none d-sm-none d-md-block">
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
        <!-- Search-->

        <select id="device_select" class="btn btn-outline-dark hc-selectdevice " style="" onchange="change_device()" class="" name="">
            <option value="">Selecione Dispositivo</option>
            <?php foreach ($devices as $device) { ?>
                <option value="<?php echo $device['device_id'] ?>" <?php if ($_SESSION['selected_device'] == $device['device_id']) {
                                                                        echo "selected";
                                                                    } ?>><?php echo $device['device_alias'] ?></option>
            <?php } ?>
        </select>

        <div class="avatar-dropdown " id="icon" style="padding-right: 0px;padding-left: 0px;">
            <span class=" hc-color-text-negro"><?php echo $_SESSION['user_name']; ?></span>
            <img style="padding-right: 0px;padding-left: 0px;" class="" src="<?php echo $_SESSION['user_image']; ?>">
        </div>

        <button id="more" class="mdl-button mdl-js-button mdl-button--icon">
            <i class="material-icons hc-text-negro">more_vert</i>
        </button>

        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-shadow--2dp settings-dropdown" for="more">
            <a class="mdl-menu__item" href="https://hydrocrop.net/app/devices">
                Configuración
            </a>
            <a class="mdl-menu__item" href="https://hydrocrop.net/soporte/">
                Soporte
            </a>
            <a class="mdl-menu__item" href="https://hydrocrop.net/faq">
                F.A.Q.
            </a>
            <a href="https://hydrocrop.net">
                <li class="mdl-menu__item mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon text-color--secondary">exit_to_app</i>
                        Salir
                    </span>
                </li>
            </a>
        </ul>
    </div>
</header>

<script type="text/javascript">
    function change_device() {

        var device_id = $("#device_select").val();
        console.log(device_id);
        $.post("<?php echo base_url('devices/change_device'); ?>", {
            device_id: device_id
        }, function(result) {
            location.reload();
        });
    }
</script>