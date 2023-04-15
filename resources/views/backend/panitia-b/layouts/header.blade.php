<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Panitia B (Tes Baca dan Hafalan Al Qur'an)</title>
  <link rel="icon" type="image/x-icon" href="{{asset('foto/graduation-cap-solid.svg')}}" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link href="{{asset('icon/css/all.css')}}" rel="stylesheet" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}} ">
  <link href="{{asset('assets2/css/styles.css')}}" rel="stylesheet" />
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('assets/plugins/jqvmap/jqvmap.min.css')}} ">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}} ">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}} ">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}} ">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('assets/plugins/summernote/summernote-bs4.min.css')}} ">

  <style>
    @media only screen and (max-width:800px) {
      #no-more-tables tbody,
      #no-more-tables tr,
      #no-more-tables td {
          display: block;
      }
      #no-more-tables thead tr {
          position: absolute;
          top: -9999px;
          left: -9999px;
      }
      #no-more-tables td {
          position: relative;
          padding-left: 50%;
          border: none;
          border-bottom: 1px solid #eee;
      }
      #no-more-tables td:before {
          content: attr(data-title);
          position: absolute;
          left: 6px;
          font-weight: bold;
      }
      #no-more-tables tr {
          border-bottom: 1px solid #ccc;
      }
    }
  </style>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">