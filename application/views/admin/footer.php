    </div>


    <script src="<?php echo base_url("assets/admin"); ?>/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/admin"); ?>/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/admin"); ?>/js/main.js" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/admin"); ?>/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/admin"); ?>/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/admin"); ?>/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/admin"); ?>/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/admin"); ?>/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/admin"); ?>/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/admin"); ?>/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/admin"); ?>/lib/countup/countUp.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/admin"); ?>/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/admin"); ?>/lib/jqvmap/jquery.vmap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/admin"); ?>/lib/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/admin"); ?>/js/app-dashboard.js" type="text/javascript"></script>

    <script src="<?php echo base_url("assets/admin"); ?>/lib/select2/js/select2.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url("assets/admin"); ?>/lib/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/admin"); ?>/lib/datatables/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/admin"); ?>/lib/datatables/plugins/buttons/js/dataTables.buttons.js" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/admin"); ?>/lib/datatables/plugins/buttons/js/buttons.html5.js" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/admin"); ?>/lib/datatables/plugins/buttons/js/buttons.flash.js" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/admin"); ?>/lib/datatables/plugins/buttons/js/buttons.print.js" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/admin"); ?>/lib/datatables/plugins/buttons/js/buttons.colVis.js" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/admin"); ?>/lib/datatables/plugins/buttons/js/buttons.bootstrap.js" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/admin"); ?>/js/app-tables-datatables.js" type="text/javascript"></script>
    
    
    <script type="text/javascript">
      $(document).ready(function(){
        $('#table1').DataTable();
      	App.init();
      	App.dashboard();
        App.dataTables();
        App.masks();
        App.uiNotifications();
        $('#form').formElements();
      });
    </script>

  </body>
</html>