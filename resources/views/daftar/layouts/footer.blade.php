<!-- Footer-->
<footer class="bg-gradient-primary-to-secondary text-center py-3">
<div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <!-- <div class="col-lg-4 mb-5 mb-lg-0">
                        <img class="navbar-brand" src="{{asset('foto/LG.png' )}}" height="120px" width="290px" bgcolor="white">
                        <br/>
                       
                        <h5 class="text-center text-white font-alt mb-4">Pesantren PeTIK Jombang</h5>
                    </div> -->
                    <!-- Footer Location--> 
                    <div class="col-lg-4 mb-5 mb-lg-0"> 
                        <img class="navbar-brand" src="{{asset('foto/LG.png' )}}" height="120px" width="290px" bgcolor="white"> 
                         
                        <h5 class="text-center text-white font-alt mb-4">Pesantren PeTIK Jombang</h5> 
                        <div> 
                        <p align="center" class="text-white"><i class="fa fa-envelope" aria-hidden="true"></i> Email <br/> pmb.petikjombang@gmail.com</p> 
                        <p align="center" class="text-white"><i class="fa fa-phone-square" aria-hidden="true"></i> Nomor Telepon <br/> 0823-9396-3363</p> 
                        </div> 
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-center text-white font-alt mb-4">Social Media</h4>
                        <div class="flex-row ml-6col-md-8 col-md-offset-2 mb-3">
                                <a href="https://petikjombang.com" target="_blank"><i class="fa-solid fa-earth-asia fa-2x"></i></a>&nbsp;&nbsp;
                                <a href="https://www.instagram.com/petik_jombang/" target="_blank"><i class="fa-brands fa-instagram fa-2x"></i></a>&nbsp;&nbsp;
                                <a href="https://www.youtube.com/@petikjombang4973" target="_blank"><i class="fa-brands fa-youtube fa-2x"></i></a>&nbsp;&nbsp;
                                <a href="https://www.facebook.com/petikIIjombang/" target="_blank"><i class="fa-brands fa-facebook-f fa-2x"></i></a>
                          </div>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-center text-white font-alt mb-4">Location</h4>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.465630402716!2d112.21687271380003!3d-7.524082476334461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e783fab1dc80271%3A0x8c4c1651240d8951!2sPesantren%20PeTIK%20II%20Jombang%20YBM%20PLN!5e0!3m2!1sid!2sid!4v1672806810541!5m2!1sid!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p class=" mb-0 text-white text-center">
                        Pesantren PeTIK Jombang - YBM PLN<br/> Jl. KH. Bisri Syansuri RT.01/RW.05, Plosogeneng, Kec. Jombang,Jombang, Jawa Timur 61416.
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright cont py-4 text-center text-black">
            <div ><small>PMB Pesantren PeTIK Jombang</small></div>
        </div>

        
        </footer>

       

        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('assets2/js/scripts.js')}}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

      <!-- Link JS assets -->
              
      <!-- jQuery -->
      <script src="{{asset('assets/plugins/jquery/jquery.min.js')}} "></script>
      <!-- Bootstrap 4 -->
      <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <!-- Select2 -->
      <script src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>
      <!-- Bootstrap4 Duallistbox -->
      <script src="{{asset('assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
      <!-- InputMask -->
      <script src="{{asset('assets/plugins/moment/moment.min.js')}}"></script>
      <script src="{{asset('assets/plugins/inputmask/jquery.inputmask.min.js')}}"></script>
      <!-- date-range-picker -->
      <script src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
      <!-- bootstrap color picker -->
      <script src="{{asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
      <!-- Tempusdominus Bootstrap 4 -->
      <script src="{{asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
      <!-- Bootstrap Switch -->
      <script src="{{asset('assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
      <!-- BS-Stepper -->
      <script src="{{asset('assets/plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>
      <!-- dropzonejs -->
      <script src="{{asset('assets/plugins/dropzone/min/dropzone.min.js')}}"></script>
      <!-- AdminLTE App -->
      <script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>
      <!-- AdminLTE for demo purposes -->
      {{-- <script src="{{asset('assets/dist/js/demo.js')}}"></script> --}}
      <!-- Page specific script -->
              

      <script>
        $(function () {
          //Initialize Select2 Elements
          $('.select2').select2()

          //Initialize Select2 Elements
          $('.select2bs4').select2({
            theme: 'bootstrap4'
          })

          //Datemask dd/mm/yyyy
          $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
          //Datemask2 mm/dd/yyyy
          $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
          //Money Euro
          $('[data-mask]').inputmask()

          //Date picker
          $('#reservationdate').datetimepicker({
              format: 'L'
          });

          //Date and time picker
          $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

          //Date range picker
          $('#reservation').daterangepicker()
          //Date range picker with time picker
          $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {
              format: 'MM/DD/YYYY hh:mm A'
            }
          })
          //Date range as a button
          $('#daterange-btn').daterangepicker(
            {
              ranges   : {
                'Today'       : [moment(), moment()],
                'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate  : moment()
            },
            function (start, end) {
              $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
            }
          )

          //Timepicker
          $('#timepicker').datetimepicker({
            format: 'LT'
          })

          //Bootstrap Duallistbox
          $('.duallistbox').bootstrapDualListbox()

          //Colorpicker
          $('.my-colorpicker1').colorpicker()
          //color picker with addon
          $('.my-colorpicker2').colorpicker()

          $('.my-colorpicker2').on('colorpickerChange', function(event) {
            $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
          })

          $("input[data-bootstrap-switch]").each(function(){
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
          })

        })
        // BS-Stepper Init
        document.addEventListener('DOMContentLoaded', function () {
          window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })

        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false

        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template")
        previewNode.id = ""
        var previewTemplate = previewNode.parentNode.innerHTML
        previewNode.parentNode.removeChild(previewNode)

        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
          url: "/target-url", // Set the url
          thumbnailWidth: 80,
          thumbnailHeight: 80,
          parallelUploads: 20,
          previewTemplate: previewTemplate,
          autoQueue: false, // Make sure the files aren't queued until manually added
          previewsContainer: "#previews", // Define the container to display the previews
          clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        })

        myDropzone.on("addedfile", function(file) {
          // Hookup the start button
          file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
        })

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function(progress) {
          document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
        })

        myDropzone.on("sending", function(file) {
          // Show the total progress bar when upload starts
          document.querySelector("#total-progress").style.opacity = "1"
          // And disable the start button
          file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
        })

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function(progress) {
          document.querySelector("#total-progress").style.opacity = "0"
        })

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function() {
          myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
        }
        document.querySelector("#actions .cancel").onclick = function() {
          myDropzone.removeAllFiles(true)
        }
        // DropzoneJS Demo Code End
      </script>

      <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="   
        crossorigin="anonymous"></script>
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


 
    </body>
</html>
