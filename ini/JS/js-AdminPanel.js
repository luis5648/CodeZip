$(document).ready(function(){
 var item_num = $('nav li').length + 1;
 var btn_state = true;

 $('nav li').hover(function(){
   $(this).addClass('hover');
 },function(){
   $(this).removeClass('hover');
 });

 $('nav li').on('click',function(){
   if(btn_state){
     btn_state = !btn_state;
     $('nav li').removeClass('currentPage');
     $(this).addClass('currentPage');

     var i = $('nav li').index(this);
     $('article').removeClass('show');
     $('article').addClass('hide');
     $('article').eq(i).addClass('show');

     setTimeout(function(){
       btn_state = !btn_state;
     },500);
   }
 });


});



var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
