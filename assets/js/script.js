//JS Code For Right Click Disable 

$(document).on('click', 'ul li', function(){
  $(this).addClass('active').siblings().removeClass('active')
});
document.onkeydown=function(e) {
  if(event.keycode == 123) {
    return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
    return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
    return false;
  }
  if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
    return false;
  }
}
document.oncontextmenu=new Function("return false;");
