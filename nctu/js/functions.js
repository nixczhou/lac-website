
function showComment() {
    var x = document.getElementById('myDIV');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}




jQuery(function($){

  // ===== Scroll to Top ==== 
      $(window).scroll(function() {
          if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
              $('#return-to-top').fadeIn(200);    // Fade in the arrow
          } else {
              $('#return-to-top').fadeOut(200);   // Else fade out the arrow
          }
      });
      $('#return-to-top').click(function() {      // When arrow is clicked
          $('html,body').animate({scrollTop:0}, 500);
      });
});




jQuery(function($){

    // ===== Scroll to Top ==== 
        $(window).scroll(function() {
            if ($(this).scrollTop() >= 100) {        // If page is scrolled more than 50px
                $('.homepage-navbar').fadeOut(200);    // Fade in the arrow
            } else {
                $('.homepage-navbar').fadeIn(200);   // Else fade out the arrow
            }
        });
        
  });




//槍答 button , hide 發文問題
function hide_facebook() {
    document.getElementById("facebook").style.display = "none";
}
  
  //發文問題 button, hide 槍答
function hide_comment() {
    document.getElementById("comment").style.display = "none";
}

/*---------------創意起源----------------*/

// window.addEventListener("load", function(){
//     const preload = document.querySelector(".preload");
//     preload.classList.add("preload-finish");
// });


jQuery(function($){

    // map scroll to item
    $("a[href^='#']").click(function(e) {
        e.preventDefault();
        
        var position = $($(this).attr("href")).offset().top;

        $("body, html").animate({
          scrollTop: position
        } /* speed */ );
    });
  
    $(".hover-3").click(function(){
        $(".content-1").fadeIn(200);
        $(".content-2").css({"display": "none"});
        $(".hover-3").css({"opacity": 1});
        $(".hover-4").css({"opacity": 0.5});
        $(".post-box .hover-3 .orange-before").css({"animation": "orangeLine"});
        $(".post-box .hover-3 .orange-after").css({"animation": "orangeLine"});
        $(".post-box .hover-4 .orange-before").css({"animation": "orangeLineClose"});
        $(".post-box .hover-4 .orange-after").css({"animation": "orangeLineClose"});

        $(".post-box .hover-3 .orange-before").css({"animation-duration": "1s"});
        $(".post-box .hover-3 .orange-before").css({"animation-fill-mode": "forwards"});
        $(".post-box .hover-3 .orange-after").css({"animation-duration": "1s"});
        $(".post-box .hover-3 .orange-after").css({"animation-fill-mode": "forwards"});

    });

    $(".hover-4").click(function(){
        $(".content-1").css({"display": "none"});
        $(".content-2").fadeIn(200);
        $(".hover-4").css({"opacity": 1});
        $(".hover-3").css({"opacity": 0.5});
        $(".post-box .hover-3 .orange-before").css({"animation": "orangeLineClose"});
        $(".post-box .hover-3 .orange-after").css({"animation": "orangeLineClose"});
        $(".post-box .hover-4 .orange-before").css({"animation": "orangeLine"});
        $(".post-box .hover-4 .orange-after").css({"animation": "orangeLine"});

        $(".post-box .hover-4 .orange-before").css({"animation-duration": "1s"});
        $(".post-box .hover-4 .orange-before").css({"animation-fill-mode": "forwards"});
        $(".post-box .hover-4 .orange-after").css({"animation-duration": "1s"});
        $(".post-box .hover-4 .orange-after").css({"animation-fill-mode": "forwards"});
    });
         
    var logoWhite = false;
    
    $(".hamburger").click(function(){
        $(".nav-map").toggleClass("open");
        $(".subpage-navbar-mobile .subnav-list-mobile-1").toggleClass("open");
        $(".subpage-navbar-mobile .subnav-list-mobile-2").toggleClass("open");
        $(".nav-map .mapContinents").toggleClass("show");
        $("body").toggleClass("scroll-less");
        $('html,body').animate({scrollTop:0}, 500);

        if(logoWhite == false && window.innerWidth <= 900){
            document.getElementById("logo").src = "https://inspir.nctu.edu.tw/wp-content/uploads/66384520_332948410936568_2889475493613010944_n.png";
            document.getElementsByClassName("hamburger")[0].src = "https://inspir.nctu.edu.tw/wp-content/uploads/66360031_315443012694412_5289754409780117504_n.png";
            logoWhite = true;
            
        }else{
            document.getElementById("logo").src = "https://inspir.nctu.edu.tw/wp-content/themes/inspir/nctu/images/icons/LOGO.png";
            document.getElementsByClassName("hamburger")[0].src = "https://inspir.nctu.edu.tw/wp-content/themes/inspir/nctu/images/icons/漢堡條.png";
            logoWhite = false;
           
        }

        

    });

    $(".close-map").click(function(){
        $(".nav-map").toggleClass("open");
        $(".subpage-navbar-mobile .subnav-list-mobile-1").toggleClass("open");
        $(".subpage-navbar-mobile .subnav-list-mobile-2").toggleClass("open");
        $(".nav-map .mapContinents").toggleClass("show");
        $("body").toggleClass("scroll-less");
        document.getElementById("logo").src = "https://inspir.nctu.edu.tw/wp-content/themes/inspir/nctu/images/icons/LOGO.png";
        document.getElementsByClassName("hamburger")[0].src = "https://inspir.nctu.edu.tw/wp-content/themes/inspir/nctu/images/icons/漢堡條.png";
        logoWhite = false;
        
    });

    var sidebarClickOpen = false;

    $(".sidebar-click").click(function(){
        $(".sidebar-design, .sidebar-click").toggleClass("open");

        if(sidebarClickOpen == false){
            $(".container-close").fadeIn(200);
            sidebarClickOpen = true;
        }else{
            $(".container-close").fadeOut(200);
            sidebarClickOpen = false;
        }
        
    });

    $(".btn-submit").click(function(){
        alert("謝謝您的搶答！！！");
    });

    $('.diss2').click(function(){
		$('.showup2').fadeToggle();
    });
    
    $('.diss').click(function(){
		$('.showup').fadeToggle();
	});
});

