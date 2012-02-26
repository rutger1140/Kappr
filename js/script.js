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


/*
  $("#access").localScroll({
    duration:800,
    hash:true
  });
*/
  /* Set a hash, when no hash is set */
  /*
  var loadhash = document.location.hash.split("#")[1];
  if(loadhash)
    console.log("loadhash = "+loadhash);
  else
    document.location.hash = "#top"
*/

  //  console.log("no loadhash");
  //if(hash = document.location.hash.split("#")[1]))
  //$('#access').localScroll(800);

  //RepositionNav();

  //$(window).resize(function(){
//    RepositionNav();
//  });


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

  //$('#fill2').parallax("50%", 1500, -0.4, true);

//  $("#fill2-lines").parallax("50%", 1500, 0.1, true);
  $("#fill2-comb").parallax("60%", 2000, -0.7, true);


  $("#fill3").parallax("50%", 3800, -0.6, true);

  $("#fill4-circleblur").parallax("50%", 5400, -0.2, true);
  $("#fill4-circlesharp").parallax("50%", 5450, -0.1, true);

  $("#fill4-circle1").parallax("80px", 4300, -0.5, true);
  $("#fill4-circle2").parallax("530px", 4250, -0.3, true);

  //$("#fill4").parallax("50%", 4200, 0.4, true);


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
    var offset = window.pageYOffset;

    $("#pixels2").html((44+(offset/30))+"%");

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

      console.log("Producten start");

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
/*

  var waypointOptions ={
    offset: "100px",
    triggerOnce: true,
    onlyOnScroll: true

  }*/
/*
  $("#prijzen").waypoint(function() {
      console.log("Prijzen");
  }, {
    offset: "400px",
    //triggerOnce: true,
    //onlyOnScroll: true
  });
*//*
  $("#producten").waypoint(function() {
      console.log("Producten");
  },{ offset: "1400px"});*/
/*
  $("#locatie").waypoint(function() {
      console.log("Locatie");
  },{ offset: "10%"})

  $("#contact").waypoint(function() {
      console.log("Contact");
  },{ offset: "10%"});*/

/*
  $('.top').addClass('hidden');
  $.waypoints.settings.scrollThrottle = 30;
  $('#wrapper').waypoint(function(event, direction) {
    $('.top').toggleClass('hidden', direction === "up");
  }, {
    offset: '-100%'
  }).find('#main-nav-holder').waypoint(function(event, direction) {
    $(this).parent().toggleClass('sticky', direction === "down");
    event.stopPropagation();
  });
*/
/*
  $('#access').waypoint(function(event, direction) {
    $(this).parent().toggleClass('sticky', direction === "down");
    event.stopPropagation();
  });
*/


    // The same for all waypoints
    $('body').delegate('section.chapter', 'waypoint.reached', function(event, direction) {
        var $active = $(this);

        if (direction === "up") {
          console.log('direction is up');
          $active = $active.prev('.chapter');
          console.log("active is" +$active);
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
    //google.maps.event.addListener(marker, 'click', toggleBounce);

}

function GmapLoad() {
  var script = document.createElement("script");
  script.type = "text/javascript";
  script.src = "http://maps.googleapis.com/maps/api/js?sensor=false&callback=GmapInit";
  document.body.appendChild(script);
}

