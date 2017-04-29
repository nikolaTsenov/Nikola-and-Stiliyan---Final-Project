/**
 * Div#errors disappears on click outside of it
 */
$(function() {
  $(document).on("click",function (e) {
     if (e.target.id=="DivA") {
       $("#errorMess").fadeToggle(200);
       e.stopPropagation();
       return false;
     }
     else if ($("#errorMess").is(":visible")) {
       $("#errorMess").fadeOut(200);
     }
  });
});