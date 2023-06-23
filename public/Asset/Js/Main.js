var input = $("#phone-number");
input.intlTelInput();

input.on("countrychange", function() {
  input.val('')
});

var input = document.querySelector("#phone-number");
  window.intlTelInput(input, {
    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/utils.js",
  });


  $('.offers-tablinks').click(function(){
let compare=$(this).attr('data-name');
$('.offers-tabcontent').each(function(){
   if(compare ==  $(this).attr('id')){
     alert('active')
   }
})
  });

  $('#contact-section').attr('src','/assets/d4869f7f/img/form-ratings/contact-form-background.webp')