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

</head>

<body>

    <!-- ======= Header Section ======= -->
    <?php $this->load->view('include/header')?>


    <!-- ======= Main Section ======= -->

    <main>

        <section class="service-section">

            <!-- Service Slider -->
            <div class="mb-3" id="slideshow">
                <img id="image" />
            </div>

            <div class="container">

                <div class="service-top-content">
                    <h2>SANATAN SEWADAR PARAS BHAI JI SAYS</h2>
                    <p><i class="fa-solid fa-quote-left"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, sint debitis, dolores tenetur doloremque esse veritatis reiciendis explicabo ratione neque soluta ea, veniam modi distinctio eligendi autem facere voluptatibus eos? Dicta amet unde ea ab distinctio facilis, cumque dignissimos obcaecati? <i class="fa-solid fa-quote-right"></i></p>
                </div>

                <!-- Service Page head -->
                <div class="service-head">
                    <h1>Our Services</h1>
                    <hr>
                </div>

            </div>

            <hr style="border: none;">


            <!-- Service Page Body -->

            <!-- service Card -->

            <div class="container">

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                            
                    <!-- Card 1 -->
                    <div class="col">

                        <a href="<?= base_url('service-details-sanatan-sewadar') ?>">
                            <div class="card h-100 p-4 card-shadow" style="border: none;">
                                <div class="service-box">

                                    <div class="service-box-image">
        
                                        <img src="<?= base_url('assets/image/services/god1.jpg'); ?>" class="card-img-top" alt="...">
        
                                    </div>
        
                                </div>

                                <div class="card-body">
                                    <h3 class="card-title text-center">Card title</h3>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional
                                        content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </a>

                    </div>
                            
                    <!-- Card 2 -->
                    <div class="col">

                        <a href="<?= base_url('service-details-sanatan-sewadar') ?>">
                            <div class="card h-100 p-4 card-shadow" style="border: none;">
                                <div class="service-box">

                                    <div class="service-box-image">
        
                                        <img src="<?= base_url('assets/image/services/god2.jpg'); ?>" class="card-img-top" alt="...">
        
                                    </div>
        
                                </div>

                                <div class="card-body">
                                    <h3 class="card-title text-center">Card title</h3>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional
                                        content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </a>

                    </div>
                            
                    <!-- Card 3 -->
                    <div class="col">

                        <a href="<?= base_url('service-details-sanatan-sewadar') ?>">
                            <div class="card h-100 p-4 card-shadow" style="border: none;">
                                <div class="service-box">

                                    <div class="service-box-image">
        
                                        <img src="<?= base_url('assets/image/services/god3.jpg'); ?>" class="card-img-top" alt="...">
        
                                    </div>
        
                                </div>

                                <div class="card-body">
                                    <h3 class="card-title text-center">Card title</h3>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional
                                        content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </a>

                    </div>
                            
                    <!-- Card 4 -->
                    <div class="col">

                        <a href="<?= base_url('service-details-sanatan-sewadar') ?>">
                            <div class="card h-100 p-4 card-shadow" style="border: none;">
                                <div class="service-box">

                                    <div class="service-box-image">
        
                                        <img src="<?= base_url('assets/image/services/god4.jpg'); ?>" class="card-img-top" alt="...">
        
                                    </div>
        
                                </div>

                                <div class="card-body">
                                    <h3 class="card-title text-center">Card title</h3>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional
                                        content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </a>

                    </div>

                </div>

                <!-- Button -->
                <div class="service-btn">
                    <a href="<?= base_url('service-details-sanatan-sewadar') ?>" class="btn">Load More</a>
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