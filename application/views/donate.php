<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="" name="description">
    <meta content="" name="keywords">
    <title>Sanatan Sewadar</title>

    <!-- ======= all link ======= -->
    <?php $this->load->view('include/headlink') ?>

</head>

<body>

    <!-- ======= Header Section ======= -->
    <?php $this->load->view('include/header') ?>

    

    <!-- ======= Main Section ======= -->


    <main>

        <section class="donate">

            <div class="top-banner">
                <img src="<?= base_url('assets/image/donate/donate_banner.jpg') ?>" title="Donate for Sanatan Sewadar" alt="Donate for Sanatan Sewadar" width="100%" height="auto">
            </div>

            <div class="container-fluid" style="background-color: #fbfbfb; padding: 20px 0px;">

                <div class="container-lg">

                    <!-- Donate head -->
                    <div class="donate-head">
                        <h1>Collaborate With Sanatan Sewadar</h1>
                        <hr>
                    </div>

                    <!-- Donate Body -->
                    <div class="donate-body">

                        <!-- Cards Section -->
                        <div *ngFor="let item of result" class="row row-cols-1 row-cols-lg-4 row-cols-md-2 g-6">

                            <!-- Card 1 -->
                            <div class="col my-4">
                                <div class="card card-shadow" style="border: none;">
                                    
                                    <div class="d-box">
                                        <div class="d-img">
                                            <img src="<?= base_url('assets/image/donate/god1.jpg') ?>" class="card-img-top" alt="donate image-1">
                                        </div>
                                    </div>

                                    <div class="card-body card-h3">
                                        <h3 class="card-title">गरीब कन्याओं का विवाह</h3>
                                        <p class="card-text">कन्याओं को दान, महा कल्याण |</p>
                                        <!-- <button class="btn" type="submit">Donate</button> -->
                                        
                                        <center>
                                            <a href="<?= base_url('contribute') ?>" class="btn">
                                                <span class="badge"><i class="fa-regular fa-handshake"></i></span> Collaborate
                                            </a>
                                        </center>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="col my-4">
                                <div class="card card-shadow" style="border: none;">
                                    <div class="d-box">
                                        <div class="d-img">
                                            <img src="<?= base_url('assets/image/donate/god2.jpg') ?>" class="card-img-top" alt="donate image-1">
                                        </div>
                                    </div>

                                    <div class="card-body card-h3">
                                    <h3 class="card-title">गरीब कन्याओं का विवाह</h3>
                                        <p class="card-text">कन्याओं को दान, महा कल्याण |</p>

                                        <center>
                                            <a href="<?= base_url('contribute') ?>" class="btn">
                                                <span class="badge"><i class="fa-regular fa-handshake"></i></span> Collaborate
                                            </a>
                                        </center>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="col my-4">
                                <div class="card card-shadow" style="border: none;">
                                    
                                    <div class="d-box">
                                        <div class="d-img">
                                            <img src="<?= base_url('assets/image/donate/god3.jpg') ?>" class="card-img-top" alt="donate image-1">
                                        </div>
                                    </div>

                                    <div class="card-body card-h3">
                                        <h3 class="card-title">गरीब कन्याओं का विवाह</h3>
                                        <p class="card-text">कन्याओं को दान, महा कल्याण |</p>
                                        <center>
                                            <a href="<?= base_url('contribute') ?>" class="btn">
                                                <span class="badge"><i class="fa-regular fa-handshake"></i></span> Collaborate
                                            </a>
                                        </center>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div class="col my-4">
                                <div class="card card-shadow" style="border: none;">
                                    
                                    <div class="d-box">
                                        <div class="d-img">
                                            <img src="<?= base_url('assets/image/donate/god4.jpg') ?>" class="card-img-top" alt="donate image-1">
                                        </div>
                                    </div>

                                    <div class="card-body card-h3">
                                        <h3 class="card-title">गरीब कन्याओं का विवाह</h3>
                                        <p class="card-text">कन्याओं को दान, महा कल्याण |</p>
                                        <center>
                                            <a href="<?= base_url('contribute') ?>" class="btn">
                                                <span class="badge"><i class="fa-regular fa-handshake"></i></span> Collaborate
                                            </a>
                                        </center>
                                    </div>
                                </div>
                            </div>


                        </div>



                    </div>

                </div>

            </div>

            <hr style="border:none">

        </section>


    </main>



    <!-- ======= Scroll Top ======= -->

    <div class="scroll-top-button">
        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="fa-solid fa-arrow-up"></i></a>
    </div>

    <!-- ======= Footer Section ======= -->
    <?php $this->load->view('include/footer') ?>


</body>

</html>