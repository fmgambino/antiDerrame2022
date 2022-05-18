<main class="mdl-layout__content  ">

  <div class="col-12 ">
    <div class=" hc-box-devices border">
      <div class="mdl-card__title">
        <h5 class="mdl-card__title-text text-color--white">Añadir Nuevo Dispositivo</h5>
      </div>
      <div class="mdl-card__supporting-text">
        <form class="" action="<?php echo base_url('devices/add') ?>" method="POST">
          <div class="mdl-grid">


            <div class="col-12 mt-3">
              <h3 class="text-color--smooth-gray mb-4">Información del Dispositivo</h3>
              <div class="">
                <input name="device_alias" class="mdl-textfield__input hc-text-center " type="text" id="first-name">
                <label class="hc-color-text-blanco mb-4" for="first-name">Ambiente o Alias Dispositivo</label>
              </div>
              <div class="">
                <input name="device_serial_number" class="mdl-textfield__input hc-text-center" type="text" id="last-name">
                <label class="hc-color-text-blanco mb-4" for="last-name">Número de Serie</label>
              </div>
              <button class="btn btn-primary" data-upgraded=",MaterialButton,MaterialRipple">Añadir </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="col-12 ">
    <div class="hc-box-devices">
      <div class="mdl-card__title mt-5">
        <h1 class="mdl-card__title-text">Dispositivos</h1>
      </div>
      <div class="mdl-card__supporting-text">
        <table class="scrollmenu " class="mdl-data-table mdl-js-data-table stripped-table " style="width:100%;">
          <thead>
            <tr>
              <th class="mdl-data-table__cell--non-numeric pl-4">Alias</th>
              <th class="mdl-data-table__cell--non-numeric pl-4">Date</th>
              <th class="mdl-data-table__cell--non-numeric pl-4">SN</th>
              <th class="mdl-data-table__cell--non-numeric pl-4">Delete</th>

            </tr>
          </thead>
          <tbody>
            <?php foreach ($devices as $device) : ?>
              <tr>
                <td class="mdl-data-table__cell--non-numeric"><?php echo $device['device_alias'] ?></td>
                <td style="text-align:center" class="mdl-data-table__cell--non-numeric"><?php echo $device['device_date'] ?></td>
                <td style="text-align:center" class="mdl-data-table__cell--non-numeric"><?php echo $device['device_sn'] ?></td>
                <td style="text-align:center" class="mdl-data-table__cell--non-numeric"><span onclick="delete_device('<?php echo $device['device_id'] ?>')" class="label label--mini color--red">Eliminar</span> </td>
              </tr>

            <?php endforeach; ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>

</main>

<script type="text/javascript">
  function delete_device(device_id) {
    Swal.fire({
      title: '¿Estás de acuerdo?',
      text: "¡No podrás revertir esto!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Sí, bórralo!'
    }).then((result) => {
      if (result.value) {
        <?php if ($_SESSION['user_id'] == 4) { ?>
          device_id = "xxxxxxxxx";
        <?php } ?>
        $.post("<?php echo base_url('devices/delete_device') ?>", {
          device_id: device_id
        }, function(result) {
          if (result == "True") {
            Swal.fire({
              title: 'Perfecto!',
              text: "Dispositivo Eliminado",
              type: 'success',
              showCancelButton: false,
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'OK'
            }).then((result) => {
              location.reload();
            })
          } else {
            Swal.fire(
              'ERROR!',
              'Your device has not been deleted.',
              'warning'
            )
          }
        });

      }
    })
  }
</script>