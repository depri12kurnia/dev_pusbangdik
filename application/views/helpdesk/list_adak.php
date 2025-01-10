<section class="bg-servicesstyle2-section">
    <div class="container">
        <div class="row">
            <div class="our-services-option">
                <div class="section-header">
                    <h2>FAQ & Helpdesk<br>Administrasi Akademik<br>Kemahasiswaan</h2>
                </div>
                <!-- .section-header -->
                <div class="row">
                    <div class="panel-group" id="accordion">
                        <?php
                        $no = 0;
                        foreach ($adak as $h) {
                        ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $h->id_helpdesk ?>">
                                            <span class="glyphicon glyphicon-menu-right text-success"></span><?php echo $h->pertanyaan; ?>
                                        </a>
                                    </h5>
                                </div>
                                <div id="<?php echo $h->id_helpdesk ?>" class="panel-collapse collapse">
                                    <div class="panel-body"><?php echo $h->jawaban; ?></div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <!-- .row -->
                </div>
                <!-- .our-services-option -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
</section>
<!-- End Service Style2 Section -->