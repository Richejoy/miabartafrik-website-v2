 
  //  LOGOS SLIDER PARTENAIRES
  // - - - - - - - - - - - - - - - - - - - - - - - - - -

$(document).ready(function(){
      $('.customer-logos').slick({
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


var $shareModal = $('.share-modal');

    var toggleModal = function() {
      $shareModal.toggleClass('share-modal--open');
      $shareModal.toggleClass('share-modal--close');
    }

    $('.js-share-button').on('click', function(e) {
        e.preventDefault();
        toggleModal();
    });

    $(document).keyup(function(e) {
        if (e.keyCode === 27 && $shareModal.hasClass('share-modal--open')) {
          $shareModal.removeClass('share-modal--open');
          $shareModal.addClass('share-modal--close');
        }
    });

    $('#closeModalButton').on('click', function(e) {
        e.preventDefault();
        toggleModal();
    });



  //  INFOS UTILE
  // - - - - - - - - - - - - - - - - - - - - - - - - - -
//  Video Poster Setup

$(document).on("click", ".js-videoPoster_miabart_afrik", function (ev) {
  "use strict";
  ev.preventDefault();
  videoStop();
  var $poster = $(this);
  var $wrapper = $poster.closest(".js-videoWrapper_miabart_afrik");
  videoPlay($wrapper);
});

// play the targeted video (and hide the poster frame)
function videoPlay($wrapper) {
  "use strict";
  var $iframe = $wrapper.find(".js-videoIframe_miabart_afrik");
  var src = $iframe.data("src");
  // hide poster
  $wrapper.addClass("videoWrapper_miabart_afrikActive");
  // add iframe src in, starting the video
  $iframe.attr("src", src);
}

// stop the targeted/all videos (and re-instate the poster frames)
function videoStop($wrapper) {
  "use strict";
  // if we're stopping all videos on page
  if (!$wrapper) {
    var $wrapper = $(".js-videoWrapper_miabart_afrik");
    var $iframe = $(".js-videoIframe_miabart_afrik");
    // if we're stopping a particular video
  } else {
    var $iframe = $wrapper.find(".js-videoIframe_miabart_afrik");
  }
  // reveal poster
  $wrapper.removeClass("videoWrapper_miabart_afrikActive");
  // remove youtube link, stopping the video from playing in the background
  $iframe.attr("src", "");
}


$('.book_infos_title').click(function(e) {
  console.log("Clicked");
  $(this).next().slideToggle();
  $(this).next().next().next().slideToggle();
})

function _defineProperty(obj, key, value) 
{if (key in obj) {
  Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true });} 
  else {obj[key] = value;}return obj;}class Widget {
  constructor($widget_id) {_defineProperty(this, "setHandler",





    () => {
      if (this.toggle.length) {
        let target = this.toggle.attr("target");
        this.contact = this.widget.find(target);

        this.toggle.on('click', e => {
          this.toggle.toggleClass('active');
          this.contact.toggleClass('active');
        });
      } else {
        console.error("Toggle object not found");
      }
    });this.widget = $($widget_id);this.toggle = this.widget.find($widget_id + "-toggle");this.setHandler();}}


let widget = new Widget("#reseau_art_Widget");



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

 



 



 