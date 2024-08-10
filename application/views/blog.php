<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="" name="description">
    <meta content="" name="keywords">
    <title>Sanatan Sewadar | Blog</title>

    <!-- ======= all link ======= -->
    <?php $this->load->view('include/headlink')?>

</head>

<body>

    <!-- ======= Header Section ======= -->
    <?php $this->load->view('include/header')?>


    <!-- ======= Main Section ======= -->

    <main>

        <section class="blog">

            <div class="top-banner">
                <img src="<?= base_url() ?>assets/image/blog_img/blog3.jpg" title="Blog" alt="blog-banner" width="100%" height="auto">
            </div>

            <hr style="border:none">

            <div class="container">

                <!-- Blog head -->
                <div class="blog-head">
                    <h1>Our Blogs</h1>
                    <hr>
                </div>

                <div *ngFor="let item of result" class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-6">

                    <div class="col blog-card-wrap">
                        <a href="<?= base_url('blog-details-sanatan-sewadar') ?>">

                            <div class="blog-card">

                                <!-- Card Header Image -->
                                <div class="card__header">
                                    <img src="<?= base_url('assets/image/blog_img/blog2.jpg') ?>" width="100%" height="auto" title="Blog" alt="blog-1">
                                </div>

                                <!-- Card Body -->
                                <div class="card__body">
                                    <span class="tag tag-blue" style="font-size: 1rem; text-align:center;">Blog</span>
                                    <h2 style="text-align:center;">Heading</h2>
                                    <p style="text-align:center; color:gray;">23-01-2024</p>
                                    <p style="font-size:14px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro unde autem voluptatem illo illum error quibusdam dolor quod.</p>
                                </div>

                            </div>

                        </a>
                    </div>

                    <div class="col blog-card-wrap">
                        <a href="<?= base_url('blog-details-sanatan-sewadar') ?>">

                            <div class="blog-card">

                                <!-- Card Header Image -->
                                <div class="card__header">
                                    <img src="<?= base_url('assets/image/blog_img/blog3.jpg') ?>" width="100%" height="auto" title="Blog" alt="blog-2">
                                </div>

                                <!-- Card Body -->
                                <div class="card__body">
                                    <span class="tag tag-blue" style="font-size: 1rem; text-align:center;">Blog</span>
                                    <h2 style="text-align:center;">Heading</h2>
                                    <p style="text-align:center; color:gray;">23-01-2024</p>
                                    <p style="font-size:14px; ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro unde autem voluptatem illo illum error quibusdam dolor quod.</p>
                                </div>

                            </div>

                        </a>
                    </div>

                    <div class="col blog-card-wrap">
                        <a href="<?= base_url('blog-details-sanatan-sewadar') ?>">

                            <div class="blog-card">

                                <!-- Card Header Image -->
                                <div class="card__header">
                                    <img src="<?= base_url('assets/image/blog_img/blog4.jpg') ?>" width="100%" height="auto" title="Blog" alt="blog-3">
                                </div>

                                <!-- Card Body -->
                                <div class="card__body">
                                    <span class="tag tag-blue" style="font-size: 1rem; text-align:center;">Blog</span>
                                    <h2 style="text-align:center;">Heading</h2>
                                    <p style="text-align:center; color:gray;">23-01-2024</p>
                                    <p style="font-size:14px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro unde autem voluptatem illo illum error quibusdam dolor quod.</p>
                                </div>

                            </div>

                        </a>
                    </div>

                    <div class="col blog-card-wrap">
                        <a href="<?= base_url('blog-details-sanatan-sewadar') ?>">

                            <div class="blog-card">

                                <!-- Card Header Image -->
                                <div class="card__header">
                                    <img src="<?= base_url('assets/image/blog_img/blog6.jpg') ?>" width="100%" height="auto" title="Blog" alt="blog-4">
                                </div>

                                <!-- Card Body -->
                                <div class="card__body">
                                    <span class="tag tag-blue" style="font-size: 1rem; text-align:center;">Blog</span>
                                    <h2 style="text-align:center;">Heading</h2>
                                    <p style="text-align:center; color:gray;">23-01-2024</p>
                                    <p style="font-size:14px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro unde autem voluptatem illo illum error quibusdam dolor quod.</p>
                                </div>

                            </div>

                        </a>
                    </div>

                </div>

                <!-- Button Load More -->
                <div class="blog-btn">
                    <a href="<?= base_url('blog-details-sanatan-sewadar') ?>" class="btn">Load More</a>
                </div>


            </div>

        </section>

        <hr style="border: none;">
        <hr style="border: none;">

    </main>


    <!-- ======= Scroll Top ======= -->

    <div class="scroll-top-button">
        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="fa-solid fa-arrow-up"></i></a>
    </div>


    <!-- ======= Footer Section ======= -->
    <?php $this->load->view('include/footer')?>

</body>

</html>