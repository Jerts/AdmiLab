function change_select(num){
  $(".pagination > .active").attr('class', 'waves-effect');
  $(num).parent().attr('class', 'active');
}

function menu_flecha(num){
  if($(num).hasClass("active")){
    $(num).children().text("keyboard_arrow_down");
  }else{
    $(num).children().text("keyboard_arrow_up");
  }
}

$(document).ready(function(){
  $('.collapsible').collapsible();
   $('.slider').slider();
});
