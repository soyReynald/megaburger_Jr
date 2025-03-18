<?php include_once("includes/restricted/header.php"); ?>
      <!-- What We Offer-->
      <?php
        if (isset($_GET['item_id'])) {
          $ID_item = $conn->real_escape_string($_GET['item_id']);
          $sql = "SELECT name_of_item, img_product FROM to_menu WHERE id_item = '{$ID_item}'";
          $result = $conn->query($sql);
  
          $imageUrl = "";
          if ($result->num_rows > 0) {
            // output data of each row
              while($row = $result->fetch_assoc()) {
                $titleOfItem = $row['name_of_item'];
                $imageUrl = $row['img_product'];
              }
          }
        } else {
          header("Location: /index.php?item=not_found");
        }
        ?>
      <section class="section section-md bg-default">
        <div class="container">
          <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown"><?= $conn->real_escape_string($titleOfItem) ?></span></h3>
          <div class="row row-md row-30">
            <div class="col-sm-6 col-lg-4">
              <div class="oh-desktop">
                <!-- Services Terri-->
                <article>
                  <div><img src="<?= "./admin_area/{$imageUrl} ?>" alt="" width="370" height="278"/></div>
                </article>
              </div>
            </div>
            <div class="col-sm-6 col-lg-6">
                <div class="oh-desktop">
                  <!-- Services Terri-->
                  <article style="padding-left: 20px;">
                    <h6 style="text-align: start;">Descripcion</h6>
                    <p style="text-align: start;">
                    <?php
                      $ID_item = $conn->real_escape_string($_GET['item_id']);
                      $sql = "SELECT description_of_item, ingredients FROM to_menu WHERE id_item = '{$ID_item}'";
                      $result = $conn->query($sql);

                      if ($result->num_rows > 0) {
                        // output data of each row
                          while($row = $result->fetch_assoc()) {
                            echo $row['description_of_item'];
                          }
                      }
                    ?>
                    </p>
                    <h6 style="padding-top: 25px; text-align: start;">Ingredientes</h7>
                    <p>
                      <?php
                        $ID_item = $conn->real_escape_string($_GET['item_id']);
                        $sql = "SELECT ingredients FROM to_menu WHERE id_item = '{$ID_item}'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                          // output data of each row
                            while($row = $result->fetch_assoc()) {
                              echo $row['ingredients'];
                            }
                        }
                      ?>
                      </p>
                  </article>
                </div>
              </div>
          </div>
        </div>
      </section>

      <!-- Page Footer-->
      <footer class="section footer-modern context-dark footer-modern-2">
        <div class="footer-modern-line">
          <div class="container">
            <div class="row row-50">
              <div class="col-md-6 col-lg-4">
                <h5 class="footer-modern-title oh-desktop"><span class="d-inline-block wow slideInLeft">What We Offer</span></h5>
                <ul class="footer-modern-list d-inline-block d-sm-block wow fadeInUp">
                  <li><a href="#">Pizzas</a></li>
                  <li><a href="#">Burgers</a></li>
                  <li><a href="#">Salads</a></li>
                  <li><a href="#">Drinks</a></li>
                  <li><a href="#">Seafood</a></li>
                  <li><a href="#">Drinks</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4 col-xl-3">
                <h5 class="footer-modern-title oh-desktop"><span class="d-inline-block wow slideInLeft">Information</span></h5>
                <ul class="footer-modern-list d-inline-block d-sm-block wow fadeInUp">
                  <li><a href="about-us.php">About us</a></li>
                  <li><a href="#">Latest News</a></li>
                  <li><a href="#">Our Menu</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Shop</a></li>
                  <li><a href="contacts.php">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-4 col-xl-5">
                <h5 class="footer-modern-title oh-desktop"><span class="d-inline-block wow slideInLeft">Newsletter</span></h5>
                <p class="wow fadeInRight">Sign up today for the latest news and updates.</p>
                <!-- RD Mailform-->
                <form class="rd-form rd-mailform rd-form-inline rd-form-inline-sm oh-desktop" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                  <div class="form-wrap wow slideInUp">
                    <input class="form-input" id="subscribe-form-2-email" type="email" name="email" data-constraints="@Email @Required"/>
                    <label class="form-label" for="subscribe-form-2-email">Enter your E-mail</label>
                  </div>
                  <div class="form-button form-button-2 wow slideInRight">
                    <button class="button button-sm button-icon-3 button-primary button-winona" type="submit"><span class="d-none d-xl-inline-block">Subscribe</span><span class="icon mdi mdi-telegram d-xl-none"></span></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-modern-line-2">
          <div class="container">
            <div class="row row-30 align-items-center">
              <div class="col-sm-6 col-md-7 col-lg-4 col-xl-4">
                <div class="row row-30 align-items-center text-lg-center">
                  <div class="col-md-7 col-xl-6"><a class="brand" href="index.php"><img src="images/logo-inverse-198x66.png" alt="" width="198" height="66"/></a></div>
                  <div class="col-md-5 col-xl-6">
                    <div class="iso-1"><span><img src="images/like-icon-58x25.png" alt="" width="58" height="25"/></span><span class="iso-1-big">9.4k</span></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-12 col-lg-8 col-xl-8 oh-desktop">
                <div class="group-xmd group-sm-justify">
                  <div class="footer-modern-contacts wow slideInUp">
                    <div class="unit unit-spacing-sm align-items-center">
                      <div class="unit-left"><span class="icon icon-24 mdi mdi-phone"></span></div>
                      <div class="unit-body"><a class="phone" href="tel:#">+1 718-999-3939</a></div>
                    </div>
                  </div>
                  <div class="footer-modern-contacts wow slideInDown">
                    <div class="unit unit-spacing-sm align-items-center">
                      <div class="unit-left"><span class="icon mdi mdi-email"></span></div>
                      <div class="unit-body"><a class="mail" href="mailto:#">info@demolink.org</a></div>
                    </div>
                  </div>
                  <div class="wow slideInRight">
                    <ul class="list-inline footer-social-list footer-social-list-2 footer-social-list-3">
                      <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                      <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                      <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                      <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-modern-line-3">
          <div class="container">
            <div class="row row-10 justify-content-between">
              <div class="col-md-6"><span>514 S. Magnolia St. Orlando, FL 32806</span></div>
              <div class="col-md-auto">
                <!-- Rights-->
                <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span></span><span>.&nbsp;</span><span>All Rights Reserved.</span></p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!-- coded by Himic-->
  </body>
</html>