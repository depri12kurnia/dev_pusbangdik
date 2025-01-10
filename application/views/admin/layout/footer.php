<script>
  tinymce.init({
    selector: '#isi',
    height: 300,
    plugins: 'print preview paste searchreplace autolink directionality visualblocks visualchars code fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools colorpicker textpattern help',
    toolbar: 'formatselect | fontsizeselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent | image | table | removeformat',
    visual_table_class: 'tiny-table',
    fontsize_formats: "8px 10px 12px 14px 18px 24px 36px"
  });
</script>

<script>
  tinymce.init({
    selector: '#body',
    height: 300,
    plugins: 'print preview paste searchreplace autolink directionality visualblocks visualchars code fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools colorpicker textpattern help',
    toolbar: 'formatselect | fontsizeselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent | image | table | removeformat',
    visual_table_class: 'tiny-table',
    fontsize_formats: "8px 10px 12px 14px 18px 24px 36px"
  });
</script>

<script>
  tinymce.init({
    selector: '.textarea',
    height: 300,
    plugins: 'print preview paste searchreplace autolink directionality visualblocks visualchars code fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools colorpicker textpattern help',
    toolbar: 'formatselect | fontsizeselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent | image | table | removeformat',
    visual_table_class: 'tiny-table',
    fontsize_formats: "8px 10px 12px 14px 18px 24px 36px"
  });
</script>
<script>
  tinymce.init({
    selector: '.textareatengah',
    height: 500,
    plugins: 'print preview paste searchreplace autolink directionality visualblocks visualchars code fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools colorpicker textpattern help',
    toolbar: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent | image | table | removeformat',
    visual_table_class: 'tiny-table'
  });
</script>
<!-- SWEETALERT -->
<?php if ($this->session->flashdata('sukses')) { ?>
  <script>
    swal("Berhasil", "<?php echo $this->session->flashdata('sukses'); ?>", "success")
  </script>
<?php } ?>

<?php if (isset($error)) { ?>
  <script>
    swal("Oops...", "<?php echo strip_tags($error); ?>", "warning")
  </script>
<?php } ?>

<?php if ($this->session->flashdata('warning')) { ?>
  <script>
    swal("Oops...", "<?php echo $this->session->flashdata('warning'); ?>", "warning")
  </script>
<?php } ?>
<?php
$sek = date('Y');
$awal = $sek - 100;
?>
<script>
  $(".datepicker").datepicker({
    inline: true,
    changeYear: true,
    changeMonth: true,
    dateFormat: "yy-mm-dd",
    yearRange: "<?php echo $awal ?>:<?php echo date('Y') ?>"
  });

  $(".tanggal").datepicker({
    inline: true,
    changeYear: true,
    changeMonth: true,
    dateFormat: "dd-mm-yy",
    yearRange: "<?php echo $awal ?>:<?php echo date('Y') ?>"
  });
</script>
<script>
  // Sweet alert
  function confirmation(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href'); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
    console.log(urlToRedirect); // verify if this is the right URL
    swal({
        title: "Yakin ingin menghapus data ini?",
        text: "Data yang sudah dihapus tidak dapat dikembalikan",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        // redirect with javascript here as per your logic after showing the alert using the urlToRedirect value
        if (willDelete) {
          // Proses ke URL
          window.location.href = urlToRedirect;
        }
      });
  }

  // Kirim ulang
  function kirim(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href'); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
    console.log(urlToRedirect); // verify if this is the right URL
    swal({
        title: "Yakin Ingin Mengirim Surat Ini?",
        text: "Pengiriman Surat Sebaiknya Kurang dari 200 Kali/jam agar tidak terkena Blokir Server. Klik CANCEL untuk membatalkan. Klik OK untuk mengirim surat.",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        // redirect with javascript here as per your logic after showing the alert using the urlToRedirect value
        if (willDelete) {
          // Proses ke URL
          window.location.href = urlToRedirect;
        }
      });
  }
  // Akses
  // Sweet alert
  function akses(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href'); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
    console.log(urlToRedirect); // verify if this is the right URL
    swal({
        title: "Yakin ingin memberi akses?",
        text: "Data yang diberi akses akan bisa login",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        // redirect with javascript here as per your logic after showing the alert using the urlToRedirect value
        if (willDelete) {
          // Proses ke URL
          window.location.href = urlToRedirect;
        }
      });
  }
</script>

</div>
<!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="float-right d-none d-sm-block">
    <b>Version</b> 2.0 Rev
  </div>
  <strong>Copyright &copy; 2022 <a href="https://poltekkesjakarta3.ac.id">Polkes Jati</a>.</strong> All rights
  reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/admin/plugins/jquery/jquery-3.3.1.js"></script>
<!-- Bootstrap 4 -->
<script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/admin/plugins/select2/select2.full.min.js"></script>
<!-- DataTables -->
<script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/admin/plugins/datatables/jquery.dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/admin/plugins/datatables/dataTables.bootstrap4.js"></script>
<!-- DataTables  & Plugins -->
<!--<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>-->
<!--<script src="<?php echo base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>-->
<!--<script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>-->
<!--<script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>-->
<!--<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>-->
<!--<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>-->
<!--<script src="<?php echo base_url(); ?>assets/plugins/jszip/jszip.min.js"></script>-->
<!--<script src="<?php echo base_url(); ?>assets/plugins/pdfmake/pdfmake.min.js"></script>-->
<!--<script src="<?php echo base_url(); ?>assets/plugins/pdfmake/vfs_fonts.js"></script>-->
<!--<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>-->
<!--<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>-->
<!--<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>-->
<!-- SlimScroll -->
<script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/admin/dist/js/adminlte.min.js"></script>
<!-- iCheck -->
<script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/admin/plugins/iCheck/icheck.min.js"></script>
<!-- CK Editor -->
<script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/admin/plugins/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- page script -->
<script>
  $(function() {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
    $("#example3").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": true,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#data_wrapper .col-md-6:eq(0)');
  });
</script>

<!-- Page Script -->
<script>
  $(function() {
    //Initialize Select2 Elements
    $('.select2').select2()
    //Enable iCheck plugin for checkboxes
    //iCheck for checkbox and radio inputs
    $('.mailbox-messages input[type="checkbox"]').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    })

    //Enable check and uncheck all functionality
    $('.checkbox-toggle').click(function() {
      var clicks = $(this).data('clicks')
      if (clicks) {
        //Uncheck all checkboxes
        $('.mailbox-messages input[type=\'checkbox\']').iCheck('uncheck')
        $('.fa', this).removeClass('fa-check-square-o').addClass('fa-square-o')
      } else {
        //Check all checkboxes
        $('.mailbox-messages input[type=\'checkbox\']').iCheck('check')
        $('.fa', this).removeClass('fa-square-o').addClass('fa-check-square-o')
      }
      $(this).data('clicks', !clicks)
    })

    //Handle starring for glyphicon and font awesome
    $('.mailbox-star').click(function(e) {
      e.preventDefault()
      //detect type
      var $this = $(this).find('a > i')
      var glyph = $this.hasClass('glyphicon')
      var fa = $this.hasClass('fa')

      //Switch states
      if (glyph) {
        $this.toggleClass('glyphicon-star')
        $this.toggleClass('glyphicon-star-empty')
      }

      if (fa) {
        $this.toggleClass('fa-star')
        $this.toggleClass('fa-star-o')
      }
    })
  })
</script>

<script>
  $(function() {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    ClassicEditor
      .create(document.querySelector('#editor1'))
      .then(function(editor) {
        // The editor instance
      })
      .catch(function(error) {
        console.error(error)
      })

    // bootstrap WYSIHTML5 - text editor

    $('.textareaku').wysihtml5({
      toolbar: {
        fa: true
      }
    })
  })
</script>
</body>

</html>