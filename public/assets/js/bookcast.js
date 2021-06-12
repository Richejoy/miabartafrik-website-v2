$('body').delegate('.c-faq', 'click', function(){
  $('.c-faq').removeClass('c-faq--active');
  $(this).addClass('c-faq--active');
});

(function () {
  document.addEventListener('DOMContentLoaded', function () {

    'use strict';

    cards_util_miabartafrik.init();
    conf.InfoBox();

  });
})();

const cards_util_miabartafrik = {

  init: () => {
    cards_util_miabartafrik.triggerCardChange();
    cards_util_miabartafrik.directlyClickOncards_util_miabartafrik();
    cards_util_miabartafrik.imageHoverPerspective();
  },

  //  Change the active Card on directly clicking on it
  // - - - - - - - - - - - - - - - - - - - - - - - - - -

  directlyClickOncards_util_miabartafrik: () => {
    let cards_util_miabartafrik = conf.qSA('.info_util_miabartafrik');
    if (cards_util_miabartafrik.length) {
      cards_util_miabartafrik.forEach(function (item) {
        item.onclick = () => {
          if (!item.classList.contains('active')) {
            // search the active card
            for (let i = 0; i < cards_util_miabartafrik.length; i++) {
              if (cards_util_miabartafrik[i].classList.contains('active')) {
                let dataCard = cards_util_miabartafrik[i];
                dataCard.classList.add('inactive');
                dataCard.classList.remove('active');
                break;
              }
            }

            conf.qS('.cards_util_miabartafrik-wrapper').prepend(item);
            item.classList.remove('inactive');
            item.classList.add('active');
          }
        };
      });
    }
  },

  //  Change the active Card
  // - - - - - - - - - - - - - - - - - - - - - - - - - -

  triggerCardChange: () => {

    let arrow = conf.qS('.slide-button'),
    cards_util_miabartafrik = conf.qSA('.info_util_miabartafrik');

    if (arrow) {
      arrow.onclick = () => {
        if (cards_util_miabartafrik.length) {
          for (let i = 0; i < cards_util_miabartafrik.length; i++) {
            if (cards_util_miabartafrik[i].classList.contains('active')) {
              let dataCard = cards_util_miabartafrik[i];
              getNextCard(dataCard);
              break;
            }
          }
        }

        function getNextCard(prevCard) {

          for (let i = 0; i < cards_util_miabartafrik.length; i++) {
            let dataCard = parseInt(prevCard.getAttribute('data-card'), 10),
            nextCard = parseInt(cards_util_miabartafrik[i].getAttribute('data-card'), 10);

            if (dataCard + 1 === nextCard) {
              prevCard.classList.add('inactive');
              prevCard.classList.remove('active');
              conf.qS('.cards_util_miabartafrik-wrapper').prepend(cards_util_miabartafrik[i]);
              cards_util_miabartafrik[i].classList.remove('inactive');
              cards_util_miabartafrik[i].classList.add('active');
              break;
            } else if (dataCard + 1 >= cards_util_miabartafrik.length) {
              prevCard.classList.add('inactive');
              prevCard.classList.remove('active');
              conf.qS('.cards_util_miabartafrik-wrapper').prepend(cards_util_miabartafrik[i]);
              cards_util_miabartafrik[0].classList.remove('inactive');
              cards_util_miabartafrik[0].classList.add('active');
              break;
            }
          }
        }
      };
    }
  },

  //  Change the Image perspective on mouseover
  // - - - - - - - - - - - - - - - - - - - - - - - - - -

  imageHoverPerspective: () => {
    let cards_util_miabartafrik = conf.qSA('.info_util_miabartafrik');
    if (cards_util_miabartafrik.length) {
      cards_util_miabartafrik.forEach(function (card) {
        let image = conf.CqS(card, '.image_util_miabartafrik-wrapper');
        image.onmousemove = e => {

          let offset = image.getBoundingClientRect(),
          elX = offset.left + document.body.scrollTop,
          elY = offset.top + document.body.scrollTop,
          elWidth = image.offsetWidth,
          elHeight = image.offsetHeight,
          intensity = 11,
          mouseX = e.pageX,
          mouseY = e.pageY,
          rotateY = (elWidth / 2 - (mouseX - elX)) / (elWidth / 2) * intensity,
          rotateX = (elHeight / 2 - (mouseY - elY)) / (elHeight / 2) * intensity;

          let style = 'transform: rotateY(' + rotateY + 'deg) rotateX(' + rotateX + 'deg)';
          image.setAttribute('style', style);
        };
        image.onmouseleave = () => {
          image.removeAttribute('style');
        };
      });
    }
  } };


//  Config Functions
// - - - - - - - - - - - - - - - - - - - - - - - - - -

const conf = {
  qS: selector => {
    return document.querySelector(selector);
  },
  qSA: selector => {
    return document.querySelectorAll(selector);
  },
  CqS: (container, selector) => {
    return container.querySelector(selector);
  },
  InfoBox: () => {
    let toggle = conf.qS('.infobox-container .infobox-toggle'),
    detail = conf.qS('.infobox-container .infobox-detail-container');

    if (toggle) {
      toggle.onclick = e => {
        e.preventDefault();
        detail.classList.toggle('active');
      };
    }
  } };


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

 


    // Team carousel
    $(".team-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        items: 1,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ]
    });
    
 



 