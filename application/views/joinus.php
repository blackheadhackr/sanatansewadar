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

        <section class="join-section">

            <div class="top-banner">
                <img src="<?= base_url('assets/image/services/gallery5.jpg') ?>" title="Join Us" alt="Join Us" width="100%" height="auto">
            </div>

            <div class="container">

                <!-- Join us head -->
                <div class="join-head">
                    <h1>Join Us</h1>
                    <hr>
                </div>

                <!-- Join us body -->
                <div class="join-body">

                    <div class="row">

                        <!-- Join Us Body Left -->

                        <div class="col-md-8 join-left">

                            <h3 class="mb-4">Thank you for interest in sanatan sewadar</h3>

                            <!-- Join Us Form -->
                            <form id="join"  enctype="multipart/form-data">

                                <!-- For Success / Error Popup -->
                                <div class="message"></div>

                                <div class="row g-3 mb-3">

                                    <!-- Name -->

                                    <div class="col-sm-6">
                                        <label for="firstName" class="form-label">First name <span class="form-span">*</span></label>
                                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Your First Name">
                                        <div class="fname text-danger"></div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="lastName" class="form-label">Last name <span class="last-name">(optional)</span> </label>
                                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Your Last Name">
                                        <div class="lname text-danger"></div>
                                    </div>

                                    <!-- E-Mail -->

                                    <div class="col-12">
                                        <label for="email" class="form-label">Email <span class="form-span">*</span></label>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="you@example.com">
                                        <div class="email text-danger"></div>
                                    </div>

                                    <!-- Phone NUmber -->

                                    <div class="col-12">
                                        <label for="phone" class="form-label">Phone <span class="form-span">*</span></label>
                                        <input type="number" class="form-control" id="phone" name="phone" placeholder="+ 011-42688888">
                                        <div class="phone text-danger"></div>
                                    </div>

                                    <!-- Date of Birth -->

                                    <div class="col-sm-6">
                                        <label for="date" class="form-label d-block">Date of Birth <span class="form-span">*</span></label>

                                        <div class="input-group date" id="datepicker">
                                            <input type="text" class="form-control" id="datepicker" name="date"/>
                                            <span class="input-group-append">
                                                <span class="input-group-text bg-light d-block">
                                                    <i class="fa-solid fa-calendar"></i>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="dob text-danger"></div>

                                    </div>

                                    <!-- Gender Radio Button -->

                                    <div class="col-sm-6 col-md-6 col-lg-6 ">

                                        <label for="gender" class="form-label d-block">Select Gender <span class="form-span">*</span> </label>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" checked type="radio" name="Gender" id="inlineRadio1" value="Male">
                                            <label class="form-check-label" for="inlineRadio1">Male</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Gender" id="inlineRadio2" value="Female">
                                            <label class="form-check-label" for="inlineRadio2">Female</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Gender" id="inlineRadio3" value="Other">
                                            <label class="form-check-label" for="inlineRadio3">Other</label>
                                        </div>

                                        <div class="gender text-danger"></div>
                                    </div>

                                    <!-- Address -->

                                    <div class="col-sm-6">
                                        <label for="address1" class="form-label">Home No. <span class="form-span">*</span></label>
                                        <input type="text" class="form-control" id="phone" name="address1" placeholder="123 Street Exe. " />
                                        <div class="address text-danger"></div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="address2" class="form-label">Area <span class="form-span">*</span></label>
                                        <input type="text" class="form-control" id="phone" name="address2" placeholder="" />
                                        <div class="address2 text-danger"></div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="city" class="form-label">City <span class="form-span">*</span></label>
                                        <input type="text" class="form-control" id="city" name="city" placeholder="" />
                                        <div class="city text-danger"></div>
                                    </div>


                                    <div class="col-sm-6">
                                        <label for="state" class="form-label">State/Province <span class="form-span">*</span></label>
                                        <input type="text" class="form-control" id="state" name="state" placeholder="" />
                                        <div class="state text-danger"></div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="zip" class="form-label">Zip/Postal code <span class="form-span">*</span></label>
                                        <input type="text" class="form-control" id="zip" name="zip" placeholder="" />
                                        <div class="zip text-danger"></div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="country" class="form-label">Country <span class="form-span">*</span></label>
                                        <input type="text" class="form-control" id="country" name="country" placeholder="" />
                                        <div class="conutry text-danger"></div>
                                    </div>

                                    <!-- Document Aadhar / Pan Card  -->

                                    <div class="col-12">
                                        <label for="formFile" class="form-label">Valid Id Proof<span class="form-span"> *</span> <span class="last-name"> (max-1MB)</span></label>
                                        <input class="form-control" type="file" id="formFile" name="idproof">
                                        <div class="photo text-danger"></div>
                                    </div>

                                    <!-- Religion -->

                                    <div class="col-12">
                                        <label for="religion" class="form-label">Your Religion <span class="form-span">*</span></label>
                                        <input class="form-control" list="religions" id="religion" name="religion" placeholder="Type to search...">
                                        <datalist id="religions">
                                            <option value="Sanatan">
                                            <option value="Hindu">
                                            <option value="Sikh">
                                            <option value="Buddha">
                                            <option value="Jain">
                                            <option value="Islam">
                                            <option value="Christian">
                                        </datalist>
                                        <div class="religion text-danger"></div>
                                    </div>


                                </div>

                                <button class="btn mb-4 join-btn" type="submit">Send Message</button>

                            </form>

                        </div>


                        <!-- Join Us Body Right -->

                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                            <!-- Connect With -->
                            <div class="connect-with">

                                <h2>Connect With</h2>

                                <p>
                                    <a href="mailto:parasparivaarteam@gmail.com" style="text-decoration: none; color: #212529bf;">
                                        <i class="fas fa-envelope me-3"></i> parasparivaarteam@gmail.com
                                    </a>
                                </p>
    
                                <p>
                                    <a href="tel:011" style="text-decoration: none; color: #212529bf;"><i
                                            class="fas fa-phone me-3"></i> + 01 234 567 88</a>
                                </p>
                                <p>
                                    <a href="https://api.whatsapp.com/send?phone=918882580006"
                                        style="text-decoration: none; color: #212529bf;" target="_blank"><i
                                            class="fa-brands fa-square-whatsapp me-3"></i> Make a Chat</a>
                                </p>
                            </div>

                            <!-- Social Icons -->
                            <div class="blog-social my-2">

                                <h2>You also find On</h2>

                                <div class="top-bar-icon">
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-x-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-youtube"></i></a>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                        </div>


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


    <!-- ======= Form Backend ======= -->
    <script>
        $(document).ready(function(){
            $('#join').on('submit',function(e){
                e.preventDefault();
                // var a = $(this).serialize();
                // alert(a);
                $.ajax({
                    url:"<?= base_url('Joiner/join_data_insert')?>",
                    type:'post',
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    cache: false,
                    async: false,
                    dataType:'json',
                    success:function(data){
                        if(data.result == 'error'){
                            $('.fname').html(data.name);
                            $('.email').html(data.email);
                            $('.phone').html(data.phone);
                            $('.dob').html(data.date);
                            $('.gender').html(data.Gender);
                            $('.address').html(data.address1);
                            $('.address2').html(data.address2);
                            $('.city').html(data.city);
                            $('.state').html(data.state);
                            $('.zip').html(data.zip);
                            $('.conutry').html(data.country);
                            $('.photo').html(data.photo);
                            $('.religion').html(data.religion);
                            
                        }else{
                            $('.message').html(data.message);
                            $('#join')[0].reset();
                        }
                    }
                });
            })
        })
    </script>

</body>

</html>