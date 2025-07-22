<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

          <title>Xforce</title>
        
          <!-- 
            - favicon
          -->
          <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
        
          <!-- 
            - custom css link
          -->
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
          <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

          <!-- 
            - google font link
          -->
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link
            href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap"
            rel="stylesheet">

            <style>
              /* Style for the image container */
              .image-container {
                  display: flex;
                  justify-content: center;
                  align-items: center;
                  height: 100vh;
              }
          </style>

        </head>
        
        <body>
        
          <!-- 
            - #HEADER
          -->
        
          <header class="header" data-header>
        
            <div class="overlay" data-overlay></div>
        
            <div class="header-top">
              <div class="container">
        
                <ul class="header-top-list">
        
                  <li>
                    <div class="header-top-link">
                        <ion-icon name="call-outline"></ion-icon>
        
                      <span>+01000000000</span>
                    </div>
                  </li>
        
                  <li>
                    <div  class="header-top-link">
                      <ion-icon name="location-outline"></ion-icon>
        
                      <span>15/A, Nest Tower, NYC</span>
                    </div>
                  </li>
        
                </ul>
        
                <div class="wrapper">
                  <ul class="header-top-social-list">
        
                    <li>
                      <a href="#" class="header-top-social-link">
                        <ion-icon name="logo-facebook"></ion-icon>
                      </a>
                    </li>
        
                    <li>
                      <a href="#" class="header-top-social-link">
                        <ion-icon name="logo-twitter"></ion-icon>
                      </a>
                    </li>
        
                    <li>
                      <a href="#" class="header-top-social-link">
                        <ion-icon name="logo-instagram"></ion-icon>
                      </a>
                    </li>
        
                    <li>
                      <a href="#" class="header-top-social-link">
                        <ion-icon name="logo-pinterest"></ion-icon>
                      </a>
                    </li>
        
                  </ul>
        
                 
                </div>
        
              </div>
            </div>
        
            <div class="header-bottom">
              <div class="container">
        
                <a href="#" class="logo">
                  <img src="./assets/images/logo.png" alt="Xforce logo">
                </a>
        
                <nav class="navbar" data-navbar>
        
                  <div class="navbar-top">
        
                    <a href="#" class="logo">
                      <img src="./assets/images/logo.png" alt="Xforce logo">
                    </a>
        
                    <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
                      <ion-icon name="close-outline"></ion-icon>
                    </button>
        
                  </div>
        
                  <div class="navbar-bottom">
                    <ul class="navbar-list">
        
                      <li>
                        <a href="#home" class="navbar-link" data-nav-link>Home</a>
                      </li>
        
                      <li>
                        <a href="#about" class="navbar-link" data-nav-link>About</a>
                      </li>
        
                      <li>
                        <a href="#service" class="navbar-link" data-nav-link>Service</a>
                      </li>
        
                      <li>
                        <a href="#property" class="navbar-link" data-nav-link>Projects</a>
                      </li>
        
                      <li>
                        <a href="#contact" class="navbar-link" data-nav-link>Contact</a>
                      </li>
        
                    </ul>
                  </div>
        
                </nav>
        
                <div class="header-bottom-actions">
        
                
                  <button class="header-bottom-actions-btn" data-nav-open-btn aria-label="Open Menu">
                    <ion-icon name="menu-outline"></ion-icon>
        
                    <span>Menu</span>
                  </button>
        
                </div>
        
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
        
                  <div class="hero-content">
        
                    <p class="hero-subtitle">
                      <ion-icon name="home"></ion-icon>
        
                      <span>Design Agency</span>
                    </p>
        
                    <h2 class="h1 hero-title">Find Your Dream House By Us</h2>
        
                    <p class="hero-text">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
                    </p>
        
                    <button class="btn">Make An Enquiry</button>
        
                  </div>
        
                  <figure class="hero-banner">
                    <img src="./assets/images/hero-banner.png" alt="Modern house model" class="w-100">
                  </figure>
        
                </div>
              </section>
        
        
        
        
        
              <!-- 
                - #ABOUT
              -->
        
              <section class="about" id="about">
                <div class="container">
        
                  <figure class="about-banner">
                    <img src="./assets/images/about-banner-1.png" alt="House interior">
        
                    <img src="./assets/images/about-banner-2.jpg" alt="House interior" class="abs-img">
                  </figure>
        
                  <div class="about-content">
        
                    <p class="section-subtitle">About Us</p>
        
                    <h2 class="h2 section-title">The Leading Design Rental Marketplace.</h2>
        
                    <p class="about-text">
                      Over 39,000 people work for us in more than 70 countries all over the This breadth of global coverage,
                      combined with
                      specialist services
                    </p>
        
                    <ul class="about-list">
        
                      <li class="about-item">
                        <div class="about-item-icon">
                          <ion-icon name="home-outline"></ion-icon>
                        </div>
        
                        <p class="about-item-text">Smart Home Design</p>
                      </li>
        
                      <li class="about-item">
                        <div class="about-item-icon">
                          <ion-icon name="leaf-outline"></ion-icon>
                        </div>
        
                        <p class="about-item-text">Beautiful Scene Around</p>
                      </li>
        
                      <li class="about-item">
                        <div class="about-item-icon">
                          <ion-icon name="wine-outline"></ion-icon>
                        </div>
        
                        <p class="about-item-text">Exceptional Lifestyle</p>
                      </li>
        
                      <li class="about-item">
                        <div class="about-item-icon">
                          <ion-icon name="shield-checkmark-outline"></ion-icon>
                        </div>
        
                        <p class="about-item-text">Complete 24/7 Security</p>
                      </li>
        
                    </ul>
        
                    <p class="callout">
                      "Enimad minim veniam quis nostrud exercitation
                      llamco laboris. Lorem ipsum dolor sit amet"
                    </p>
        
                   
        
                  </div>
        
                </div>
              </section>
        
        
              <!-- 
                - #PROPERTY
              -->
        
            
              @if ($items->count() > 0)
              
              <section class="property" id="property">
                <div class="container">
        
                  <p class="section-subtitle">Projects</p>
        
                  <h2 class="h2 section-title">Our Project</h2>
                  <div class="row">
                      <ul class="property-list has-scrollbar">
            
                        @foreach ($items as $item)
                        @php
                            
                            $images = "[";
                        @endphp
                        @foreach ($item->media as $image)
                            @php
                              $images .="'". $image->photo."',";
                            @endphp
                        @endforeach
                        @php
                          $images = trim($images,",");
                          $images .= "]";
                        @endphp
                        <li class="col item"  data-toggle="modal" data-target="#imageModal" data-images='{{$images}}'>
                          <div class="property-card">
            
                            <figure class="card-banner">
            
                              <a >
                                <img src="{{URL::asset($item->photo)}}" alt="New Apartment Nice View" class="w-100" >
                              </a>
            
                              
            
                              <div class="banner-actions">
            
                                {{-- <button class="banner-actions-btn">
                                  <ion-icon name="location"></ion-icon>
            
                                  <address></address>
                                </button> --}}
            
                                <button class="banner-actions-btn">
                                  <ion-icon name="camera"></ion-icon>
            
                                  <span>4</span>
                                </button>
            
                                {{-- <button class="banner-actions-btn">
                                  <ion-icon name="film"></ion-icon>
            
                                  <span></span>
                                </button> --}}
            
                              </div>
            
                            </figure>
            
                            <div class="card-content">
            
                              {{-- <div class="card-price">
                                <strong></strong>
                              </div> --}}
            
                              <h3 class="h3 card-title">
                                <a >{{$item->name}}</a>
                              </h3>
            
                              <p class="card-text">
                                {{$item->description}}
                              </p>
            
                            
            
                            </div>
            
                          
            
                          </div>
                        </li>
                            
                        @endforeach
            
                      
            
                      </ul>
                  </div>
                </div>
              </section> 
              @else
                  
              @endif    
            
            <!-- Modal Popup -->
            <div class = "image-view"></div>
        
            <div class = "image-box">
                <div id = "prev-btn"></div>
                <div id = "next-btn"></div>
            </div>
        
        
        
        
        
              <!-- 
                - #SERVICE
              -->
        
              <section class="service" id="service">
                <div class="container">
        
                  <p class="section-subtitle">Our Services</p>
        
                  <h2 class="h2 section-title">Our Main Focus</h2>
        
                  <ul class="service-list">
        
                    <li>
                      <div class="service-card">
        
                        <div class="card-icon">
                          <img src="./assets/images/service-1.png" alt="Service icon">
                        </div>
        
                        <h3 class="h3 card-title">
                          <a href="#">Design home</a>
                        </h3>
        
                        <p class="card-text">
                          over 1 million+ homes for sale available on the website, we can match you with a house you will want
                          to call home.
                        </p>
        
                        <a href="#" class="card-link">
                          <span>Find A Home</span>
        
                          <ion-icon name="arrow-forward-outline"></ion-icon>
                        </a>
        
                      </div>
                    </li>
        
                    <li>
                      <div class="service-card">
        
                        <div class="card-icon">
                          <img src="./assets/images/service-2.png" alt="Service icon">
                        </div>
        
                        <h3 class="h3 card-title">
                          <a >Find your purpose</a>
                        </h3>
        
                        <p class="card-text">
                          over 1 million+ homes for sale available on the website, we can match you with a house you will want
                          to call home.
                        </p>
        
                        <a href="#" class="card-link">
                          <span>Find A Home</span>
        
                          <ion-icon name="arrow-forward-outline"></ion-icon>
                        </a>
        
                      </div>
                    </li>
        
                    <li>
                      <div class="service-card">
        
                        <div class="card-icon">
                          <img src="./assets/images/service-3.png" alt="Service icon">
                        </div>
        
                        <h3 class="h3 card-title">
                          <a href="#">Design</a>
                        </h3>
        
                        <p class="card-text">
                          over 1 million+ homes for sale available on the website, we can match you with a house you will want
                          to call home.
                        </p>
        
                        <a href="#" class="card-link">
                          <span>Find A Home</span>
        
                          <ion-icon name="arrow-forward-outline"></ion-icon>
                        </a>
        
                      </div>
                    </li>
        
                  </ul>
        
                </div>
              </section>
        
        
        
            </article>
          </main>
        
        
        
        
        
          <!-- 
            - #FOOTER
          -->
        
          <footer id="contact" class="footer">
        
            <div class="footer-top">
              <div class="container">
        
                <div class="footer-brand">
        
                  <a href="#" class="logo">
                    <img src="./assets/images/logo-light.png" alt="Xforce logo">
                  </a>
        
                  <p class="section-text">
                    Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum is dummy text of the printing.
                  </p>
        
                  <ul class="contact-list">
        
                    <li>
                      <a href="#" class="contact-link">
                        <ion-icon name="location-outline"></ion-icon>
        
                        <address>Brooklyn, New York, United States</address>
                      </a>
                    </li>
        
                    <li>
                      <a href="tel:+0123456789" class="contact-link">
                        <ion-icon name="call-outline"></ion-icon>
        
                        <span>+0123-456789</span>
                      </a>
                    </li>
        
                    <li>
                      <a href="mailto:contact@Xforce.com" class="contact-link">
                        <ion-icon name="mail-outline"></ion-icon>
        
                        <span>contact@Xforce.com</span>
                      </a>
                    </li>
        
                  </ul>
        
                  <ul class="social-list">
        
                    <li>
                      <a href="#" class="social-link">
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
                        <ion-icon name="logo-linkedin"></ion-icon>
                      </a>
                    </li>
        
                    <li>
                      <a href="#" class="social-link">
                        <ion-icon name="logo-youtube"></ion-icon>
                      </a>
                    </li>
        
                  </ul>
        
                </div>
        
                <div class="footer-link-box">
        
                  <ul class="footer-list">
        
                    <li>
                      <p class="footer-list-title">Company</p>
                    </li>
        
                    <li>
                      <a href="#" class="footer-link">About</a>
                    </li>
        
                    <li>
                      <a href="#" class="footer-link">Blog</a>
                    </li>
        
                    <li>
                      <a href="#" class="footer-link">All Products</a>
                    </li>
        
                    <li>
                      <a href="#" class="footer-link">Locations Map</a>
                    </li>
        
                    <li>
                      <a href="#" class="footer-link">FAQ</a>
                    </li>
        
                    <li>
                      <a href="#" class="footer-link">Contact us</a>
                    </li>
        
                  </ul>
        
                  <ul class="footer-list">
        
                    <li>
                      <p class="footer-list-title">Services</p>
                    </li>
        
                    <li>
                      <a href="#" class="footer-link">Order tracking</a>
                    </li>
        
                    <li>
                      <a href="#" class="footer-link">Wish List</a>
                    </li>
        
                    <li>
                      <a href="#" class="footer-link">Login</a>
                    </li>
        
                    <li>
                      <a href="#" class="footer-link">My account</a>
                    </li>
        
                    <li>
                      <a href="#" class="footer-link">Terms & Conditions</a>
                    </li>
        
                    <li>
                      <a href="#" class="footer-link">Promotional Offers</a>
                    </li>
        
                  </ul>
        
                  <ul class="footer-list">
        
                    <li>
                      <p class="footer-list-title">Customer Care</p>
                    </li>
        
                    <li>
                      <a href="#" class="footer-link">Login</a>
                    </li>
        
                    <li>
                      <a href="#" class="footer-link">My account</a>
                    </li>
        
                    <li>
                      <a href="#" class="footer-link">Wish List</a>
                    </li>
        
                    <li>
                      <a href="#" class="footer-link">Order tracking</a>
                    </li>
        
                    <li>
                      <a href="#" class="footer-link">FAQ</a>
                    </li>
        
                    <li>
                      <a href="#" class="footer-link">Contact us</a>
                    </li>
        
                  </ul>
        
                </div>
        
              </div>
            </div>
        
            <div class="footer-bottom">
              <div class="container">
        
                <p class="copyright">
                  &copy; 2023 <a href="#">Xforce</a>. All Rights Reserved
                </p>
        
              </div>
            </div>
        
          </footer>
        
        
        
        
        
          <!-- 
            - custom js link
          -->
          <script src="{{ asset('assets/js/script.js') }}"></script>
        
          <!-- 
            - ionicon link
          -->
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
          <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
          <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

          <script>
            $(document).ready(function () {
              var currentImageIdx = 0;
              var images = [];
                $('.item').click(function () {
                  var data = $(this).data('images').replace(/[\[\]']/g,'');
                  images = data.split(',');

                    // var images = JSON.parse($(this).data('images'));
                    if ($.isArray(images) && images.length > 0) {
                      $('.image-view').css('display', 'block');
                      $('.image-box').css('display', 'block');
                    }
                    currentImageDisplay(currentImageIdx);
 
                });

    
                $('.image-view').on('click', function() {
                          $(this).hide();
                          $('.image-box').hide();
                  });

                  function currentImageDisplay(position) {
                    
                    
                    if ($.isArray(images) && images.length > 0) {
                          $('.image-box').css({
                              'background': `url(${images[position]}) center/cover no-repeat`
                          });
                      }
                    
                  }

                  $('#prev-btn').on('click', function() {
                      currentImageIdx--;
                      if (currentImageIdx < 0) {
                          currentImageIdx = images.length -1;
                      }
                      
                      currentImageDisplay(currentImageIdx);
                  });  

                  $('#next-btn').on('click', function() {
                      currentImageIdx++;
                      if (currentImageIdx ===  images.length) {
                          currentImageIdx = 0;
                      }
                      
                      currentImageDisplay(currentImageIdx);
                  });

            });
        </script>
        
        </body>
        
        </html>