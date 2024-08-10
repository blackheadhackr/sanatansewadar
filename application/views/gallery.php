<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="" name="description">
    <meta content="" name="keywords">
    <title>Sanatan Sewadar</title>

    <!-- ======= all link ======= -->
    <?php $this->load->view('include/headlink')?>

    <!-- Gallery buguetteBox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

</head>

<body>

    <!-- ======= Header Section ======= -->
    <?php $this->load->view('include/header')?>



    <!-- ======= Main Section ======= -->


    <main>

        <section class="gallery-page">

            <div class="container">

                <!-- Gallery head -->
                <div class="gallery-head">
                    
                    <h1>Our Gallery</h1>
                    <hr>

                </div>

                <!-- Gallery Body -->
                <div class="gallery-body">
                    
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <a class="lightbox" href="<?= base_url('assets/image/gallery/park.jpg') ?>">
                                <img src="<?= base_url('assets/image/gallery/park.jpg') ?>" title="Gallery" alt="Park">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <a class="lightbox" href="<?= base_url('assets/image/gallery/bridge.jpg') ?>">
                                <img src="<?= base_url('assets/image/gallery/bridge.jpg') ?>" title="Gallery" alt="Bridge">
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <a class="lightbox" href="<?= base_url('assets/image/gallery/tunnel.jpg') ?>">
                                <img src="<?= base_url('assets/image/gallery/tunnel.jpg') ?>" title="Gallery" alt="Tunnel">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <a class="lightbox" href="<?= base_url('assets/image/gallery/coast.jpg') ?>">
                                <img src="<?= base_url('assets/image/gallery/coast.jpg') ?>" title="Gallery" alt="Coast">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <a class="lightbox" href="<?= base_url('assets/image/gallery/rails.jpg') ?>">
                                <img src="<?= base_url('assets/image/gallery/rails.jpg') ?>" title="Gallery" alt="Rails">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <a class="lightbox" href="<?= base_url('assets/image/gallery/traffic.jpg') ?>">
                                <img src="<?= base_url('assets/image/gallery/traffic.jpg') ?>" title="Gallery" alt="Traffic">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <a class="lightbox" href="<?= base_url('assets/image/gallery/rocks.jpg') ?>">
                                <img src="<?= base_url('assets/image/gallery/rocks.jpg') ?>" title="Gallery" alt="Rocks">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <a class="lightbox" href="<?= base_url('assets/image/gallery/benches.jpg') ?>">
                                <img src="<?= base_url('assets/image/gallery/benches.jpg') ?>" title="Gallery" alt="Benches">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <a class="lightbox" href="<?= base_url('assets/image/gallery/sky.jpg') ?>">
                                <img src="<?= base_url('assets/image/gallery/sky.jpg') ?>" title="Gallery" alt="Sky">
                            </a>
                        </div>
                    </div>

                </div>

            </div>

        </section>


    </main>


    
    <!-- ======= Scroll Top ======= -->

    <div class="scroll-top-button">
        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="fa-solid fa-arrow-up"></i></a>
    </div>

    <!-- ======= Footer Section ======= -->
    <?php $this->load->view('include/footer')?>


    <!-- Gallery buguetteBox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>

    <script>
        baguetteBox.run('.gallery-body');
    </script>


</body>

</html>