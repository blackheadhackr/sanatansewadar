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

        <section class="donation-section">

            <div class="top-banner">
                <img src="<?= base_url('assets/image/donate/donate_banner.jpg') ?>" title="Donate for Sanatan Sewadar" alt="donation-banner" width="100%" height="auto">
            </div>


            <div class="container">

                <!-- Donation Head -->
                <div class="donation-head">
                    <h1>DONATE FOR SANATAN SEWADAR</h1>
                    <hr>
                </div>

                <!-- Donation Body -->
                <div class="row">

                    <!-- Bank Details -->
                    <div class="col-md-8 p-2">

                        <div class="donation-head-h2">
                            <h2>Bank details</h2>
                        </div>

                        <div class="donation-body">
                            <div class="bank-details">
                                <h3>State Bank Of India</h3>
                                <p>
                                    <b>Beneficiary Name :</b> Sanatan Sewadar <br>
                                    <b>Bank Name :</b> State Bank of India <br>
                                    <b>Account No. :</b> 30880944453 <br>
                                    <b>IFSC CODE :</b> SBIN0006530 <br>
                                    <b>Branch :</b> Shalimar Bagh, Pitampura (DL.) <br>
                                </p>
                            </div>
                            <div class="bank-details">
                                <h3>State Bank Of India</h3>
                                <p>
                                    <b>Beneficiary Name :</b> Sanatan Sewadar <br>
                                    <b>Bank Name :</b> State Bank of India <br>
                                    <b>Account No. :</b> 30880944453 <br>
                                    <b>IFSC CODE :</b> SBIN0006530 <br>
                                    <b>Branch :</b> Shalimar Bagh, Pitampura (DL.) <br>
                                </p>
                            </div>
                            <div class="bank-details">
                                <h3>State Bank Of India</h3>
                                <p>
                                    <b>Beneficiary Name :</b> Sanatan Sewadar <br>
                                    <b>Bank Name :</b> State Bank of India <br>
                                    <b>Account No. :</b> 30880944453 <br>
                                    <b>IFSC CODE :</b> SBIN0006530 <br>
                                    <b>Branch :</b> Shalimar Bagh, Pitampura (DL.) <br>
                                </p>
                            </div>
                        </div>

                    </div>


                    <!-- QR For Donate -->
                    <div class="col-md-4 p-4">

                        <div class="donation-qr">
                            <h3>QR CODE</h3>
                            <img src="<?= base_url('assets/image/donate/qr.png') ?>" class="card-img-top" title="QR " alt="donate image-1">
                        </div>


                        <!-- <a href="<?= base_url('home/recivedonation') ?>" class="btn">
                            <span class="badge"><i class="fa-regular fa-handshake"></i></span> UPI
                        </a> -->
                        
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


</body>

</html>