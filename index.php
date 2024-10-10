<?php include('./layouts/header.php') ?>



  <!-- hero-section -->
  <section class="hero-sec sec-space-bottom">
    <div class="container">
      <div class="hero-content-container row">
        <div class="col-md-6">
          <div>
            <h1><strong>Legal Leads That Convert, Marketing That Inspires - </strong></h1>
            <h1><strong>Gavel Guardians Delivers</strong></h1>
          </div>
          <div class="divider-element">
            <div class="devider-inner"></div>
          </div>

          <h3>Regardless of your specialty, we provide
            the leads you're seeking!</h3>

          <div class="row align-items-center custom-padding-top">
            <div class="col-lg-2 col-3">
              <img src="./images/check-img.png" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6 col-9">
              <div class="feature-title">Real-time Connections</div>
              <div class="feature-sub-title">Instantaneous</div>
            </div>
          </div>

          <div class="row align-items-center custom-padding-top">
            <div class="col-lg-2 col-3">
              <img src="./images/check-img.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 col-9">
              <div class="feature-title">Completely Exclusive</div>
              <div class="feature-sub-title">Never Re-Sold</div>
            </div>
          </div>

          <div class="row align-items-center custom-padding-top">
            <div class="col-lg-2 col-3">
              <img src="./images/check-img.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 col-9">
              <div class="feature-title">Assured Excellence</div>
              <div class="feature-sub-title">Thoroughly Authenticated</div>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <form action="./send.php" method="POST" class="hero-frm">
                <h1>Get Leads Now!</h1>
                <p>Try Our 100% Exclusive Live-Transfers Today!</p>

                <div class="mb-3">
                  <label for="fullName" class="form-label">Full Name *</label>
                  <input type="text" class="form-control shadow-none" name="fullName" id="fullName" placeholder="Full Name" required>
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label">Phone *</label>
                  <input type="tel" class="form-control shadow-none" name="phone" id="phone" placeholder="Phone" required>
                </div>
                <input id="leadid_token" name="universal_leadid" type="hidden" value=""/>
                <div class="mb-3">
                  <label for="email" class="form-label">Email *</label>
                  <input type="email" class="form-control shadow-none" name="email" id="email" placeholder="Email" required>
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="privacyPolicy" required>
                  <label class="form-check-label" for="privacyPolicy">
                    I agree to the privacy policy and disclaimer and give my express written consent, affiliates and/or
                    attorneys to contact you at the number provided above, even if this number is a wireless number or
                    if I am presently listed on a Do Not Call list. I understand that I may be contacted by telephone,
                    email, text message or mail regarding case options and that I may be called using automatic dialing
                    equipment. Message and data rates may apply. My consent does not require purchase. This is Legal
                    advertising.
                  </label>
                </div>
                <button type="submit" class="btn btn-primary hero-sec-btn">Submit</button>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- how it work -->
  <section id="how-it-work" class="sec-space-bottom">
    <div class="container">
      <h3>How It Works</h3>
      <h1>Exclusive Lead Transfer Process</h1>
      <p>100% Exclusive Live Transfer Leads</p>

      <div class="card-container custom-margin-top">
        <div class="row g-4">
          <!-- card 1 -->
          <div class="col-lg-3 col-md-4 col-12">
            <div class="card">
              <div class="card-body">
                <div class="text-center icon_150 mb-3">
                  <i class="fa-solid fa-handshake-simple"></i>
                </div>
                <h1 class="mb-3">Inquire</h1>
                <p>
                  We use diverse marketing channels like landing pages, radio, TV, and social media to attract initial
                  inquiries from potential clients.
                </p>
              </div>
            </div>
          </div>

          <!-- card 2 -->
          <div class="col-lg-3 col-md-4 col-12">
            <div class="card">
              <div class="card-body">
                <div class="text-center icon_150 mb-3">
                  <i class="fa-solid fa-handshake-simple"></i>
                </div>
                <h1 class="mb-3">Intake</h1>
                <p>
                  Our trained agents conduct a thorough pre-qualification application based on the
                  lead type.
                </p>
              </div>
            </div>
          </div>

          <!-- card 2 -->
          <div class="col-lg-3 col-md-4 col-12">
            <div class="card">
              <div class="card-body">
                <div class="text-center icon_150 mb-3">
                  <i class="fa-solid fa-handshake-simple"></i>
                </div>
                <h1 class="mb-3">Verify</h1>
                <p>
                  Potential clients are transferred to our in-house quality control to verify all intake form
                  information.
                </p>
              </div>
            </div>
          </div>

          <!-- card 2 -->
          <div class="col-lg-3 col-md-4 col-12">
            <div class="card">
              <div class="card-body">
                <div class="text-center icon_150 mb-3">
                  <i class="fa-solid fa-handshake-simple"></i>
                </div>
                <h1 class="mb-3">Transfer</h1>
                <p>
                  The call is live-transferred to your firm, and the mini-application is sent via email, API, or URL.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Us -->

  <section id="contact-us" class="sec-space-bottom">
    <div class="container">
      <div class="img-container">
        <h1 class="mb-4">Contact Us Today to Acquire Unique Leads!</h1>
        <p class="mb-5">Quality leads are almost within your grasp!</p>
        <button class="custom-btn btn">Enquiry Now</button>
      </div>
    </div>
  </section>

  <!-- Why Choose Us -->
  <section class="sec-space-bottom" id="why-us">
    <div class="container">
      <div class="card">
        <div class="card-body">
          <h1 class="mb-3">Why Choose Us</h1>
          <p class="mb-4">
            At Gavel Guardians, we're not just another legal lead and marketing company, We're
            your strategic partners in achieving legal excellence and business growth.
            Here's why you should choose us:
          </p>

          <div class="row align-items-center custom-padding-top">
            <div class="col-lg-2 col-md-3 col-12 text-center icon_150">
              <i class="fa-solid fa-handshake-simple"></i>
            </div>
            <div class="col-lg-6 col-md-9 col-12">
              <div class="feature-title">Innovative Marketing</div>
              <div class="feature-sub-title">Our creative and data-driven marketing strategies set us apart, helping you
                stand out in a competitive legal landscape</div>
            </div>
          </div>

          <div class="row align-items-center custom-padding-top">
            <div class="col-lg-2 col-md-3 col-12 text-center icon_150">
              <i class="fa-solid fa-handshake-simple"></i>
            </div>
            <div class="col-lg-6 col-md-9 col-12">
              <div class="feature-title">Client-Centric Approach</div>
              <div class="feature-sub-title">Your success is our priority. We work closely with you to understand your
                goals and provide personalized support</div>
            </div>
          </div>

          <div class="row align-items-center custom-padding-top">
            <div class="col-lg-2 col-md-3 col-12 text-center icon_150">
              <i class="fa-solid fa-handshake-simple"></i>
            </div>
            <div class="col-lg-6 col-md-9 col-12">
              <div class="feature-title">Quality Leads</div>
              <div class="feature-sub-title">We specialize in generating high-quality leads that convert, ensuring you
                focus your efforts where they matter most.</div>
            </div>
          </div>

          <div class="row align-items-center custom-padding-top">
            <div class="col-lg-2 col-md-3 col-12 text-center icon_150">
              <i class="fa-solid fa-handshake-simple"></i>
            </div>
            <div class="col-lg-6 col-md-9 col-12">
              <div class="feature-title">Proven Expertise</div>
              <div class="feature-sub-title">With years of experience in the legal industry, we understand the unique
                challenges you face. We leverage this knowledge to deliver tailored solutions.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<?php include('./layouts/footer.php') ?>