let parameters = {
    count: false,
    letters: false,
    numbers: false,
    special: false
}
let strengthBar = document.getElementById("strength-bar");
let msg = document.getElementById("msg");

function strengthChecker() {
    let password = document.getElementById("password").value;

    parameters.letters = (/[A-Za-z]+/.test(password)) ? true : false;
    parameters.numbers = (/[0-9]+/.test(password)) ? true : false;
    parameters.special = (/[!\"$%&/()=?@~`\\.\';:+=^*_-]+/.test(password)) ? true : false;
    parameters.count = (password.length > 7) ? true : false;

    let barLength = Object.values(parameters).filter(value => value);

    console.log(Object.values(parameters), barLength);

    strengthBar.innerHTML = "";
    for (let i in barLength) {
        let span = document.createElement("span");
        span.classList.add("strength");
        strengthBar.appendChild(span);
    }

    let spanRef = document.getElementsByClassName("strength");
    for (let i = 0; i < spanRef.length; i++) {
        switch (spanRef.length - 1) {
            case 0:
                spanRef[i].style.background = "#ff3e36";
                msg.textContent = "Your password is very weak";
                break;
            case 1:
                spanRef[i].style.background = "#ff691f";
                msg.textContent = "Your password is weak";
                break;
            case 2:
                spanRef[i].style.background = "#ffda36";
                msg.textContent = "Your password is good";
                break;
            case 3:
                spanRef[i].style.background = "#0be881";
                msg.textContent = "Your password is strong";
                break;
        }
    }
}


function toggle() {
    let password = document.getElementById("password");
    let eye = document.getElementById("toggle");

    if (password.getAttribute("type") == "password") {
        password.setAttribute("type", "text");
        eye.style.color = "#0be881";
    }
    else {
        password.setAttribute("type", "password");
        eye.style.color = "#808080";
    }
}

function toggle2() {
    let password = document.getElementById("password2");
    let eye = document.getElementById("toggle2");

    if (password.getAttribute("type") == "password") {
        password.setAttribute("type", "text");
        eye.style.color = "#0be881";
    }
    else {
        password.setAttribute("type", "password");
        eye.style.color = "#808080";
    }
}

// SLIDER
( function($) {
  
  $(document).ready(function() {
    
    var s           = $('.slider'),
        sWrapper    = s.find('.slider-wrapper'),
        sItem       = s.find('.slide'),
        btn         = s.find('.slider-link'),
        sWidth      = sItem.width(),
        sCount      = sItem.length,
        slide_image = s.find('.slide-link img'),
        sTotalWidth = sCount * sWidth;
    
    sWrapper.css('width', sTotalWidth);
    sWrapper.css('width', sTotalWidth);
    
    var clickCount  = 0;
    
    btn.on('click', function(e) {
      e.preventDefault();

      if( $(this).hasClass('next') ) {
        
        ( clickCount < ( sCount - 1 ) ) ? clickCount++ : clickCount = 0;
      } else if ( $(this).hasClass('prev') ) {
        
        ( clickCount > 0 ) ? clickCount-- : ( clickCount = sCount - 1 );
      }
      TweenMax.to(sWrapper, 0.4, {x: '-' + ( sWidth * clickCount ) })


      //CONTENT ANIMATIONS

      var fromProperties = {autoAlpha:0, x:'-50', y:'-10'};
      var toProperties = {autoAlpha:0.8, x:'0', y:'0'};

      TweenLite.fromTo(slide_image, 1, {autoAlpha:0, y:'40'}, {autoAlpha:1, y:'0'});
      TweenLite.fromTo(slide_date, 0.4, fromProperties, toProperties);
      TweenLite.fromTo(slide_title, 0.6, fromProperties, toProperties);
      TweenLite.fromTo(slide_text, 0.8, fromProperties, toProperties);
      TweenLite.fromTo(slide_more, 1, fromProperties, toProperties);

    });
          
  });
})(jQuery);

$('.overlay').addClass('overlay-blue');
// END SLIDER