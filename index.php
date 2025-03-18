<?php include_once("includes/restricted/header.php"); ?>
  <!-- Swiper-->
  <section class="section swiper-container swiper-slider swiper-slider-2 swiper-slider-3" data-loop="true" data-autoplay="5000" data-simulate-touch="false" data-slide-effect="fade">
      <div class="swiper-wrapper text-sm-left">
        <div class="swiper-slide context-dark" data-slide-bg="images/baconBurger.jpg">
          <div class="swiper-slide-caption section-md">
            <div class="container">
              <div class="row">
                <div class="col-sm-9 col-md-8 col-lg-7 col-xl-7 offset-lg-1 offset-xxl-0">
                  <h1 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInUp" data-caption-delay="0">Perfect Burgers</span></h1>
                  <p class="big swiper-text" data-caption-animate="fadeInLeft" data-caption-delay="300">Experience the taste of a perfect Burger at MegaBurger, one of the best restaurants!</p><a class="button button-lg button-primary button-winona button-shadow-2" href="#" data-caption-animate="fadeInUp" data-caption-delay="300">View our menu</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide context-dark" data-slide-bg="images/ingredientesFrescos.jpg">
          <div class="swiper-slide-caption section-md">
            <div class="container">
              <div class="row">
                <div class="col-sm-8 col-lg-7 offset-lg-1 offset-xxl-0">
                  <h1 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInDown" data-caption-delay="0">Quality ingredients</span></h1>
                  <p class="big swiper-text" data-caption-animate="fadeInRight" data-caption-delay="300">We use only the best ingredients to make one-of-a-kind burgers for our customers.</p>
                  <div class="button-wrap oh"><a class="button button-lg button-primary button-winona button-shadow-2" href="#" data-caption-animate="slideInUp" data-caption-delay="0">View our menu</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Swiper Pagination-->
      <div class="swiper-pagination" data-bullet-custom="true"></div>
      <!-- Swiper Navigation-->
      <div class="swiper-button-prev">
        <div class="preview">
          <div class="preview__img"></div>
        </div>
        <div class="swiper-button-arrow"></div>
      </div>
      <div class="swiper-button-next">
        <div class="swiper-button-arrow"></div>
        <div class="preview">
          <div class="preview__img"></div>
        </div>
      </div>
    </section>

      <!-- What We Offer-->
      <section class="section section-md bg-default">
        <div class="container">
          <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Our Menu</span></h3>
          <div class="row row-md row-30">
          
                <!-- Services Terri-->
                <?php
                  // Fix here, was not actually updated
                  $sql = "SELECT * FROM to_menu";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                    // output data of each row
                      while($row = $result->fetch_assoc()):
                  ?>
                  <div class="col-sm-6 col-lg-4">
                    <div class="oh-desktop">
                      <article class="services-terri wow slideInUp">
                        <div class="services-terri-figure"><a href="/megaburguer/burgerDetails.php?item_id=<?= $row['id_item']; ?>"><img src="./admin_area/<?= $row['img_product']; ?>" alt="" width="370" height="278"/></a>
                        </div>
                        <div class="services-terri-figure"><h5><?= $row['name_of_item'] ?></h5></div>
                      </article>
                    </div>
                  </div>
                  <?php
                      endwhile;
                    } 
                  ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Special selection -->
      <section class="section section-lg bg-default">
        <div class="container">
          <h3 class="oh-desktop"><span class="d-inline-block wow slideInUp">Selected Burgers</span></h3>
          <div class="row row-lg row-30">
            <?php 
            // Fix here, was not actually updated
            $sql = "SELECT * FROM to_menu LIMIT 4";
            $result = $conn->query($sql);     
            if ($result->num_rows > 0) {
              // output data of each row
              while($row2 = $result->fetch_assoc()):

            ?>
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <!-- Product-->
              <article class="product wow fadeInLeft" data-wow-delay=".15s">
                <div class="product-figure"><img src="./<?= $row2['img_product']; ?>" alt="" width="161" height="162"/>
                </div>
                <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star text-gray-13"></span>
                </div>
                <h6 class="product-title"><?= $row2['name_of_item']; ?></h6>
                <div class="product-price-wrap">
                  <div class="product-price">$ <?= $row2['price']; ?></div>
                </div>
                <div class="product-button">
                  <div class="button-wrap"><a class="button button-xs button-primary button-winona" href="#">Add to cart</a></div>
                  <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="/megaburguer/burgerDetails.php?item_id=<?= $row2['id_item']; ?>">View Product</a></div>
                </div>
              </article>
            </div>  
            <?php
              endwhile;
            }
            ?>
          </div>
        </div>
      </section>

      <!-- What People Say ***** -->
       <!-- Our Team-->
       <section class="section section-lg section-bottom-md-70 bg-default">
        <div class="container">
          <h3 class="oh"><span class="d-inline-block wow slideInUp" data-wow-delay="0s">our team</span></h3>
          <div class="row row-lg row-40 justify-content-center">
            <div class="col-sm-6 col-lg-3 wow fadeInLeft" data-wow-delay=".2s" data-wow-duration="1s">
              <!-- Team Modern-->
              <article class="team-modern"><a class="team-modern-figure" href="#"><img src="images/team-01-270x236.jpg" alt="" width="270" height="236"/></a>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="#">Robert Powell</a></h6>
                  <div class="team-modern-status">Head Chef</div>
                  <ul class="list-inline team-modern-social-list">
                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                    <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                    <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                  </ul>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeInLeft" data-wow-delay="0s" data-wow-duration="1s">
              <!-- Team Modern-->
              <article class="team-modern"><a class="team-modern-figure" href="#"><img src="images/team-02-270x236.jpg" alt="" width="270" height="236"/></a>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="#">Amelia Liang</a></h6>
                  <div class="team-modern-status">Manager</div>
                  <ul class="list-inline team-modern-social-list">
                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                    <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                    <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                  </ul>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeInRight" data-wow-delay=".1s" data-wow-duration="1s">
              <!-- Team Modern-->
              <article class="team-modern"><a class="team-modern-figure" href="#">
                <!-- <img src="images/team-03-270x236.jpg" alt="" width="270" height="236"/> -->
              </a>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="#">Max Cutnicky</a></h6>
                  <div class="team-modern-status">Head Baker</div>
                  <ul class="list-inline team-modern-social-list">
                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                    <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                    <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                  </ul>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeInRight" data-wow-delay=".3s" data-wow-duration="1s">
              <!-- Team Modern-->
              <article class="team-modern"><a class="team-modern-figure" href="#"><img src="images/team-04-270x236.jpg" alt="" width="270" height="236"/></a>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="#">Reyo Ramirez</a></h6>
                  <div class="team-modern-status">Pizza Chef</div>
                  <ul class="list-inline team-modern-social-list">
                    <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                    <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                    <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                  </ul>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- Ask for an order -->
      <section class="section section-sm section-first bg-default section_for_asking_a_service">
        <div class="container">
          <h3 class="heading-3">Book your Table</h3>
          <form class="rd-form rd-mailform form-style-1" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
            <div class="row row-20 gutters-20">
              <div class="col-md-6 col-lg-4 oh-desktop">
                <div class="form-wrap wow slideInDown">
                  <input class="form-input" id="contact-your-name-6" type="text" name="name" data-constraints="@Required">
                  <label class="form-label" for="contact-your-name-6">Your Name*</label>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 oh-desktop">
                <div class="form-wrap wow slideInUp">
                  <input class="form-input" id="contact-email-6" type="email" name="email" data-constraints="@Email @Required">
                  <label class="form-label" for="contact-email-6">Your E-mail*</label>
                </div>
              </div>
              <div class="col-lg-4 oh-desktop">
                <div class="form-wrap wow slideInDown">
                  <!--Select 2-->
                  <select class="form-input" data-minimum-results-for-search="Infinity" data-constraints="@Required">
                    <option value="1">Select a Service</option>
                    <option value="2">Dine-In</option>
                    <option value="3">Carry-Out</option>
                    <option value="4">Event Catering</option>
                  </select>
                </div>
              </div>
              <div class="col-12">
                <div class="form-wrap wow fadeIn">
                  <label class="form-label" for="contact-message-6">Message</label>
                  <textarea class="form-input textarea-lg" id="contact-message-6" name="message" data-constraints="@Required"></textarea>
                </div>
              </div>
            </div>
            <div class="group-custom-1 group-middle oh-desktop">
              <button class="button button-lg button-primary darker wow fadeInRight" type="submit">Ask Order</button>
              <!-- Quote Classic-->
              <article class="quote-classic quote-classic-3 wow slideInDown">
                <div class="quote-classic-text">
                  <p class="q">Please reserve your table at least 1 day in advance.</p>
                </div>
              </article>
            </div>
          </form>
        </div>
      </section>

      <!-- Section Services  Last section-->
      <section class="section section-sm bg-default">
        <div class="container">
          <div class="owl-carousel owl-style-11 dots-style-2" data-items="1" data-sm-items="1" data-lg-items="2" data-xl-items="4" data-margin="30" data-dots="true" data-mouse-drag="true" data-rtl="true">
            <article class="box-icon-megan wow fadeInUp">
              <div class="box-icon-megan-header">
                <div class="box-icon-megan-icon linearicons-bag"></div>
              </div>
              <h5 class="box-icon-megan-title"><a href="#">Free Delivery</a></h5>
              <p class="box-icon-megan-text">If you order more than 3 pizzas, we will gladly deliver them to you for free.</p>
            </article>
            <article class="box-icon-megan wow fadeInUp" data-wow-delay=".05s">
              <div class="box-icon-megan-header">
                <div class="box-icon-megan-icon linearicons-map2"></div>
              </div>
              <h5 class="box-icon-megan-title"><a href="#">Convenient Location</a></h5>
              <p class="box-icon-megan-text">Our pizzeria is situated in the downtown and is very easy to reach even on weekends.</p>
            </article>
            <article class="box-icon-megan wow fadeInUp" data-wow-delay=".1s">
              <div class="box-icon-megan-header">
                <div class="box-icon-megan-icon linearicons-radar"></div>
              </div>
              <h5 class="box-icon-megan-title"><a href="#">Free Wi-Fi</a></h5>
              <p class="box-icon-megan-text">We have free Wi-Fi available to all clients and visitors of our pizzeria.</p>
            </article>
            <article class="box-icon-megan wow fadeInUp" data-wow-delay=".15s">
              <div class="box-icon-megan-header">
                <div class="box-icon-megan-icon linearicons-thumbs-up"></div>
              </div>
              <h5 class="box-icon-megan-title"><a href="#">Best Service</a></h5>
              <p class="box-icon-megan-text">The client is our #1 priority as we deliver top-notch customer service.</p>
            </article>
          </div>
        </div>
      </section>
<?php include_once("includes/restricted/footer.php"); ?>