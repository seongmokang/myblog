var time=500;
$(function () {
// text로 시작하는 모든 id를 숨김
$("[class^=panel]").hide();

});

$(".flip").click(function() {
 $(".panel").slideToggle(time);
});
$(".flip2").click(function() {
 $(".panel2").slideToggle(time);
});
$(".flip3").click(function() {
 $(".panel3").slideToggle(time);
});
$(".panel").dblclick(function() {//더블클릭
 $(".panel1").slideToggle(time);
});
$(".panel2").dblclick(function() {
 $(".panel12").slideToggle(time);
});
$(".panel3").dblclick(function() {
 $(".panel13").slideToggle(time);
});

//javascript
$(document).ready( function() {

	$('.photo_content img').hover(
	    function() {
	        $(this).animate({ 'zoom': 1.3 }, 400);
	    },
	    function() {
	        $(this).animate({ 'zoom': 1 }, 400);
	    });
});
