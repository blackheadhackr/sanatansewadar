<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="" name="description">
    <meta content="" name="keywords">
    <title>Sanatan Sewadar</title>

    <!-- ======= All head Links ======= -->

    <?php $this->load->view('include/headlink');?>

    <!-- Gallery baguettBox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

</head>

<body>

    <!-- ======= Header Section ======= -->

    <?php $this->load->view('include/header'); ?>


    <main>

      <!-- ======= Slider Section ======= -->
      
        <section class="slider-section">

            <div class="bg-video">
                <video autoplay muted loop id="myVideo">
                    <source src="./assets/video/intro.mp4" type="video/mp4">
                </video>
            </div>
            

            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div> -->


                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <!-- <img src="https://source.unsplash.com/1500x500/?shiv" alt="" /> -->

                        <div class="container">
                            <div class="carousel-caption">
                                <h2>Example headline.</h2>
                                <p>
                                    Some representative placeholder content for the first slide of
                                    the carousel.
                                </p>
                                <p>
                                    <a class="btn" href="#">Sign up today</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <!-- <img src="https://source.unsplash.com/1500x500/?hanuman" alt="" /> -->

                        <div class="container">
                            <div class="carousel-caption">
                                <h2>Another example headline.</h2>
                                <p>
                                    Some representative placeholder content for the second slide
                                    of the carousel.
                                </p>
                                <p><a class="btn" href="#">Learn more</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <!-- <img src="https://source.unsplash.com/1500x500/?god" alt="" /> -->

                        <div class="container">
                            <div class="carousel-caption">
                                <h2>One more for good measure.</h2>
                                <p>
                                    Some representative placeholder content for the third slide of
                                    this carousel.
                                </p>
                                <p>
                                    <a class="btn" href="#">Browse gallery</a>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>

        </section>
      

      


        <!-- ======= SANATAN CARD ======= -->

        <section class="sanatan-card">

            <div class="container">

                <div class="row">
                    <div class="col-md-12 text-center s-head">
                        <h1>Sanatan Sewadar</h1>
                        <hr>
                    </div>
                </div>

                <div class="row">

                    <!-- Sanatan Card - 1 -->
                    <!-- s-box-mb = this class for phone view margin bottom -->
                    <div class="col-md-12 col-lg-6 mb-4">
                        <div class="sanatan-box ramji">
                            <div class="row">
                                <div class="col-md-7">
                                    <h3>Card Heading</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, reiciendis ullam. Quo, sapiente unde earum fugiat iste aut assumenda repellendus labore nobis quaerat in illum fuga, vitae ipsa doloremque rem dolor debitis.</p>
                                    <a href="<?= base_url() ?>" class="btn">View More</a>
                                </div>
                                <div class="col-md-5">
                                    <img class="img-fluid" src="<?= base_url("assets/image/features/card-ramji.png") ?>" title="Ram Ji" alt="ramji">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sanatan Card - 2 -->
                    <div class="col-md-12 col-lg-6">
                        <div class="sanatan-box hanumanji">
                            <div class="row">
                                <div class="col-md-7">
                                    <h3>Card Heading</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, reiciendis ullam. Quo, sapiente unde earum fugiat iste aut assumenda repellendus labore nobis quaerat in illum fuga, vitae ipsa doloremque rem dolor debitis.</p>
                                    <a href="<?= base_url() ?>" class="btn">View More</a>
                                </div>
                                <div class="col-md-5">
                                    <img class="img-fluid" src="<?= base_url("assets/image/features/card-hanumanji.png") ?>" title="Hanuman Ji" alt="hanumanji">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </section>



        <hr style="border: none" />
        <hr style="border: none" />




        <!-- ======= FEATURETTES ======= -->

        <section class="featurettes-section">

            <div class="container ">
                <!-- Three columns of text below the carousel -->
                <!-- START THE FEATURETTES -->
                <div class="row">

                    <div class="col-lg-4">
                        <div class="box">
                            <div class="box-image">
                                <img src="<?= base_url('assets/image/features/radha_krishna.jpg') ?>" alt="featurettes-1" />
                            </div>
                        </div>

                        <div class="text-box">
                            <h2>Heading</h2>
                            <p>
                                Some representative placeholder content for the three columns of
                                text below the carousel. This is the first column.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="box">
                            <div class="box-image">
                                <img src="<?= base_url('assets/image/features/little_krishna.jpg') ?>" alt="featurettes-2" />
                            </div>
                        </div>
                        <div class="text-box">
                            <h2>Heading</h2>
                            <p>
                                Another exciting bit of representative placeholder content. This
                                time, we've moved on to the second column.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="box">
                            <div class="box-image">
                                <img src="<?= base_url('assets/image/features/ganeshji.jpg') ?>" alt="featurettes-3" />
                            </div>
                        </div>
                        <div class="text-box">
                            <h2>Heading</h2>
                            <p>
                                And lastly this, the third column of representative placeholder
                                content.
                            </p>
                        </div>
                    </div>

                </div>

                <!-- /END THE FEATURETTES -->
            </div>

        </section>





      <!-- ======= About Section (home page) ======= -->

        <section class="about-section">

            <div class="about p-2">
                <div class="container">

                    <div class="a-head my-5">
                        <h2 class="text-center">WHY SANATAN SEWADAR</h2>
                        <hr>
                    </div>

                    <div class="row">

                        <!-- Image left -->
                        <div class="col-md-6">
                            <div class="a-img">
                                <img src="<?= base_url() ?>assets/image/about/ram.jpg" title="Why Sanatan Sewadar" alt="about-image" style="width:100%; height: auto;">
                            </div>
                        </div>

                        <!-- Content Right -->
                        <div class="col-md-6">
                            <div class="a-body">
                                <h3 class="text-center">Why Sanatni's</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente eaque dolor aliquam
                                    earum aperiam tempora iure ab, quo cum saepe hic ratione itaque voluptatum nihil iusto
                                    amet error porro provident quisquam fuga fugit vel ut quasi. Laboriosam consectetur
                                    minima esse?
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        
        </section>




      <!-- ======= Custom Card  ======= -->

        <section class="custom-card">

            <div class="container px-4 py-5" id="custom-cards">

                <div class="custom-head">
                    <h2 class="pb-2 border-bottom custom-head">GOD OF SANATAN</h2>
                </div>

                <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 align-items-stretch g-4 py-5">
                    
                    <!-- Card 1 -->
                    <div class="col">
                        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                            style="background-image: url('<?= base_url(); ?>assets/image/features/vishnuji.jpg'); background-repeat: no-repeat; background-size: cover;">
                            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                <h2 class="pt-5 mt-5 mb-2 display-6 lh-1 fw-bold" style="text-shadow: #FC0 1px 0 10px;">Vishnu is associated with the maintenance, known as "The Pervader."</h2>
                                <ul class="d-flex list-unstyled mt-auto">
                                    <li class="me-auto">
                                        <img src="<?= base_url(); ?>assets/image/features/vishnuji.jpg" alt="vishnuji" width="32" height="32"
                                            class="rounded-circle border border-white">
                                    </li>
                                    <li class="d-flex align-items-center me-3">
                                        <svg class="bi me-2" width="1em" height="1em">
                                            <use xlink:href="#geo-fill"></use>
                                        </svg>
                                        <small>Visnu Ji</small>
                                    </li>
                                    <!-- <li class="d-flex align-items-center">
                                        <svg class="bi me-2" width="1em" height="1em">
                                            <use xlink:href="#calendar3"></use>
                                        </svg>
                                        <small>3d</small>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col">
                        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('<?= base_url(); ?>assets/image/features/shivji.jpg'); background-repeat: no-repeat; background-size: cover;">
                        <div class=" d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                <h2 class="pt-5 mt-5 mb-2 display-6 lh-5 fw-bold" style="text-shadow: #FC0 1px 0 10px;">Shiva is the Hindu trinity also known as "The Destroyer"
                                </h2>
                                <ul class="d-flex list-unstyled mt-auto">
                                    <li class="me-auto">
                                        <img src="<?= base_url(); ?>assets/image/features/shivji.jpg" alt="shivji" width="32" height="32"
                                            class="rounded-circle border border-white">
                                    </li>
                                    <li class="d-flex align-items-center me-3">
                                        <svg class="bi me-2" width="1em" height="1em">
                                            <use xlink:href="#geo-fill"></use>
                                        </svg>
                                        <small>Shiv Ji</small>
                                    </li>
                                    <!-- <li class="d-flex align-items-center">
                                        <svg class="bi me-2" width="1em" height="1em">
                                            <use xlink:href="#calendar3"></use>
                                        </svg>
                                        <small>4d</small>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col">
                        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                            style="background-image: url('<?= base_url(); ?>assets/image/features/brahmaji.jpg'); background-repeat: no-repeat; background-size: cover;">
                            <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                                <h2 class="pt-5 mt-5 mb-2 display-6 lh-5 fw-bold" style="text-shadow: #FC0 1px 0 10px;">Brahma is a Hindu god known as "The Creator"</h2>
                                <ul class="d-flex list-unstyled mt-auto">
                                    <li class="me-auto">
                                        <img src="<?= base_url(); ?>assets/image/features/brahmaji.jpg" alt="brahmaji" width="32" height="32"
                                            class="rounded-circle border border-white">
                                    </li>
                                    <li class="d-flex align-items-center me-3">
                                        <svg class="bi me-2" width="1em" height="1em">
                                            <use xlink:href="#geo-fill"></use>
                                        </svg>
                                        <small>Brahma Ji</small>
                                    </li>
                                    <!-- <li class="d-flex align-items-center">
                                        <svg class="bi me-2" width="1em" height="1em">
                                            <use xlink:href="#calendar3"></use>
                                        </svg>
                                        <small>5d</small>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        
        </section>


        

      <!-- ======= OUR HELP IN FIGURES ======= -->

        <section class="help-section">

            <div class="container-fulid" style="background-color: #fbfbfb; padding: 20px 0px;">

                <div class="container">

                    <div class="help-head">
                        <h2 class="text-center">OUR HELP IN FIGURES</h2>
                    </div>

                    <hr>

                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                        
                        <!-- Card 1 -->
                        <div class="col">
                            <div class="card h-100 p-4 card-shadow" style="border: none;">
                                <div class="box">
                                    <div class="box-image">

                                        <img src="<?= base_url('assets/image/help/god4.jpg'); ?>" class="card-img-top" title="Help" alt="help-1">
                                    </div>

                                </div>
                                <div class="card-body">
                                    <h3 class="card-title text-center">Card title</h3>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional
                                        content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="col">
                            <div class="card h-100 p-4 card-shadow" style="border: none;">
                                <div class="box">
                                    <div class="box-image">

                                        <img src="<?= base_url('assets/image/help/god3.jpg'); ?>" class="card-img-top" title="Help" alt="help-2">
                                    </div>

                                </div>
                                <div class="card-body">
                                    <h3 class="card-title text-center">Card title</h3>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional
                                        content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="col">
                            <div class="card h-100 p-4 card-shadow" style="border: none;">
                                <div class="box">
                                    <div class="box-image">

                                        <img src="<?= base_url('assets/image/help/god2.jpg'); ?>" class="card-img-top" title="Help" alt="help-3">
                                    </div>

                                </div>
                                <div class="card-body">
                                    <h3 class="card-title text-center">Card title</h3>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional
                                        content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="col">
                            <div class="card h-100 p-4 card-shadow" style="border: none;">
                                <div class="box">
                                    <div class="box-image">

                                        <img src="<?= base_url('assets/image/help/god1.jpg'); ?>" class="card-img-top" title="Help" alt="help-4">
                                    </div>

                                </div>
                                <div class="card-body">
                                    <h3 class="card-title text-center">Card title</h3>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional
                                        content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 5 -->
                        <div class="col">
                            <div class="card h-100 p-4 card-shadow" style="border: none;">
                                <div class="box">
                                    <div class="box-image">

                                        <img src="<?= base_url('assets/image/help/god5.jpg'); ?>" class="card-img-top" title="Help" alt="help-5">
                                    </div>

                                </div>
                                <div class="card-body">
                                    <h3 class="card-title text-center">Card title</h3>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional
                                        content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 6 -->
                        <div class="col">
                            <div class="card h-100 p-4 card-shadow" style="border: none;">
                                <div class="box">
                                    <div class="box-image">

                                        <img src="<?= base_url('assets/image/help/god2.jpg'); ?>" class="card-img-top" title="Help" alt="help-6">
                                    </div>

                                </div>
                                <div class="card-body">
                                    <h3 class="card-title text-center">Card title</h3>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional
                                        content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Service Page View More Button -->
                    <div class="service-btn">
                        <a href="<?= base_url('service-sanatan-sewadar') ?>" class="btn">View More</a>
                    </div>

                </div>

            </div>
            
        </section>

        <hr style="border: none;">
        <hr style="border: none;">





      <!-- ======= Donate Section ======= -->

        <section class="donate-section">

            <div class="container">

                <div class="donate-head text-center">
                    <h2>DONATE & SUPPORT</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate tenetur ut ea.</p>
                    <hr>
                </div>

                <div class="row">

                    <div class="col-md-6 donate-body">
                        <h3>Donate & Support</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur exercitationem doloremque
                            aut. Facilis
                            cum nobis perferendis perspiciatis. Adipisci quod laborum voluptates sunt amet, quae consequatur
                            beatae
                            excepturi, quasi voluptate doloremque consectetur exercitationem id esse velit maiores! Vero
                            culpa nam
                            eveniet?
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur exercitationem doloremque
                            aut. Facilis
                            cum nobis perferendis perspiciatis. Adipisci quod laborum voluptates sunt amet, quae consequatur
                            beatae
                            excepturi, quasi voluptate doloremque consectetur exercitationem id esse velit maiores! Vero
                            culpa nam
                            eveniet?
                        </p>

                        <a href="<?= base_url('collaborate-with-sanatan-sewadar') ?>" class="btn">
                            <span class="badge"><i class="fa fa-heart"></i></span> Collaborate
                        </a>

                    </div>

                    <div class="col-md-6">
                        <div class="row">

                            <div class="col-md-6 ">
                                <div class="donate-image">
                                    <img src="<?= base_url('assets/image/donate/features_2.jpg'); ?>" title="Donate & Support" alt="donate-1" style="width:100%; height: 100%;">
                                </div>
                            </div>

                            <div class="col-md-6 donate-img-del">
                                <div class="donate-image">
                                    <img src="<?= base_url('assets/image/donate/features_1.jpg'); ?>" title="Donate & Support" alt="donate-1" style="width:100%; height: 100%;">
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            
        </section>


        <hr style="border: none;">
        <hr style="border: none;">


        <!-- ======= Gallery Section ======= -->

        <section class="gallery-section">

            <div class="container">

                <div class="gallery-head text-center">
                    <h2>GALLERY</h2>
                    <p>Showcase of the images</p>
                    <hr>
                </div>



                <!-- Gallery -->

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


                <!-- Gallery Page View More Button -->
                <div class="service-btn">
                    <a href="<?= base_url('gallery-sanatan-sewadar') ?>" class="btn">View More</a>
                </div>

            </div>

        </section>


        <hr style="border: none;">
        <hr style="border: none;">

    </main>




    <!-- ======= Scroll Top ======= -->

    <div class="scroll-top-button">
        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="fa-solid fa-arrow-up"></i></a>
    </div>



    <!-- ======= Footer Section ======= -->

    <?php $this->load->view('include/footer')?>


    <!-- Gallery Section -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.gallery-body');
    </script>

</body>

</html>