<?php
include_once 'header.php';
$_SESSION['username'] = "Admin";

?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>RN Studio</span></h1>
          <h2>We are RN Studio, a photography & design studio that prides itself on high contrast works from all walks of culture, background, and life!</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Services</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Book a Date</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=GlrxcuEDyF8" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
  
  <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Some photos from Our Happy Clients</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">
         
          <?php 
              include_once 'dbconn.php';
              $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC";
              $stmt = mysqli_stmt_init($conn);
              if (!mysqli_stmt_prepare($stmt, $sql)) {
              echo "SQL statement fail";
              } else {
                   mysqli_stmt_execute($stmt);
                   $result = mysqli_stmt_get_result($stmt);


               while ($row = mysqli_fetch_assoc($result)) {
                   echo '<div class="col-lg-3 col-md-4">
                         <div class="gallery-item">
                         <a href="./img_data/gallery/'.$row["imgFullNameGallery"].'" class="gallery-lightbox" data-gall="gallery-item">
                         <div></div>
                         <img src="./img_data/gallery/'.$row["imgFullNameGallery"].'" alt="" class="img-fluid">
                         </a>
                         </div>
                         </div>';

                                }
                          }
         ?>
        </div>

      </div>
    </section><!-- End Gallery Section -->



    </main><!-- End #main -->

    <?php
include_once 'footer.php';
?>