
  <aside class="control-sidebar control-sidebar-dark">

  </aside>

</div>


<!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('assets/plugins/jquery-ui/jquery-ui.min.js')}} "></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}} "></script>
<!-- ChartJS -->
<script src="{{asset('assets/plugins/chart.js/Chart.min.js')}} "></script>
<!-- Sparkline -->
<script src="{{asset('assets/plugins/sparklines/sparkline.js')}} "></script>
<!-- JQVMap -->
<script src="{{asset('assets/plugins/jqvmap/jquery.vmap.min.js')}} "></script>
<script src="{{asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}} "></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('assets/plugins/jquery-knob/jquery.knob.min.js')}} "></script>
<!-- daterangepicker -->
<script src="{{asset('assets/plugins/moment/moment.min.js')}} "></script>
<script src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}} "></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}} "></script>
<!-- Summernote -->
<script src="{{asset('assets/plugins/summernote/summernote-bs4.min.js')}} "></script>
<!-- overlayScrollbars -->
<script src="{{asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}} "></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.js')}} "></script>



<!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- AdminLTE App -->
<script src="{{asset('asset/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{asset('asset/dist/js/demo.js')}}"></script> --}}
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script>
  $(function () {
    // select data wilayah
    $('#provinsi').on('change', function(){
      let id_prov = $('#provinsi').val();

      $.ajax({
        type : 'POST',
        url : "{{ route('getKabupaten') }}",
        data : {id_prov:id_prov, _token:"{{ csrf_token() }}"},
        cache : false,
        success: function(msg) {
          $('#kabupaten').html(msg);
        },
        error: function(data) {
          console.log('error:', data);
        },
      })
    })
    $('#kabupaten').on('change', function(){
      let id_kab = $('#kabupaten').val();

      $.ajax({
        type : 'POST',
        url : "{{ route('getKecamatan') }}",
        data : {id_kab:id_kab, _token:"{{ csrf_token() }}"},
        cache : false,
        success: function(msg) {
          $('#kecamatan').html(msg);
        },
        error: function(data) {
          console.log('error:', data);
        },
      })
    })
    $('#kecamatan').on('change', function(){
      let id_kec = $('#kecamatan').val();

      $.ajax({
        type : 'POST',
        url : "{{ route('getDesa') }}",
        data : {id_kec:id_kec, _token:"{{ csrf_token() }}"},
        cache : false,
        success: function(msg) {
          $('#desa').html(msg);
        },
        error: function(data) {
          console.log('error:', data);
        },
      })
    })
  })
</script>

<script>
  $(function () {
    // select data mahasantri
    $('#mahasantri').on('change', function(){
      let id_mhs = $('#mahasantri').val();

      $.ajax({
        type : 'POST',
        url : "{{ route('getSurvei') }}",
        data : {id_mhs:id_mhs, _token:"{{ csrf_token() }}"},
        cache : false,
        success: function(msg) {
          $('#survei').html(msg);
        },
        error: function(data) {
          console.log('error:', data);
        },
      })
      $.ajax({
        type : 'POST',
        url : "{{ route('getWawancara') }}",
        data : {id_mhs:id_mhs, _token:"{{ csrf_token() }}"},
        cache : false,
        success: function(msg) {
          $('#wawancara').html(msg);
        },
        error: function(data) {
          console.log('error:', data);
        },
      })
      $.ajax({
        type : 'POST',
        url : "{{ route('getQuran') }}",
        data : {id_mhs:id_mhs, _token:"{{ csrf_token() }}"},
        cache : false,
        success: function(msg) {
          $('#quran').html(msg);
        },
        error: function(data) {
          console.log('error:', data);
        },
      })
      $.ajax({
        type : 'POST',
        url : "{{ route('getAkademik') }}",
        data : {id_mhs:id_mhs, _token:"{{ csrf_token() }}"},
        cache : false,
        success: function(msg) {
          $('#akademik').html(msg);
        },
        error: function(data) {
          console.log('error:', data);
        },
      })
    })
  })
</script>







</body>
</html>
