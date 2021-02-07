

$(function(){
    $('.minimized').click(function(event) {
      var i_path = $(this).attr('src');
      $('body').append('<div id="overlay"></div><div id="magnify"><img src="'+i_path+'"><div id="close-popup"><i></i></div></div>');
      $('#magnify').css({
          left: ($(document).width() - $('#magnify').outerWidth())/2,
          // top: ($(document).height() - $('#magnify').outerHeight())/2 upd: 24.10.2016
              top: ($(window).height() - $('#magnify').outerHeight())/2
        });
      $('#overlay, #magnify').fadeIn('fast');
    });
    
    $('body').on('click', '#close-popup, #overlay', function(event) {
      event.preventDefault();
   
      $('#overlay, #magnify').fadeOut('fast', function() {
        $('#close-popup, #magnify, #overlay').remove();
      });
    });
  });

function changeBGButtonBlue() {
  let body = document.body

  if(body.classList == 'bgBlue') {
    body.classList.remove('bgBlue')
  } 
  else if (body.classList == 'bgWhite') {
    body.classList.remove('bgWhite')
  } 
  else if(body.classList == 'bgDark') {
    body.classList.remove('bgDark')
  } 
  else if(body.classList == 'bgPink') {
    body.classList.remove('bgPink')
  }
  else {
    body.classList.add('bgBlue')
  }

}

function changeBGButtonWhite() {
  let body = document.body

  if(body.classList == 'bgWhite') {
    body.classList.remove('bgWhite')
  }
  else if (body.classList == 'bgBlue') {
    body.classList.remove('bgBlue')
  } 
  else if(body.classList == 'bgDark') {
    body.classList.remove('bgDark')
  } 
  else if(body.classList == 'bgPink') {
    body.classList.remove('bgPink')
  }
   else {
    body.classList.add('bgWhite')
  }

}

function changeBGButtonDark() {
  let body = document.body

  if(body.classList == 'bgDark') {
    body.classList.remove('bgDark')
  }
  else if (body.classList == 'bgBlue') {
    body.classList.remove('bgBlue')
  } 
  else if(body.classList == 'bgWhite') {
    body.classList.remove('bgWhite')
  } 
  else if(body.classList == 'bgPink') {
    body.classList.remove('bgPink')
  } else {
    body.classList.add('bgDark')
  }

}

function changeBGButtonPink() {
  let body = document.body

  if(body.classList == 'bgPink') {
    body.classList.remove('bgPink')
  }
  else if (body.classList == 'bgBlue') {
    body.classList.remove('bgBlue')
  } 
  else if(body.classList == 'bgWhite') {
    body.classList.remove('bgWhite')
  } 
  else if(body.classList == 'bgDark') {
    body.classList.remove('bgDark')
  } else {
    body.classList.add('bgPink')
  }

}