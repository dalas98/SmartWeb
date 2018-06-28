    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-body">
                <section id="carousel-options">
                    <div class="container">
                        <div class="row">
                            <!-- Carousel -->
                            <div class="col-md-12 col-12">
                                <div id="carousel-interval" class="carousel slide" data-ride="carousel" data-interval="15000">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img src="<?=$api[0]->gambar_event?>" class="col-12">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?=$api[1]->gambar_event?>" class="col-12">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?=$api[2]->gambar_event?>" class="col-12">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carousel-interval" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel-interval" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <br>
                            </div>
                            <!-- End Of Carousel -->
                        </div>
                    </div>
                </section>
                <!-- populated event -->
                <section>
                    <div class="container">
                        <div class="row ">
                            <div class="col-12 mt-3 mb-1">
                                <h3 class="text-uppercase">Popular Event</h3>
                            </div>
                        </div>
                        <div class="row match-height">
                            <?php foreach($api as $data) { ?>
                                <div class="col-xl-3 col-md-6 col-sm-12">
                                    <div class="card">
                                        <div class="card-content">
                                            <a href="<?=site_url('Showcontent/show/'.$data->id_Event)?>" class="text-dark">
                                                <img class="card-img-top img-fluid" src="<?php echo $data->gambar_event ?>" alt="Gambar Event">
                                                <div class="card-body">
                                                    <h4 class="card-title"><?php echo $data->nama_event ?></h4>
                                                    <p class="card-text"><span class="ft-calendar"></span> <?php echo date('D, d M Y H:i', strtotime($data->jadwal_event)); ?></p>
                                                    <p class="card-text"><span class="ft-map-pin"></span> <?php echo $data->lokasi_event ?></p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </section>
                <!-- populated event -->
            </div>
        </div>
    </div>