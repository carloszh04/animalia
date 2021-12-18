(function() {
  
    "use strict";
  
  
        /*=====================================
        Sticky
        ======================================= */
        window.onscroll = function () {
          var header_navbar = document.querySelector(".navigation");
          var sticky = header_navbar.offsetTop;
  
          if (window.pageYOffset > sticky) {
            header_navbar.classList.add("sticky");
          } else {
            header_navbar.classList.remove("sticky");
          }
  
  
          // show or hide the back-top-top button
          var backToTop = document.querySelector(".back-to-top");
          if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            backToTop.style.display = "flex";
          } else {
            backToTop.style.display = "none";
          }
        };
  
  
        //===== close navbar-collapse when a  clicked
        let navbarToggler = document.querySelector(".navbar-toggler");
        var navbarCollapse = document.querySelector(".navbar-collapse");
  
        document.querySelectorAll(".page-scroll").forEach(e =>
          e.addEventListener("click", () => {
            navbarToggler.classList.remove("active");
            navbarCollapse.classList.remove('show')
          })
        );
        navbarToggler.addEventListener('click', function () {
          navbarToggler.classList.toggle("active");
          navbarCollapse.classList.toggle('show')
        })
  
        //WOW Scroll Spy
        var wow = new WOW({
          //disabled for mobile
          mobile: false
        });
        wow.init();
  
  })();