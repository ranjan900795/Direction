var contents = ["url('/static/img/wonder1.jpg')","url('/static/img/wonder2.jpg')","url('/static/img/wonder3.jpg')","url('/static/img/wonder4.jpg')","url('/static/img/wonder5.jpg')","url('/static/img/wonder6.jpg')","url('/static/img/wonder7.jpg')"];
var i = 0;
	
setInterval ( "changecontent()", 3000 );

function changecontent( )
{
	document.getElementsByClassName("background_homepage")[0].style.backgroundImage = contents[i];
	
	i = i + 1;
	if(i == 7){
		i = 0;
	}
}

$('.carousel').carousel({
  interval: 2000
})

