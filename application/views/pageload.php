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

        <section class="page_404">

            <!-- 404 Section -->
            <div class="d-flex align-items-center justify-content-center vh-100">
                <div class="text-center">
                    <h1 class="display-1 fw-bold">404 :( </h1>
                    <p class="fs-3"> <span class="text-danger">Opps!</span> Page not found.</p>
                    <p class="lead">
                        The page you’re looking for doesn’t exist.
                    </p>
                    <a href="<?= base_url() ?>" class="btn">Go Home</a>
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


</body>

</html>