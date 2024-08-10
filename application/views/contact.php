<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="Sanatan Sena" name="description">
    <meta content="" name="keywords">
    <title>Sanatan Sewadar | Contact</title>

    <!-- ======= all link ======= -->
    <?php $this->load->view('include/headlink')?>

</head>

<body>

    <!-- ======= Header Section ======= -->
    <?php $this->load->view('include/header')?>



    <!-- ======= Main Section ======= -->


    <main>


        <section class="contact">

            <div class="container-fluid p-0 m-0">

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3499.854598953986!2d77.14673407457535!3d28.693995781288542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d02331836f011%3A0x20578a08551c0b8b!2sParas%20Parivaar!5e0!3m2!1sen!2sin!4v1706080815109!5m2!1sen!2sin"
                    width="100%" height="400" style="border:0;" allowfullscreen="true" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>

            <div class="contact-details">
                <div class="container">

                    <!-- Contact head -->
                    <div class="contact-head">
                        <h1>Contact Us</h1>
                        <hr>
                    </div>

                    <!-- Contact Body -->

                    
                    <div class="row">

                        <!-- Contact Body Left -->

                        <div class="col-md-8 contact-left">
                            <h3 class="mb-4">How we can help you?</h3>
                            <div class="success"></div>
                            <form id="contactform">
                                <div class="row g-3 mb-3">
                                    <div class="col-sm-6">
                                        <label for="firstName" class="form-label">First name <span class="form-span">*</span></label>
                                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder=" Your First Name">
                                        <div class="first text-danger my-2"></div>
                                    </div> 

                                    <div class="col-sm-6">
                                        <label for="lastName" class="form-label">Last name <span class="form-span">*</span></label>
                                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder=" Your Last Name">
                                        <div class="last text-danger my-2"></div>
                                    </div> 

                                    <div class="col-12">
                                        <label for="email" class="form-label">Email <span class="form-span">*</span></label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" >
                                        <div class="email text-danger my-2"></div>

                                    </div> 
                                    <div class="col-12">
                                        <label for="phone" class="form-label">Phone <span class="form-span">*</span></label>
                                        <input type="number" class="form-control" id="phone" name="phone" placeholder="+ 011-42688888">
                                        <div class="phone text-danger my-2"></div>
                                    </div>

                                    <div class="col-12">
                                        <label for="message" class="form-label">Message <span class="form-span">*</span></label>
                                        <textarea class="form-control" placeholder="Leave a comment here" id="message" name="message" style="height: 100px"></textarea>
                                        <div class="message text-danger my-2"></div>
                                    </div>
                                    
                                </div>

                                <button class="btn mb-4 contact-btn con" type="submit">Send Message</button>
                            </form>
                        </div>

                    
                        <!-- Contact Body Right -->
                    
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 contact-right">

                            <h3 class="mb-4" style="color: #212529bf;">Get in Touch</h3>
                            <p style="color: #212529bf;">
                                <i class="fas fa-home me-3"></i>
                                355, 3rd Floor,
                                Aggarwal Millennium
                                Tower-1, Netaji Subhas
                                Place, Pitam Pura,
                                New Delhi - 110034
                            </p>

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




                            <!-- Social Icons -->
                            <div class="blog-social my-5">
                                <h2>Search On</h2>
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
        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="fa-solid fa-arrow-up"></i></a>
    </div>

    <!-- ======= Footer Section ======= -->
   
    <?php $this->load->view('include/footer')?>

    <script>
        $(document).ready(function(){
            $('#contactform').on('submit',function(e){
                e.preventDefault();
                $.ajax({
                    url:"<?= base_url('Web_contact/addcontact')?>",
                    type:'post',
                    data:$(this).serialize(),
                    dataType:'json',
                    success:function(data){
                        if(data.result == 'error'){
                            // alert('error');
                            $('.first').html(data.first);
                            $('.last').html(data.last);
                            $('.email').html(data.email);
                            $('.phone').html(data.phone);
                            $('.message').html(data.message);
                        }else{
                            $('.success').html(data.message);
                            $('#contactform')[0].reset();
                        }
                    }
                });
            })
        })
    </script>

</body>

</html>