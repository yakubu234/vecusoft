<?php include('header.php'); ?>
    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg-2.jpg">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Book Hair <span class="inner-text">Service</span></h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="index.php">Home</a></li>
                        <li>Appointment</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="img-box4">
                        <div class="img-1"><img src="assets/img/about/appointment-5-1.jpg" alt="Appointment Image"></div>
                        <div class="img-shape jump"><img src="assets/img/shape/shape-dotted.png" alt="shape"></div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="ms-xl-4 ps-xxl-3">
                        <span class="sec-subtitle">Glow Beauty Appointment</span>
                        <h2 class="sec-title">Book Your <span class="text-theme">Hair</span> Service</h2>
                        <p class="mb-4 pb-2">Use the form below to book your consultation for hair treatments, wig installations, coloring, or styling services.</p>
                        <form action="https://html.vecurosoft.com/wellnez/demo/mail.php" method="POST" class="ajax-contact form-style6">
                            <div class="form-group"><input type="text" name="name" id="name" placeholder="Your Name*"></div>
                            <div class="form-group"><input type="email" name="email" id="email" placeholder="Your Email*"></div>
                            <div class="form-group"><select name="service" id="service" class="form-select">
                                    <option value="" selected="selected" disabled="disabled" hidden>Select Hair Service*</option>
                                    <option value="Wig Installation & Styling">Wig Installation & Styling</option>
                                    <option value="Full Extension Install">Full Extension Install</option>
                                    <option value="Custom Hair Coloring">Custom Hair Coloring</option>
                                    <option value="Bridal Hair Styling">Bridal Hair Styling</option>
                                    <option value="Deep Conditioning Treatment">Deep Conditioning Treatment</option>
                                    <option value="Hair Cosmetic Consultation">Hair Cosmetic Consultation</option>
                                </select></div>
                            <div class="form-group"><input type="text" name="phone" id="phone" placeholder="Your Phone*"></div>
                            <div class="form-group"><input type="date" name="date" id="date"></div>
                            <div class="form-group"><input type="time" name="time" id="time"></div>
                            <div class="form-group"><textarea name="message" id="message" placeholder="Notes (e.g., hair length, color request)"></textarea></div><button class="vs-btn" type="submit">Book Now</button>
                            <p class="form-messages"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container space-bottom">
        <div class="row gx-80">
            <div class="col-lg-7 mb-40 mb-lg-0 wow fadeInUp" data-wow-delay="0.2s">
                <h3 class="h4">Why Book With Glow Beauty?</h3>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-unstyled product-feature-list">
                            <li><i class="far fa-check"></i>Expert Wig & Extension Services</li>
                            <li><i class="far fa-check"></i>Premium Quality Human Hair</li>
                            <li><i class="far fa-check"></i>Custom Styling & Coloring</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled product-feature-list">
                            <li><i class="far fa-check"></i>Certified Hair Technicians</li>
                            <li><i class="far fa-check"></i>Focus on Hair Health</li>
                            <li><i class="far fa-check"></i>Flexible Appointment Times</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.3s">
                <h3 class="h4">Find Us</h3>
                <p class="mb-3">Visit our Emporium for your appointment. We are located near St George's Square.</p>
                <div class="contact-table">
                    <div class="tr">
                        <div class="tb-col"><span class="th">Address :</span> <span class="td">2 St Peters Street, Huddersfield HD1 1LN, UK</span></div>
                    </div>
                    <div class="tr">
                        <div class="tb-col"><span class="th">Phone :</span> <span class="td"><a href="tel:+447886221372" class="text-inherit">+44 (0) 7886 221372</a></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>