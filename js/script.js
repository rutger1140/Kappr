/**
 * Kappr javascripts
 * Uses: jQuery, Parallax, Waypoints, LocalScroll and more
 * Author: Rutger Laurman (lekkerduidelijk.nl)
 */

/* Ready? Set? Go! */
$(function() {

  console.log("[i] Document ready");

  /* Google Maps */
  GmapLoad();

  $.preload([
    "img/block.png","img/fill1-dashedline.png","img/fill1-scissor.png",
    "img/fill1-shapes1.png","img/fill1-shapes2.png","img/fill1.jpg",
    "img/fill2-comb.png","img/fill2-lines.jpg","img/fill2.jpg",
    "img/fill3-care.png","img/fill3-circles.png","img/fill3-styling.png",
    "img/fill3.jpg","img/fill4-circle1.png","img/fill4-circle2.png",
    "img/fill4-circleblur.png","img/fill4-circlesharp.png",
    "img/fill4.jpg","img/fillmask.png","img/footer-shadow.jpg",
    "img/hairproducts.png","img/locatie.gif","img/logo.png",
    "img/logosmall.png","img/mapaside-trans.png","img/mapcanvas.jpg",
    "img/mapicon.png","img/pricetags.jpg","img/products-foot.png",
  ], {
    init: function(loaded, total) {
      $("#loading").html("Loaded: "+loaded+"/"+total);
    },
    loaded: function(img, loaded, total) {
      $("#loading").html("Loaded: "+loaded+"/"+total);
    },
    loaded_all: function(loaded, total) {
      $("#loading").fadeOut(1000);
      $("#wrap").animate({opacity:"1"},3500)
      console.log("[i] Content loaded");
    }
  });

  // Wicked credit to
  // http://www.zachstronaut.com/posts/2009/01/18/jquery-smooth-scroll-bugs.html
  var scrollElement = 'html, body';
  $('html, body').each(function () {
    var initScrollTop = $(this).attr('scrollTop');
    $(this).attr('scrollTop', initScrollTop + 1);
    if ($(this).attr('scrollTop') == initScrollTop + 1) {
      scrollElement = this.nodeName.toLowerCase();
      $(this).attr('scrollTop', initScrollTop);
      return false;
    }
  });

  // Smooth scrolling for internal links
  $("a[href^='#']").click(function(event) {
    event.preventDefault();

    var $this = $(this),
    target = this.hash,
    $target = $(target);

    $(scrollElement).stop().animate({
      'scrollTop': $target.offset().top
    }, 800, 'swing', function() {
      window.location.hash = target;
    });

  });

  //.parallax(xPosition, adjuster, inertia, outerHeight) options:
  //xPosition - Horizontal position of the element
  //adjuster - y position to start from
  //inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
  //outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport

  //$("#fill1").parallax("50%", 400, 0.1, true);
  //$("#fill1-scissor").parallax("50%", 400, 0.1, true);

  //$("#fill1-dashedline").parallax("50%", 400, 0.1, true);

  $("#fill1-shapes2").parallax("50%", 500, 0.1, true);
  $("#fill1-shapes1").parallax("50%", 550, 0.3, true);

  $("#fill2-comb").parallax("60%", 2000, -0.7, true);


  $("#fill3").parallax("50%", 3800, -0.6, true);

  $("#fill4-circleblur").parallax("50%", 5400, -0.2, true);
  $("#fill4-circlesharp").parallax("50%", 5450, -0.1, true);

  $("#fill4-circle1").parallax("80px", 4300, -0.5, true);
  $("#fill4-circle2").parallax("530px", 4250, -0.3, true);


  /* Prepare elements on page */
  $("#fill1-scissor").css({
    "rotate": "-8deg"
  })

  // Start hairproducts hidden
  $("#hairproducts").css({
    "opacity": 0,
    "left":"588px"
  });

  // Set circles to small
  $('#fill3-styling').transition({
    opacity:0,
    scale: 0.1
  });
  $('#fill3-care').transition({
    opacity:0,
    scale: 0.1
  });


  $(window).scroll(function() {
    
    var offset = $(window).scrollTop(); //position of the scrollbar

    if(offset<100){
      $('#fill1-scissor').css({
        "top" : -30 + (offset/1.6),
        "left" : (44+(offset/30))+"%"
      })
    }

    if(offset>=100 && offset <150 ){
      $('#fill1-scissor').css({
        "top" : -30 + (offset/1.6),
        "left" : (44+(offset/33))+"%"
      });
    }

    if(offset>=150 && offset <170 ){
      $('#fill1-scissor').css({
        "top" : -30 + (offset/1.6),
        "left" : (44+(offset/35))+"%"
      });
    }
    if(offset>=170 && offset <190 ){
      $('#fill1-scissor').css({
        "top" : -30 + (offset/1.6),
        "left" : (44+(offset/37))+"%"
      });
    }

    if(offset>=190 && offset <210 ){
      $('#fill1-scissor').css({
        "top" : -30 + (offset/1.6),
        "left" : (44+(offset/39))+"%"
      });
    }

    if(offset>=210 && offset <220 ){
      $('#fill1-scissor').css({
        "top" : -30 + (offset/1.6),
        "left" : (44+(offset/42))+"%"
      });
    }

    if(offset>=220 && offset <250 ){
      $('#fill1-scissor').css({
        "top" : -30 + (offset/1.6),
        "left" : (44+(offset/44))+"%"
      });
    }

    if(offset>=250 && offset <290 ){
      $('#fill1-scissor').css({
        "top" : -30 + (offset/1.6),
        "left" : (44+(offset/48))+"%"
      });
    }

    if(offset>=290 && offset <390 ){
      $('#fill1-scissor').css({
        "top" : -30 + (offset/1.6),
        "left" : (53-(offset/80))+"%"
      });

    }

    if(offset>=390 && offset <410 ){
      $('#fill1-scissor').css({
        "top" : -30 + (offset/1.6),
        "left" : (53-(offset/77))+"%"
      });
    }

    if(offset>=410 && offset <470 ){
      $('#fill1-scissor').css({
        "top" : -30 + (offset/1.6),
        "left" : (53-(offset/75))+"%"
      });
    }

    if(offset>=470 && offset <520 ){
      $('#fill1-scissor').css({
        "top" : -30 + (offset/1.6),
        "left" : (53-(offset/73))+"%"
      });
    }

    if(offset>=520 && offset <560 ){
      $('#fill1-scissor').css({
        "top" : -30 + (offset/1.6),
        "left" : (53-(offset/70))+"%"
      });
    }

    if(offset>=560 && offset <610 ){
      $('#fill1-scissor').css({
        "top" : -30 + (offset/1.6),
        "left" : (38+(offset/75))+"%"
      })
    }

    if(offset>=610 && offset <750 ){
      $('#fill1-scissor').css({
        "top" : -30 + (offset/1.6),
        "left" : (38+(offset/80))+"%"
      });

    }


    if(offset>2300){

      $("#hairproducts").animate({
        "left": "460px",
        "opacity":1
      },1500,'easeOutSine');
 
      $('#fill3-styling').transition({
        opacity:1,
        scale: 1
      },200,'out');
      $('#fill3-care').transition({
        opacity:1,
        scale: 1
      },300,'out');

    }

  })


    // The same for all waypoints
    $('body').delegate('section.chapter', 'waypoint.reached', function(event, direction) {
        var $active = $(this);

        if (direction === "up") {
          $active = $active.prev('.chapter');
        }
        //console.log($active);
        if (!$active.length) $active = $active.end();

        $('.section-active').removeClass('section-active');
        $active.addClass('section-active');

        $('.link-active').removeClass('link-active');
        $('a[href=#'+$active.attr('id')+']').addClass('link-active');
    });

    // Register each section as a waypoint.
    $('section.chapter').waypoint({ offset: "85px" });


});

var map;

function GmapInit() {
  var kappr = new google.maps.LatLng(52.054153,5.079889);
  var mapcenter = new google.maps.LatLng(52.054153,5.077989);
  var myOptions = {
    zoom: 16,
    center: mapcenter,
    disableDefaultUI: true,
    disableDoubleClickZoom: true,
    draggable: true,
    scrollwheel: false,
    overviewMapControl: false,
    zoomControl: true,
    zoomControlOptions: {
      style: google.maps.ZoomControlStyle.SMALL,
      position: google.maps.ControlPosition.RIGHT_BOTTOM
    },
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  map = new google.maps.Map(document.getElementById("mapcanvas"), myOptions);


  var kapprIcon = "img/mapicon.png";

  marker = new google.maps.Marker({
    map:map,
    draggable:true,
    animation: google.maps.Animation.DROP,
    position: kappr,
    icon:kapprIcon
  });
  $("#locatie").addClass("hasmap");

}

function GmapLoad() {
  var script = document.createElement("script");
  script.type = "text/javascript";
  script.src = "http://maps.googleapis.com/maps/api/js?sensor=false&callback=GmapInit";
  document.body.appendChild(script);
}

