<footer class="footer">
    <div class="container-fluid">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="#">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#">
                        Company
                    </a>
                </li>
                <li>
                    <a href="#">
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="#">
                       Blog
                    </a>
                </li>
            </ul>
        </nav>
        <p class="copyright pull-right">
            &copy; 2016 <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
        </p>
    </div>
</footer>

</div>
</div>


</body>

<!--   Core JS Files   -->
<script src="<?php echo base_url();?>assets/peserta/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/peserta/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="<?php echo base_url();?>assets/peserta/js/bootstrap-checkbox-radio-switch.js"></script>

<!--  Charts Plugin -->
<!-- <script src="assets/js/chartist.min.js"></script> -->

<!--  Notifications Plugin    -->
<script src="<?php echo base_url();?>assets/peserta/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script> -->

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="<?php echo base_url();?>assets/peserta/js/light-bootstrap-dashboard.js"></script>

<!-- jQuery library (served from Google) -->
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> -->
<!-- bxSlider Javascript file -->
<!-- <script src="<?php echo base_url();?>assets/peserta/js/jquery.bxslider.min.js"></script> -->

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url();?>assets/peserta/js/demo.js"></script>
<script src="<?php echo base_url();?>assets/peserta/js/pagination/bjqs-1.3.min.js"></script>
<script type="text/javascript">
        $(function(){
                    $('#modalDetail').on('show.bs.modal', function (event) {
                      var button = $(event.relatedTarget) // Button that triggered the modal
                      var id = button.data('id')
                      var idto = button.data('idto')
                      var nama = button.data('nama')
                      var jumlah = button.data('jumlah')
                      var waktu = button.data('waktu')
                       // Extract info from data-* attributes
                      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                      var modal = $(this)
                      modal.find('.modal-content #id').val(id)
                      modal.find('.modal-content #idTo').val(idto)
                      modal.find('.modal-content #matkul').val(nama)
                      modal.find('.modal-content #jumlah').val(jumlah)
                      modal.find('.modal-content #waktu').val(waktu)
                    });
                });
    </script>
    <script type="text/javascript">
    $("body").on("click", ".pagination a", function() {
	        var url = $(this).attr('href');
	        $("#the-content").load(url);
	        return false;
	    });
    </script>

</html>
