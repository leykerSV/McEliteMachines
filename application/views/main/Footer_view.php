  <!-- Main Footer -->
  <footer class="main-footer">
      Sistema Producción MC ELITE MACHINES
      <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 1.0.0
      </div>
      <?php //echo uri_string()?>
  </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="<?php echo base_url() ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url() ?>assets/dist/js/adminlte.js"></script>
  <!-- OPTIONAL SCRIPTS -->
  <script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>

  <!-- PAGE PLUGINS -->
  <!-- jQuery Mapael -->
  <script src="<?php echo base_url() ?>assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
  <script src="<?php echo base_url() ?>assets/plugins/raphael/raphael.min.js"></script>
  <script src="<?php echo base_url() ?>assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
  <script src="<?php echo base_url() ?>assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>
  <!-- ChartJS -->
  <script src="<?php echo base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>
  <!-- PAGE SCRIPTS -->
  <script src="<?php echo base_url() ?>assets/dist/js/pages/dashboard2.js"></script>
  
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
  

  <!-- InputMask -->
  <script src="<?php echo base_url() ?>assets/plugins/moment/moment.min.js"></script>
  <script src="<?php echo base_url() ?>assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
  <!-- Page script -->
  <script>
$(function() {
    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', {
        'placeholder': 'dd/mm/yyyy'
    })
    //Money Euro
    $('[data-mask]').inputmask()
})
  </script>
  <script>
$(document).ready(function() {
    $("#addcause").click(function() {
        $("#newcause").append(
            '<div class="form-group col-6"> <select class="form-control" name="stratum"><option>Grupo</option><option value="1">Método</option><option value="2">Mano de Obra</option><option value="3">Medidas</option><option value="3">Material</option><option value="3">Medio Ambiente</option><option value="3">Maquinaria</option> </select></div><div class="form-group col-6"> <input type="text" class="form-control" placeholder="Causa"></div><div class="form-group col-4"><textarea class="form-control" name="" rows="3" placeholder="1 ¿Porque?"></textarea></div><div class="form-group col-4"><textarea class="form-control" name="" rows="3" placeholder="2 ¿Porque?"></textarea></div><div class="form-group col-4"><textarea class="form-control" name="" rows="3" placeholder="3 ¿Porque?"></textarea></div><div class="form-group col-4"><textarea class="form-control" name="" rows="3" placeholder="4 ¿Porque?"></textarea></div><div class="form-group col-4"><textarea class="form-control" name="" rows="3" placeholder="5 ¿Porque?"></textarea></div><div class="form-group col-4"><textarea class="form-control" name="" rows="3" placeholder="Conclusión"></textarea></div>'
        );
    });

    //Pagina Pedidos Create - Checkbox seleccion de precio de la tabla
    var total = 0;
    $('.checkbox').click(function() {
        if ($(this).is(':checked')) {
            //Obtenemos el valor del input(cantidad actual), de la fila done esta este input en la tabla
            cantidad = $(this).closest("tr").find('td .cantidad').val();    
            //Obtenemos el precio de la celda de la columna 6, fila actual del checkbox de la tabla
            precio = $(this).closest("tr").find('td:eq(6)').text();
            //Eliminamos el signo pesos $
            precio = Number(precio.replace('$', ''));
            //Incrementamos el total
            total = total + (precio * cantidad);
            $('#precio_total').text(total);
        } else {
          //Obtenemos el valor del input(cantidad actual), de la fila done esta este input en la tabla
          cantidad = $(this).closest("tr").find('td .cantidad').val();
            //Obtenemos el precio de la celda de la columna 6, fila actual del checkbox de la tabla
            precio = $(this).closest("tr").find('td:eq(6)').text();
            //Eliminamos el signo pesos $
            precio = Number(precio.replace('$', ''));
            //Incrementamos el total
            total = total - (precio * cantidad);
            $('#precio_total').text(total);
        }
    });

    //Pagina Pedidos Create - botones de incremento y decremento de la tabla
    $('.contador').click(function() {
        //Preguntamos si el checkbox esta tildado
        if ($(this).closest("tr").find('.checkbox').is(':checked')) {
            //Obtenemos el precio la celda de la columna 6, fila actual del checkbox de la tabla
            precio = $(this).closest("tr").find('td:eq(6)').text();
            //Eliminamos el signo pesos $
            precio = Number(precio.replace('$', ''));
            //Preguntamos si presiono el boton de suma o resta
            if ($(this).val() == '+') {
                total = total + precio;
            } else {
                total = total - precio;
            }
            $('#precio_total').text(total);
            console.log('precio: '+precio);
        }

        //Obtenemos el valor del input(cantidad actual), de la fila done esta este input en la tabla
        cantidad = $(this).closest("tr").find('td .cantidad').val();

        //Preguntamos si presiono el boton de suma o resta
        if ($(this).val() == '+') {
            cantidad++;//Incrementomos la cantidad obtenida
        } else {
            cantidad--;//Decrementamos la cantidad obtenida
        }

        //Actualizamos el valor del input cantidad
        $(this).closest("tr").find('td .cantidad').val(cantidad);

        console.log('cantidad: '+cantidad);
        console.log('Total: '+total);
    });
});
  </script>

  </body>

  </html>
