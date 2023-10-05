<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="khoisan.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="The origins of humanity and its evolution are hotly debated among scientists. This is a version that traces the path from the first appearance of modern man to the present day">
    <meta name="keyword" content="khoisan, Khoi-San, origins of humanity, history in Southern Africa, click, click language, indigenous groups, southern region of Africa, Bushmen, historical communities, pre-Bantu communities">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url()."images/Khoisan-fav.png"; ?>">
    <meta property="og:title" content="Khoisan">
    <meta property="og:image:width" content="436">
    <meta property="og:image:height" content="228">
    <meta property="og:image" content="<?php echo base_url()."images/khoisan-meta-image.jpg"; ?>">
    <title><?php if(!empty($title)){ echo $title; } else { echo "Khoisan"; } ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo base_url()."css/jquery.fancybox.css"; ?>">
    <link rel="stylesheet" href="<?php echo base_url()."css/toastr.min.css"; ?>">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- <link rel="manifest" href="manifest.webmanifest"> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    base_url = '<?php echo base_url(); ?>'
  </script>

    <style>
      .section-home{
        background-image:linear-gradient(hsla(0, 0%, 0%, 0.2),hsla(0, 0%, 0%, 0.2)), url("images/khoisan-bg.jpg");
        background-size: cover;
        color: var(--navbar-text-color);
        height: calc(100vh - 56px);
        background-position: center;
        background-repeat: no-repeat;
      }
      .section-background{
        background-image:linear-gradient(hsla(0, 0%, 0%, 0.2),hsla(0, 0%, 0%, 0.2)), url("images/khoisan-bg.jpg");
        background-size: cover;
        color: var(--navbar-text-color);
        height: 100vh;
        background-position: center;
        background-repeat: no-repeat;
      }
      /*.sp{
        background-color: red;
      }*/
    </style>
  </head>
  <body >
    <!-- <?php 
    if(!empty($header)){ $this->load->view($header); }
    if(!empty($body)){ $this->load->view($body); }
    if(!empty($footer)){ $this->load->view($footer); }
    ?> -->
  
    <div class="bottom-arrow d-none">
      <a href="#" class="bottom-arrow-div d-flex align-items-center justify-content-center">
        <i class="bx bx-up-arrow-alt"></i>
      </a>
    </div>

    <script src="<?php echo base_url("js/index.js"); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="<?php echo base_url()."js/jquery.fancybox.js"; ?>"></script> 
    <script src="<?php echo base_url()."js/toastr.min.js"; ?>"></script> 
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