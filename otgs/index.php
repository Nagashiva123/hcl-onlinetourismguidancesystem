<?php
include("database.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Tourism Management System</title>

  <link rel="stylesheet" href="./assets/css/style.css">

 
</head>

<body id="top">

  <header class="header" data-header>

    <div class="overlay" data-overlay></div>

    <div class="header-top">
      <div class="container">

        <a href="tel:+918520891070 class="helpline-box">

          <div class="icon-box">
            <ion-icon name="call-outline"></ion-icon>
          </div>

          <div class="wrapper">
            <p class="helpline-title">For Queries :</p>

            <p class="helpline-number">nagashivarayini@gmail.com</p>
          </div>

        </a>

        

        <div class="header-btn-group">

          

          <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
            
          </button>
         
        
          <a href=login.php class="login"><h1>LOG IN</h1></a>
         

        </div>

      </div>
    </div>

    <div class="header-bottom">
      <div class="container">

        <ul class="social-list">

          <li>
            <a href="https://www.facebook.com/nagashiva.rayini" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>


        </ul>

        <nav class="navbar" data-navbar>

          <div class="navbar-top">

            <a href="#" class="logo">
              <img src="./assets/images/logo-blue.svg" alt="aeroplane logo">
            </a>

            <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </div>

          <ul class="navbar-list">

            <li>
              <a href="#home" class="navbar-link" data-nav-link>Home</a>
            </li>

            <li>
              <a href="#aboutus" class="navbar-link" data-nav-link>About us</a>
            </li>

            <li>
              <a href="#destination" class="navbar-link" data-nav-link>Destination</a>
            </li>

            <li>
              <a href="#package" class="navbar-link" data-nav-link>Packages</a>
            </li>

            <li>
              <a href="#gallery" class="navbar-link" data-nav-link>Gallery</a>
            </li>

            <li>
              <a href="#contact" class="navbar-link" data-nav-link>Contact us</a>
            </li>

          </ul>

        </nav>

        <button class="btn btn-primary">Reserve Your Ticket</button>

      </div>
    </div>

  </header>
  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home">
        <div class="container">

          <h2 class="h1 hero-title">Take only pictures, leave only footprints</h2>

          <p class="hero-text">
            Between vacations, many daydream about what adventures the next trip holds. You can spend your days switching back and forth from looking at your favorite travel photos to trying to go about your day to day life. But a few friendly reminders that the next adventure is closer than you think can help you put your wanderlust to rest. And one of the best distractions comes with this list of travel quotes. 
          </p>

          <div class="btn-group">
            <button class="btn btn-primary">Learn more</button>

            <button class="btn btn-secondary">Book now</button>
          </div>

        </div>
      </section>





      <section class="tour-search">
  <div class="container">
    <form action="index.php" method="post" class="tour-search-form">
      <div class="input-wrapper">
        <label for="name" class="input-label">Name</label>
        <input type="text" name="name" id="name" required placeholder="Enter Your Name" class="input-field">
      </div>
      <div class="input-wrapper">
        <label for="destination" class="input-label">Destination</label>
        <input type="text" name="destination" id="destination" required placeholder="Enter Your Destination" class="input-field">
      </div>
      <div class="input-wrapper">
        <label for="email" class="input-label">Email</label>
        <input type="email" name="email" id="email" required placeholder="Enter Your Email" class="input-field">
      </div>
      <div class="input-wrapper">
        <label for="phone" class="input-label">Phone Number</label>
        <input type="text" name="phone" id="phone" required placeholder="Enter Your Phone Number" class="input-field">
      </div>
      <div class="input-wrapper">
        <label for="source" class="input-label">Source</label>
        <input type="text" name="source" id="source" required placeholder="Enter Your Source" class="input-field">
      </div>
      <div class="input-wrapper">
        <label for="checkin" class="input-label">Arrival Date</label>
        <input type="date" name="checkin" id="checkin" required class="input-field">
      </div>
      <div class="input-wrapper">
        <label for="checkout" class="input-label">Departure Date</label>
        <input type="date" name="checkout" id="checkout" required class="input-field">
      </div>
      <button type="submit" name="submit" class="btn btn-secondary">Get Your Tour Details</button>
    </form>
  </div>
</section>

<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $destination = $_POST['destination'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $source = $_POST['source'];
    $arrival_date = $_POST['checkin'];
    $departure_date = $_POST['checkout'];

    // Assuming $conn is your database connection
    $sql = "INSERT INTO hello (name, destination, email, phone, source, checkin, checkout) VALUES ('$name', '$destination', '$email', '$phone', '$source', '$arrival_date', '$departure_date')";
    
    if(mysqli_query($conn, $sql)) {
        echo "Your Details submitted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>



      <!-- 
        - #POPULAR
      -->

      <section class="popular" id="destination">
        <div class="container">



          <h2 class="h2 section-title">Beautiful Places to Visit</h2>

          <p class="section-text">
            You can create a wonderful world around you and make it beautiful.
            There is so much in this world that you have yet to explore.
            Beautiful sunrise and sunset views are a divine luxury .
            Not everyone searches for beauty - some create their own.
            Do your best to find beauty in the worst of situations.
          </p>

          <ul class="popular-list">

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/tajmahal.webp" alt="hello" loading="lazy">
                </figure>

                
                  <p class="card-subtitle">
                    <a href="#">India</a>
                  </p>
                  <div class="card-content">

                    

                  <h3 class="h3 card-title">
                    <a href="#">TajMahal</a>
                  </h3>

                  <p class="card-text">
                    The Taj Mahal is an ivory-white marble mausoleum on the south bank of the Yamuna river in the Indian city of Agra.
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="Temple.jpg" alt="temple" loading="lazy">
                </figure>

                <div class="card-content">               

                  <h3 class="h3 card-title">
                    <a href="#">Varnasi</a>
                  </h3>

                  <p class="card-text">
                    Varanasi, also known as Benaras, Kashi, or Banaras, is one of the world's oldest cities. It's located in the northern Indian state of Uttar Pradesh, on the banks of the Ganges River.
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/popular-3.jpg" alt="Kyoto temple, japan" loading="lazy">
                </figure>

                <div class="card-content">

                  

                  <p class="card-subtitle">
                    <a href="#">Japan</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="#">Kyoto temple</a>
                  </h3>

                  <p class="card-text">
                    Beautiful place to visit where u can find peace
                  </p>

                </div>

              </div>
            </li>

          </ul>

          <button class="btn btn-primary" style="background-color: orange;""><a href="login.php">Visit More Places</a></button>

        </div>
      </section>





      <!-- 
        - #PACKAGE
      -->

      <section class="package" id="package">
        <div class="container">

          <p class="section-subtitle">Popular Packeges</p>

          <h2 class="h2 section-title">Checkout Our Packeges</h2>

          <p class="section-text">
           DIFFERENT PACKAGES ACROSS THE WORLD
          </p>

          <ul class="package-list">

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="./assets/images/packege-1.jpg" alt="Experience The Great Holiday On Beach" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Experience The Great Holiday On Beach</h3>

                  <p class="card-text">
                    India has many beaches that are good for holidays, including beaches with water sports, beaches with calm vibes, and beaches with nightlife
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">7D/6N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">pax: 10</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">Malaysia</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(25 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    7500₹
                    <span>/ per person</span>
                  </p>
                  <button class="btn btn-secondary" id="booknow1">Book Now</button>
                  
                  
                </div>

              </div>
            </li>

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="./assets/images/packege-2.jpg" alt="Summer Holiday To The Oxolotan River" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Summer Holiday To The Oxolotan River</h3>

                  <p class="card-text">
                    The Summer Holiday to the Oxolotan River is a tour package offered by Sylwia Travel Peru. The tour includes trekking to the base camp of a mountain, and also visits to a rural village and the Oxolotan River. 

                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">7D/6N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">pax: 10</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">Malaysia</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(20 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    5000₹
                    <span>/ per person</span>
                  </p>

                  <button class="btn btn-secondary" id="booknow2">Book Now</button>


                </div>

              </div>
            </li>

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="./assets/images/packege-3.jpg" alt="Santorini Island's Weekend Vacation" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Santorini Island's Weekend Vacation</h3>

                  <p class="card-text">
                    Santorini, Greece has many weekend vacation options, including archaeological sites, beaches, and wineries.
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">7D/6N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">pax: 10</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">Malaysia</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(40 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    6500₹
                    <span>/ per person</span>
                  </p>

                  <button class="btn btn-secondary" id="booknow3">Book Now</button>
                  


                </div>

              </div>
            </li>

          </ul>
          

          <button class="btn btn-primary" style="background-color:orange;"><a href="login.php">View All Packages</a></button>
          

        </div>
      </section>
      <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Get all Book Now buttons by their unique IDs
      const bookNowBtn1 = document.getElementById('booknow1');
      const bookNowBtn2 = document.getElementById('booknow2');
      const bookNowBtn3 = document.getElementById('booknow3');

      // Add click event listeners to each button
      bookNowBtn1.addEventListener('click', function() {
        window.location.href = 'login.php';
      });

      bookNowBtn2.addEventListener('click', function() {
        window.location.href = 'login.php';
      });

      bookNowBtn3.addEventListener('click', function() {
        window.location.href = 'login.php';
      });
    });
  </script>
          



      <!-- 
        - #GALLERY
      -->

      <section class="gallery" id="gallery">
        <div class="container">

          <p class="section-subtitle">Photo Gallery</p>

          <h2 class="h2 section-title">Photo's From Travellers</h2>

          <p class="section-text">
            "Travel is the only thing you buy that makes you richer"

          </p>

          <ul class="gallery-list">

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/gallery-1.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/gallery-2.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/gallery-3.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/gallery-4.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/gallery-5.jpg" alt="Gallery image">
              </figure>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #CTA
      -->

      <section class="cta" id="contact">
        <div class="container">

          <div class="cta-content">
            <p class="section-subtitle">Call To Action</p>

            <h2 class="h2 section-title">Ready For Unforgatable Travel. Remember Us!</h2>

            <p class="section-text">
              "Travel is the only thing you buy that makes you richer"
              "The journey is the reward"
            </p>
          </div>

          <button class="btn btn-secondary">Contact Us !</button>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
           
          </a>

          <p class="footer-text">
            "Travel is the only thing you buy that makes you richer"
"The journey is the reward"
"You'll always get more money, but you'll never get more time"
          </p>

        </div>

        <div class="footer-contact">

          <h4 class="contact-title">Contact Us</h4>

          <p class="contact-text">
            Feel free to contact and reach us !!
          </p>

          <ul>

            <li class="contact-item">
              <ion-icon name="call-outline"></ion-icon>

              <a href="tel:+01123456790" class="contact-link">+91 6303757335</a>
            </li>

            <li class="contact-item">
              <ion-icon name="mail-outline"></ion-icon>

              <a href="https://mail.google.com/mail/" class="contact-link">nagashivarayini@gmail.com</a>
            </li>

            <li class="contact-item">
              <ion-icon name="location-outline"></ion-icon>

              <address>INDIA</address>
            </li>

          </ul>

        </div>

        <div class="footer-form">

          <p class="form-text">
            Subscribe !!
          </p>

          <form action="" class="form-wrapper">
            <input type="email" name="email" class="input-field" placeholder="Enter Your Email" required>

            <button type="submit" class="btn btn-secondary">Subscribe</button>
          </form>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2024 <a href="">Nagashiva</a>. All rights reserved
        </p>

        <ul class="footer-bottom-list">

          <li>
            <a href="#" class="footer-bottom-link">Privacy Policy</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link">Term & Condition</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link">FAQ</a>
          </li>

        </ul>

      </div>
    </div>

  </footer>





  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>