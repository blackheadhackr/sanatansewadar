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

        <section class="service-dets-section">

            <div class="top-banner">
                <img src="https://source.unsplash.com/1500x500/?old" alt="service-page-banner" width="100%" height="auto">
            </div>

            <hr style="border: none;">

            <div class="container">

                <!-- Page head -->
                <div class="service-dets-head">
                    <h1>Old Age Home Facility</h1>
                    <hr>
                </div>


                <div class="service-dets-body">

                    <div class="row g-4">

                        <!-- Service Details Right -->

                        <div class="col-md-8 service-dets-left">
                            <h2>Old Age Home Facility</h2>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa porro culpa itaque vero non distinctio, aspernatur libero maxime! Fuga illum, sunt aliquid placeat reiciendis quo nemo nisi natus culpa ab repellendus optio neque aliquam nulla id iusto facilis, numquam incidunt dolore a mollitia nostrum vitae?</p>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa porro culpa itaque vero non distinctio, aspernatur libero maxime! Fuga illum, sunt aliquid placeat reiciendis quo nemo nisi natus culpa ab repellendus optio neque aliquam nulla id iusto facilis, numquam incidunt dolore a mollitia nostrum vitae?</p>
                        </div>

                        <!-- Service Details Left -->

                        <div class="col-md-4 service-dets-right">
                            <div class="service-dets-img">
                                <img src="<?= base_url('assets/image/services/oldage.jpg'); ?>" title="Old Age Home Facility" alt="service-details" srcset="" width="100%" height="auto">
                            </div>
                        </div>

                    </div>

                </div>



            </div>

        </section>

        <hr style="border: none;">


        <!-- ======= Service Details Gallery ======= -->

        <section class="service-gallery">

            <div class="container">

                <!-- Gallery Head -->

                <div class="service-gallery-head">
                    <h2>Our Gallery</h2>
                    <hr>
                </div>

                <!-- Gallery -->
                <div class="row">

                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <img src="<?= base_url('assets/image/gallery/gallery1.jpg'); ?>"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

                        <img src="<?= base_url('assets/image/gallery/gallery2.jpg'); ?>"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="<?= base_url('assets/image/gallery/gallery4.jpg'); ?>"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />

                        <img src="<?= base_url('assets/image/gallery/gallery3.jpg'); ?>"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="<?= base_url('assets/image/gallery/gallery5.jpg'); ?>"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

                        <img src="<?= base_url('assets/image/gallery/gallery6.jpg'); ?>"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
                    </div>

                </div>

            </div>

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