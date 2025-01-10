<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- icon -->
  <link rel="shortcut icon" href="<?php echo $this->website->icon(); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/admin/plugins/datatables/dataTables.bootstrap4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/admin/plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- iCheck -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/admin/plugins/iCheck/flat/blue.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- jQuery -->
  <script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/admin/plugins/jquery/jquery.min.js"></script>

  <!-- JQUERY UI -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/jquery-ui/jquery-ui.min.css">
  <script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
  <!-- SWEETALERT -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- PdfJs -->
  <script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/pdfjs/pdfThumbnails.js" data-pdfjs-src="" https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/pdfjs/pdf.js/build/pdf.js"></script>
  <!-- jquery chained -->
  <script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/jquery-chained/jquery.chained.min.js" type="text/javascript"></script>
  <style type="text/css" media="screen">
    .btn-group-xs>.btn,
    .btn-xs {
      padding: .25rem .4rem;
      font-size: .875rem;
      line-height: .5;
      border-radius: .2rem;
    }

    .text-strong {
      font-weight: bold;
      background-color: #FFC;
    }

    .select2 {
      z-index: 10050 !important;
    }

    span.select2-container {
      z-index: 10050 !important;
    }
  </style>
  <!-- timepicker -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/jquery-timepicker/jquery.timepicker.min.css">
  <!-- TINYMCE -->
  <script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/tinymce/js/tinymce/tinymce.min.js"></script>
  <!-- viewer -->
  <script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/viewerjs/pdf.js"></script>

  <!--Klik kanan dan f12-->

</head>

<body class="hold-transition sidebar-mini">