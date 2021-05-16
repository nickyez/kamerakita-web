
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<script src="dist/js/global.js"></script>
<!-- CKEditor -->
<script src="ckeditor/ckeditor.js"></script>
<script>
  // Replace the <textarea id="editor1"> with a CKEditor
  // instance, using default configuration.
  CKEDITOR.replace( 'editor1',{filebrowserImageBrowseUrl : 'kcfinder'} );
  CKEDITOR.replace( 'editor2',{filebrowserImageBrowseUrl : 'kcfinder'} );

</script>
<!-- bootstrap datepicker -->
<script src="datepicker/js/bootstrap-datepicker.js"></script>
<script>
  //Date picker
  $('#datepicker-year').datepicker({
		format: "yyyy",
		orientation: "top auto",
    viewMode: "years", 
    minViewMode: "years",
    autoclose: true
  });
</script>