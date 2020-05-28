/*global jQuery*/
(function ($) {
    $(document).ready(function () {
        //kør funktionen når siden er loaded 

/ Din jQuery kode /
$('.button1').click(function() {
    $('#id01').slideToggle();
    $(this).text(function(i, text){
          return text === "Skjul formular" ? "Tilmeld dig" : "Skjul formular";
      })
} );

$('.newsletter-form .newsletter-form-email').keyup(function(event){	
   var emailInput = $(this),
       insertedEmail = emailInput.val(),
       atPosition = insertedEmail.indexOf("@");
   dotPosition = insertedEmail.lastIndexOf(".");
   //check om der er bruget et "@" og "."
   if (atPosition< 1 || dotPosition<atPosition+2 ) {
      //hvis der ikke er tastet en valid email
      //skjul submit button
        $('.newsletter-form').removeClass('is-active');
   } else {
      //hvis der er tastet en valid email
      //Vis submit button
      $('.newsletter-form').addClass('is-active');
   }
});


    });
}(jQuery));