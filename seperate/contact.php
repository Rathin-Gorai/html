    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" style="padding-top:0%">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <p>Book Now</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Ghatshila, Jamshedpur, Jharkhand, 832304</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>business.projects4you@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+91 62005 09206</p>
                <p>+91 62027 39700</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

            <form action="../contact.php" method="post" role="form" class="php-email-form">
            <div class="form-group mt-3">
            <input type="text" name="project" class="form-control" id="project" value= "<?php echo "$title"; ?>" readonly>   
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="number" class="form-control" name="subject" id="subject" placeholder="Mobile Number" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Book Now</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->