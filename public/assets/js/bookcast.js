$(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.final_connexion_inscript_steps .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.final_connexion_inscript_steps .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}


var $reviewsSlider = $('.reviews-slider');
if ($reviewsSlider.length) {
  $reviewsSlider.slick({
    accessibility: false,
    centerMode: true,
    slidesToShow: 5,
    autoplay: true,
    responsive: [{
      breakpoint: 1200,
      settings: {
        slidesToShow: 3
      }
    }, {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        centerMode: false,
      }
    }]
  });
} 


$(document).ready(function(){
    $('.partners_bookcast_logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});




 
 const body = document.querySelector("body");
const modal = document.querySelector(".modal_bookcast_casting_and");
const modalButton = document.querySelector(".modal_bookcast_casting_and-button");
const closeButton = document.querySelector(".close-button_modal_bookcast_casting_and");
const scrollDown = document.querySelector(".scroll-down_modal_bookcast_casting_and");
let isOpened = false;

const openModal = () => {
  modal.classList.add("is-open");
  body.style.overflow = "hidden";
};

const closeModal = () => {
  modal.classList.remove("is-open");
  body.style.overflow = "initial";
};

window.addEventListener("scroll", () => {
  if (window.scrollY > window.innerHeight / 3 && !isOpened) {
    isOpened = true;
    scrollDown.style.display = "none";
    openModal();
  }
});

modalButton.addEventListener("click", openModal);
closeButton.addEventListener("click", closeModal);

document.onkeydown = evt => {
  evt = evt || window.event;
  evt.keyCode === 27 ? closeModal() : false;
}; 




$('.btn_inscript_container-submit').on('click',function(){
  $('.btn_inscript_container-submit').toggle('disabled');
  $('.btn_inscript_container-prev').toggle();
  var currentetapes_inscriptNum = $('#progress_inscript_bookcast').data('current-etapes_inscript');
  var currentetapes_inscript = $('.etapes_inscript.etapes_inscript-' + currentetapes_inscriptNum);
  currentetapes_inscript.removeClass('active').addClass('valid');
  currentetapes_inscript.find('.fa.fa-check').removeClass('opaque');
});

$('.btn_inscript_container-prev').on('click', function() {
  
  var currentetapes_inscriptNum = $('#progress_inscript_bookcast').data('current-etapes_inscript');
  var prevetapes_inscriptNum = (currentetapes_inscriptNum - 1);
  var currentetapes_inscript = $('.etapes_inscript.etapes_inscript-' + currentetapes_inscriptNum);
  var prevetapes_inscript = $('.etapes_inscript.etapes_inscript-' + prevetapes_inscriptNum);
  var progressBar = $('#progress_inscript_bookcast');
  $('.btn_inscript_container-next').removeClass('disabled');
  $('#section'+currentetapes_inscriptNum).toggle();
  $('#section'+prevetapes_inscriptNum).toggle();
  if(currentetapes_inscriptNum == 4){
    $('.btn_inscript_container-submit').toggle();
    $('.btn_inscript_container-next').toggle();
  }
  if(currentetapes_inscriptNum == 1) {
    return false;
  }
  if(prevetapes_inscriptNum == 1){
    $(this).addClass('disabled');
  }
  $('.progress_inscript_bookcast').removeClass('.etapes_inscript-' + currentetapes_inscriptNum).addClass('.etapes_inscript-' + (prevetapes_inscriptNum));
  
  currentetapes_inscript.removeClass('active');
  prevetapes_inscript.find('span').removeClass('opaque');
  prevetapes_inscript.find('.fa.fa-check').addClass('opaque');
  
  prevetapes_inscript.addClass('active').removeClass('valid');
  progressBar.removeAttr('class').addClass('etapes_inscript-' + prevetapes_inscriptNum).data('current-etapes_inscript', prevetapes_inscriptNum);
});

 

 $(document).ready(function(){
        $('.basculer_buplication_bookArt').click(function(){
            $('.basculer_buplication_bookArt').toggleClass('active')
            $('ul').toggleClass('active')
        })
    })


  // Timeline
$(document).ready(function() {
  $timeline_bookcastExpandableTitle = $('.timeline_bookcast-action.is-expandable .title');
  
  $($timeline_bookcastExpandableTitle).attr('tabindex', '0');
  
  // Give timeline_bookcasts ID's
  $('.timeline_bookcast').each(function(i, $timeline_bookcast) {
    var $timeline_bookcastActions = $($timeline_bookcast).find('.timeline_bookcast-action.is-expandable');
    
    $($timeline_bookcastActions).each(function(j, $timeline_bookcastAction) {
      var $milestoneContent = $($timeline_bookcastAction).find('.content');
      
      $($milestoneContent).attr('id', 'timeline_bookcast-' + i + '-milestone-content-' + j).attr('role', 'region');
      $($milestoneContent).attr('aria-expanded', $($timeline_bookcastAction).hasClass('expanded'));
      
      $($timeline_bookcastAction).find('.title').attr('aria-controls', 'timeline_bookcast-' + i + '-milestone-content-' + j);
    });
  });
  
  $($timeline_bookcastExpandableTitle).click(function() {
    $(this).parent().toggleClass('is-expanded');
    $(this).siblings('.content').attr('aria-expanded', $(this).parent().hasClass('is-expanded'));
  });
  
  // Expand or navigate back and forth between sections
  $($timeline_bookcastExpandableTitle).keyup(function(e) {
    if (e.which == 13){ //Enter key pressed
      $(this).click();
    } else if (e.which == 37 ||e.which == 38) { // Left or Up
      $(this).closest('.timeline_bookcast-milestone').prev('.timeline_bookcast-milestone').find('.timeline_bookcast-action .title').focus();
    } else if (e.which == 39 ||e.which == 40) { // Right or Down
      $(this).closest('.timeline_bookcast-milestone').next('.timeline_bookcast-milestone').find('.timeline_bookcast-action .title').focus();
    }
  });
});


 


// tabs

var tablinksPartnerfiche = document.querySelectorAll(".tablinksPartnerfiche");
var tabContent = document.querySelectorAll(".tabcontentPartnerfiche");


tablinksPartnerfiche.forEach(function(el) {
   el.addEventListener("click", openTabs);
});


function openTabs(el) {
   var btnTarget = el.currentTarget;
   var country = btnTarget.dataset.country;

   tabContent.forEach(function(el) {
      el.classList.remove("active");
   });

   tablinksPartnerfiche.forEach(function(el) {
      el.classList.remove("active");
   });

   document.querySelector("#" + country).classList.add("active");
   
   btnTarget.classList.add("active");
}

// PROGRESSE INSCRIPTION JS



 