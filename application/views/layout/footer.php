<?php
$site = $this->konfigurasi_model->listing();
?>

<?php
$site = $this->konfigurasi_model->listing();
$nav_pengumuman = $this->nav_model->nav_pengumuman();
?>
<!-- Start Footer Section -->
<footer>
    <div class="bg-footer-top">
        <div class="container">
            <div class="row">
                <div class="footer-top">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="footer-widgets">
                                <div class="widgets-title">
                                    <!-- <h4 style="color:white;"><?php echo $site->namaweb ?></h4> -->
                                    <h4 style="color:white;">Pusbangdik PolkesJati</h4>
                                </div>

                                <!-- .widgets-content -->
                                <div class="address-box">
                                    <ul class="address">
                                        <li>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <span><?php echo nl2br($site->alamat) ?></span>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <span><?php echo $site->telepon ?></span>
                                        </li>
                                        <li>
                                            <i class="fa fa-fax" aria-hidden="true"></i>
                                            <span><?php echo $site->fax ?></span>
                                        </li>
                                        <li>
                                            <i class="fa fa-mobile" aria-hidden="true"></i>
                                            <span><?php echo $site->hp ?></span>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                            <span><?php echo $site->email ?></span>

                                        </li>
                                    </ul></br>
                                    <ul class="social-icon-rounded">
                                        <li><a href="https://wa.me/<?php echo $site->whatsapp; ?>" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                        <li><a href="<?php echo $site->facebook ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="<?php echo $site->twitter; ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="<?php echo $site->instagram; ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="<?php echo $site->youtube; ?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                        <li><a href="<?php echo base_url('helpdesk') ?>" target="_blank"><i class="fa fa-question" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <!-- .address -->
                            </div>
                            <!-- .footer-widgets -->
                        </div>
                        <div class="col-md-4 col-sm-4">

                        </div>
                        <!-- .col-md-4 -->
                        <div class="col-md-4 col-sm-4">
                            <div class="footer-widgets">
                                <div class="widgets-title">
                                    <h3>Pengumuman Terbaru</h3>
                                </div>
                                <ul class="latest-news">
                                    <?php foreach ($nav_pengumuman as $nav_pengumuman) { ?>
                                        <li>
                                            <div class="thumbnail-content">
                                                <h5><a href="<?php echo base_url('berita/profil/' . $nav_pengumuman->slug_berita) ?>"><?php echo $nav_pengumuman->judul_berita ?></a>
                                                </h5>
                                            </div>

                                        </li>
                                    <?php } ?>
                                    <a href='http://www.freevisitorcounters.com'></a>
                                    <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=c6c594cc93cd8bc612306d0754d6919272499a48'></script>
                                    <script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/1227720/t/1"></script>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- .row -->
                </div>
                <!-- .footer-top -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </div>
    <!-- .bg-footer-top -->

    <div class="bg-footer-bottom">
        <div class="container">
            <div class="row">
                <div class="footer-bottom">
                    <div class="copyright-txt">
                        <p>&copy; <?php echo date('Y') ?>. Designer By <a href="https://poltekkesjakarta3.ac.id/" title="PolkesJati">PolkesJati</a> || Page rendered in <strong>{elapsed_time}</strong> seconds.</p>
                    </div>
                </div>
                <!-- .footer-bottom -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </div>
    <!-- .bg-footer-bottom -->

</footer>

<!-- End Footer Section -->

<!-- Start Scrolling -->

<!--<div class="scroll-img"><i class="fa fa-angle-up" aria-hidden="true"></i></div>-->


<!-- End Scrolling -->


</div>

<!-- Flipbook main Js file -->
<script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/dflip/js/libs/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/dflip/js/dflip.min.js"></script>

<!--Assets-->

<script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/tema/assets/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/tema/assets/js/jquery.easing.1.3.js"></script>

<script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/tema/assets/js/jquery.waypoints.min.js"></script>

<script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/tema/assets/js/jquery.counterup.min.js"></script>

<script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/tema/assets/js/swiper.min.js"></script>

<script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/tema/assets/js/lightcase.js"></script>

<script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/tema/assets/js/jquery.nstSlider.js"></script>

<script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/tema/assets/js/jquery.flexslider.js"></script>

<script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/tema/assets/js/custom.map.js"></script>

<script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/tema/assets/js/plugins.isotope.js"></script>

<script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/tema/assets/js/isotope.pkgd.min.js"></script>

<script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/tema/assets/js/custom.isotope.js"></script>

<script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/tema/assets/js/custom.js"></script>

<!-- Lazysizes -->
<script src="https://cdn.jsdelivr.net/npm/lazysizes@5.3.2/lazysizes.min.js" integrity="sha256-PZEg+mIdptYTwWmLcBTsa99GIDZujyt7VHBZ9Lb2Jys=" crossorigin="anonymous"></script>

<!-- Select2 -->
<script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/admin/plugins/select2/select2.full.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/admin/plugins/datatables/jquery.dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/gh/depri12kurnia/Assets-Jakarta-3@9b51dd849241b9d6346f1e839c7d5f93b0a97cfc/admin/plugins/datatables/dataTables.bootstrap4.js"></script>

<!--pdfobject-->
<script src="https://unpkg.com/pdfobject"></script>

<script>
    $(function() {
        $("#dokumen").DataTable();
        $("#example1").DataTable();
        $("#example2").DataTable();
        $("#example3").DataTable();
        $("#example4").DataTable();
        $("#example5").DataTable();
        $("#example6").DataTable();
        $("#example7").DataTable();
        $("#example8").DataTable();
        $("#example9").DataTable();
    });
</script>

<!-- POPUP -->
<!--<script>-->
<!--    $('#modal').modal('show');-->
<!--</script>-->

<script>
    window.onload = function() {
        $('#modal').modal({
            backdrop: 'static',
            keyboard: false
        });
        $('#modal').modal('show');
    };

    function recaptchaCallback() {
        var response = grecaptcha.getResponse();
        if (response.length === 0) {
            console.log('reCAPTCHA not completed');
        } else {
            console.log('reCAPTCHA completed, response:', response);

            // Send the reCAPTCHA response to your server
            $.post('<?php echo base_url("verify/verify_recaptcha"); ?>', {
                recaptchaResponse: response
            }, function(data) {
                console.log('Server response:', data);
            });

            // Close the modal
            $('#modal').modal('hide');
        }
    }
</script>


</body>

</html>