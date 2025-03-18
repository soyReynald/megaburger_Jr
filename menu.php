<?php include_once("includes/restricted/header.php"); ?>
    <section class="section section-md bg-default">
      <div class="container">
        <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Our Menu</span></h3>
        <div class="row row-md row-30">            
              <!-- Article to sell -->
            <?php
              $sql = "SELECT * FROM to_menu";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $name_of_item = $row['name_of_item'];
              ?>
              <!-- What We Offer-->
              <div class="col-sm-6 col-lg-4">
                  <div class="oh-desktop">
                    <article class="services-terri wow slideInUp">
                      <div class="services-terri-figure"><a href="burgerDetails.php?item_id=<?= $conn->real_escape_string($row['id_item']); ?>"><img src="./admin_area/<?= $conn->real_escape_string($row['img_product']); ?>" alt="" width="370" height="278"/></a>
                      </div>
                      <div class="services-terri-figure"><h5><?= $conn->real_escape_string($row['name_of_item']); ?></h5></div>
                    </article>
                  </div>
                </div>
                <?php  
                }
                ?>
          </div>
        </div>
      </section>
      <?php
        }
      ?>
      
  <?php include_once("includes/restricted/footer.php"); ?>