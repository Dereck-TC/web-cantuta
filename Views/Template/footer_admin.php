<!-- /.content -->
</div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">

  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script>
        const base_url = "<?= base_url(); ?>";
        const smony = "<?= SMONEY; ?>";
</script>
 
    
<!-- jQuery -->

<script src="<?= media(); ?>/plugins/jquery/jquery.min.js"></script>


    <script src="<?= media(); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?= media(); ?>/js/popper.min.js"></script>
    <script src="<?= media(); ?>/js/bootstrap.min.js"></script>
    <script src="<?= media(); ?>/js/main.js"></script>
<!-- Data table plugin-->
  <script type="text/javascript" src="<?= media();?>/js/plugins/bootstrap-select.min.js"></script>

    <!-- DataTables  & Plugins -->
    <script src="<?= media(); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= media(); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= media(); ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= media(); ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= media(); ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= media(); ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= media(); ?>/plugins/jszip/jszip.min.js"></script>
    <script src="<?= media(); ?>/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= media(); ?>/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= media(); ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= media(); ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= media(); ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
   
   
    <!-- Page specific script -->
    <script type="text/javascript" src="<?= media();?>/js/plugins/sweetalert.min.js"></script>

    <script type="text/javascript" src="<?= media();?>/js/functions_admin.js"></script>
    <script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= media(); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- Select2 -->
   <script src="<?= media(); ?>/plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="<?= media(); ?>/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="<?= media(); ?>/plugins/moment/moment.min.js"></script>
    <script src="<?= media(); ?>/plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="<?= media(); ?>/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="<?= media(); ?>/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= media(); ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="<?= media(); ?>/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= media(); ?>/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= media(); ?>/dist/js/demo.js"></script>
<script>
  $(function () {
      $("input[data-bootstrap-switch]").each(function(){
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
      })
    })
</script>
</body>
</html>

