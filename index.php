  <?php
  $ark_root = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
  $ark_root .= "://" . $_SERVER['HTTP_HOST'];
  $ark_root .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
  $config['base_url'] = $ark_root;
  $base_url = $ark_root;
    
  ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="khoisan.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="The origins of humanity and its evolution are hotly debated among scientists. This is a version that traces the path from the first appearance of modern man to the present day">
    <meta name="keyword" content="khoisan, Khoi-San, origins of humanity, history in Southern Africa, click, click language, indigenous groups, southern region of Africa, Bushmen, historical communities, pre-Bantu communities">
    <meta name="viewport" content="The origins of humanity and its evolution are hotly debated among scientists. This is a version that traces the path from the first appearance of modern man to the present day">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $base_url."images/Khoisan-fav.png"; ?>">
    <meta property="og:title" content="Khoisan">
    <meta property="og:image:width" content="436">
    <meta property="og:image:height" content="228">
    <meta property="og:image" content="<?php echo $base_url."images/khoisan-meta-image.jpg"; ?>">
    <title>Khoisan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo $base_url."css/jquery.fancybox.css"; ?>">
    <link rel="stylesheet" href="<?php echo $base_url."css/toastr.min.css"; ?>">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
      .section-home{
        background-image:linear-gradient(hsla(0, 0%, 0%, 0.2),hsla(0, 0%, 0%, 0.2)), url("images/khoisan-bg.jpg");
        background-size: cover;
        color: var(--navbar-text-color);
        height: calc(100vh - 56px);
        background-position: center;
        background-repeat: no-repeat;
      }
      /*.sp{
        background-color: red;
      }*/
    </style>
  </head>
  <body>
    <section class="section-header position-sticky top-0 py-0" id="section-header">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="images/logo.png" height="30px" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" href="#home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#history">History</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#gallery1">Gallery</a>
                </li>
                <li class="nav-item d-none">
                  <a class="nav-link" href="#testomonials">Testomonials</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact</a>
                </li>
              </ul>
              <form class="d-flex" role="search">                
                <button class="btn btn-theme" type="button" onclick="marketplaceToastr();">Sign In</button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </section>

    <section class="section-home section" id="home">
      <div class="container">
        <h1 class="text-center">The origins of humanity and its evolution are hotly debated among scientists. This is a version that traces the path from the first appearance of modern man to the present day</h1>
      </div>
    </section>

    <section class="section-about section" id="about">
      <div class="container">
        <div class="head text-center mb-3">
          <h2>About <span class="text-theme">Khoisan</span></h2>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-7" data-aos="fade-up" data-aos-duration="1500">
            <h6>The Khoisan people have a deep-rooted history in Southern Africa, characterized by their distinctive culture, languages, and close connection to the land.</h6>
            <h5>Ancient Roots:</h5>
            <ul>
              <li>The Khoisan people are among the earliest inhabitants of Southern Africa, with a presence dating back tens of thousands of years.</li>
              <li>One of the most distinctive features of the Khoisan people is their use of click languages, which are characterized by the presence of various click sounds produced with different parts of the mouth.</li>
            </ul>
             <h5>Distinctive Click Languages:</h5>
            <ul>
              <li>One of the most distinctive features of the Khoisan cultures is their use of click languages, characterized by the use of clicking sounds in speech.</li>
              <li>These click languages have intricate structures and played a crucial role in communication.</li>
            </ul>
             <h5>Cultural Changes and Challenges:</h5>
            <ul>
              <li>The Khoisan people faced significant challenges as their traditional ways of life were disrupted by colonial powers.</li>
              <li>Their communities were often marginalized, and efforts were made to assimilate them into European cultures.</li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-5" data-aos="fade-up" data-aos-duration="1500">
            <div class="text-center">
              <img src="<?php echo $base_url."images/about.png"; ?>" alt="about PNG">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-history section" id="history">
      <div class="container" >
        <div class="head text-center mb-3">
          <h2><span class="text-theme">Khoisan</span> History</h2>
        </div>
        <div class="row">          
          <div class="col-md-6 col-lg-5" data-aos="fade-up" data-aos-duration="1500">
            <div class="text-center">
              <img src="<?php echo $base_url."images/khoisan-history-image.jpg"; ?>" alt="history PNG" class="w-100">
            </div>
          </div>
          <div class="col-md-6 col-lg-7" data-aos="fade-up" data-aos-duration="1500">
            <h6>The Khoisan people, also known as Khoi-San or Khoi-San indigenous groups, have a long and diverse history in the southern region of Africa. Their history can be divided into several periods:</h6>
            <p>
              The Khoisan people are believed to be among the earliest inhabitants of the region, with a history dating back tens of thousands of years.They developed an intricate knowledge of local plants and animals and created rock art to depict their experiences and beliefs.The Khoisan people established unique cultures and societies across what is now South Africa, Namibia, Botswana, and other neighboring areas.
            </p>
            <p>
              They developed click languages, characterized by distinct click sounds, which were integral to their communication.The arrival of European explorers and settlers in the 15th century had a profound impact on the Khoisan communities.Dutch settlers, known as Boers, established the Cape Colony in the 17th century. They encountered and interacted with Khoisan. As European colonization expanded, Khoisan communities faced further displacement and land loss.Many Khoisan were pushed into marginalized areas and subjected to discrimination, further eroding their cultural practices and languages.
            </p>
            <p>
              Today, various cultural events, festivals, and educational initiatives are held to raise awareness about Khoisan history and promote their cultural heritage.
              The history of the Khoisan people is complex and spans a vast period of time. It's important to note that their history has been intertwined with that of other indigenous groups, colonial powers, and societal changes, which has contributed to the diverse experiences and challenges faced by Khoisan communities over the centuries.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section-gallery section" id="gallery1">
      <div class="container">
        <div class="head text-center mb-3">
          <h2><span class="text-theme">Khoisan</span> Gallery</h2>
        </div>
        <div class="gallery row p-3" data-aos="zoom-in-up" data-aos-duration="1500">
          <div class="col-sm-6 col-md-4 col-lg-3 p-2">
            <a href="<?php echo $base_url."images/image-1.jpg"; ?>" class="show_image" data-fancybox="gallery" data-caption="Caption Images 1">
              <img src="<?php echo $base_url."images/image-1.jpg"; ?>" alt="Image Gallery">
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 p-2">
            <a href="<?php echo $base_url."images/image-2.jpg"; ?>" class="show_image" data-fancybox="gallery" data-caption="Caption Images 1">
              <img src="<?php echo $base_url."images/image-2.jpg"; ?>" alt="Image Gallery">
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 p-2">
            <a href="<?php echo $base_url."images/image-3.jpg"; ?>" class="show_image" data-fancybox="gallery" data-caption="Caption Images 1">
              <img src="<?php echo $base_url."images/image-3.jpg"; ?>" alt="Image Gallery">
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 p-2">
            <a href="<?php echo $base_url."images/image-4.jpg"; ?>" class="show_image" data-fancybox="gallery" data-caption="Caption Images 1">
              <img src="<?php echo $base_url."images/image-4.jpg"; ?>" alt="Image Gallery">
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 p-2">
            <a href="<?php echo $base_url."images/image-5.jpg"; ?>" class="show_image" data-fancybox="gallery" data-caption="Caption Images 1">
              <img src="<?php echo $base_url."images/image-5.jpg"; ?>" alt="Image Gallery">
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 p-2">
            <a href="<?php echo $base_url."images/image-6.jpg"; ?>" class="show_image" data-fancybox="gallery" data-caption="Caption Images 1">
              <img src="<?php echo $base_url."images/image-6.jpg"; ?>" alt="Image Gallery">
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 p-2">
            <a href="<?php echo $base_url."images/image-7.jpg"; ?>" class="show_image" data-fancybox="gallery" data-caption="Caption Images 1">
              <img src="<?php echo $base_url."images/image-7.jpg"; ?>" alt="Image Gallery">
            </a>            
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 p-2">
            <a href="<?php echo $base_url."images/kohisan.jpeg"; ?>" class="show_image" data-fancybox="gallery" data-caption="Caption Images 1">
              <img src="<?php echo $base_url."images/kohisan.jpeg"; ?>" alt="Image Gallery">
            </a>           
          </div>
        </div>
      </div>
    </section>

    <section class="section-contact section" id="contact">
      <div class="container">
        <div class="head text-center mb-3">
          <h2>Contact Us</h2>
        </div>
       <div class="row shadow-sm justify-content-center" data-aos="fade-up" data-aos-duration="1500">           
        <div class="col-md-6 col-lg-8 form-contact">
          <!-- <h3 class="">E-mail Us</h3> -->
          <form id="contact-form" class="row justify-content-center">
            <div class="col-6 my-2 " >
              <label>Name</label>
              <input type="text" name="name" id="name" required>
            </div>
            <div class="col-6 my-2 ">
              <label>E-mail Address</label>
              <input type="email" name="email" id="email" required>
            </div>
            <div class="col-6 my-2 ">
              <label>Phone Number</label>
              <input type="number" name="phone" id="phone">
            </div>

            <div class="col-6 my-2">
              <label>Subject</label>
              <input type="text" name="company" id="company">
            </div>
            <div class="full my-2 ">
              <label>Message</label>
              <textarea name="message" rows="5" id="message"></textarea>
            </div>
            <div class="full my-2 ">
               <button class="btn btn-theme" type="submit">Submit</button>
            </div>
          </form>
        </div>
        <div class="col-md-6 d-none">
          <iframe width="500" height="400" id="gmap_canvas" class="w-100" src="https://maps.google.com/maps?q=Noitavonne%202121%20s.%20Columbia%20Ave%20Suite%20103,%20Tulsa,%20Oklahoma%2074114&amp;t=&amp;z=19&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
      </div>
      </div>
    </section>

    <section class="section-footer section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div>
              <div class="text-center mb-2">
                <img src="images/logo.png" height="50px" alt="">
              </div>
              <h5 class="mt-3">The Khoisan people, also known as Khoi-San or Khoi-San indigenous groups, have a long and diverse history in the southern region of Africa.</h5>
            </div>
          </div>
          <div class="col-md-10">
            <hr>
            <div class="row">
              <div class="col-md-6">
                <h5 class="fw-bold">Connect With Us</h5>
                <h6 class="d-none"> Reach us at <a href="#" class="text-decoration-underline">support@gist.com</a> or through our <a href="#" class="text-decoration-underline">online contact</a> form.</h6>
                <div class="">
                  <a href="#" class="footer-icon"><i class="bx bxl-facebook-circle"></i></a>
                  <a href="#" class="footer-icon"><i class="bx bxl-twitter"></i></a>
                  <a href="#" class="footer-icon"><i class="bx bxl-linkedin"></i></a>
                  <a href="#" class="footer-icon"><i class="bx bxl-youtube"></i></a>
                </div>
              </div>
              <div class="col-md-6 d-none">
                <h5 class="fw-bold">Address</h5>
                <h5 class="d-none">
                  Noitavonne <br>
                  2121 s. Columbia Ave Suite 103, <br>
                  Tulsa, Oklahoma 74114
                </h5>
                <form class="subscribe_form  mx-auto mt-3">
                  <div class="input-group d-none">
                    <input type="text" class="form-control" name="email_address" id="email_address" placeholder="Enter your email" style="background-color:#fff;" autocomplete="off" fdprocessedid="xvbkxs">
                    <span class="input-group-btn">
                      <button class="btn-theme" type="button" id="SubscribeMail" fdprocessedid="5uy1s">Subscribe</button>
                    </span>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="bottom-arrow d-none">
      <a href="#" class="bottom-arrow-div d-flex align-items-center justify-content-center">
        <i class="bx bx-up-arrow-alt"></i>
      </a>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="<?php echo $base_url."js/jquery.fancybox.js"; ?>"></script> 
    <script src="<?php echo $base_url."js/toastr.min.js"; ?>"></script> 
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <script>

      $(window).on("scroll", function(){
       if($(this).scrollTop() >= 100){
        $(".bottom-arrow").removeClass("d-none").addClass("d-block");
      }
      else{
        $(".bottom-arrow").addClass("d-none").removeClass("d-block");
      }
    });

      Toast = function (msg, ttype, opt) {
        var ttype = ttype ? ttype : "info",
        msi = "",
        ticon =
        ttype === "info"
        ? "ni ni-info-fill"
        : ttype === "success"
        ? "fa fa-check-circle"
        : ttype === "error"
        ? "fa fa-check-circle"
        : ttype === "warning"
        ? "fa fa-check-circle"
        : "",
        def = {
          position: "top-right",
          ui: "",
          icon: "auto",
          clear: false,
        },
        attr = opt ? extend(def, opt) : def;
        attr.position = attr.position ? "toast-" + attr.position : "toast-top-right";
        attr.icon = attr.icon === "auto" ? ticon : attr.icon ? attr.icon : "";
        attr.ui = attr.ui ? " " + attr.ui : "";
        (msi =
          attr.icon !== ""
          ? '<span class="toastr-icon"><em class="icon ' +
          attr.icon +
          '"></em></span>'
          : ""),
        (msg =
          msg !== "" ? msi + '<div class="toastr-text">' + msg + "</div>" : "");
        if (msg !== "") {
          if (attr.clear === true) {
            toastr.clear();
          }
          var option = {
            closeButton: false,
            debug: false,
            newestOnTop: false,
            progressBar: false,
            positionClass: attr.position + attr.ui,
            closeHtml: '<span class="btn-trigger">Close</span>',
            preventDuplicates: true,
            showDuration: "1500",
            hideDuration: "1500",
            timeOut: "2000",
            toastClass: "toastr",
            extendedTimeOut: "3000",
          };
          toastr.options = extend(option, attr);
          toastr[ttype](msg);
        }
      };
      function extend(obj, ext) {
        Object.keys(ext).forEach(function (key) {
          obj[key] = ext[key];
        });
        return obj;
      }


      function marketplaceToastr() {
        toastr.clear();
        Toast('Coming Soon', "success", {
          position: "top-right",
          timeOut: "5000",
        });
      }

      $(".show_image").fancybox({
        
        });


      const sections = document.querySelectorAll('.section');
      const navLinks = document.querySelectorAll('.nav-link');

      function setActiveNav() {
        sections.forEach((section, index) => {
          const rect = section.getBoundingClientRect();
          if (rect.top <= window.innerHeight / 1 && rect.bottom >= window.innerHeight / 1) {
            navLinks.forEach((navLink) => {
              navLink.classList.remove('active');
            });
            navLinks[index].classList.add('active');
          }
        });
      }

// Event listener for window scroll
      window.addEventListener('scroll', setActiveNav);

// Initial call to set active navigation based on initial scroll position
      setActiveNav();

    </script>
  </body>
</html>