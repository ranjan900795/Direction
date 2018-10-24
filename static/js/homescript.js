var contents = ["url('/static/img/hampi.jpg')","url('/static/img/indiagate.jpeg')","url('/static/img/jodhpur.jpg')","url('/static/img/kashmir.jpg')","url('/static/img/shimla.jpg')"];
var i = 0;
	
setInterval ( "changecontent()", 2000 );

function changecontent( )
{
	document.getElementsByClassName("background_homepage")[0].style.backgroundImage = contents[i];
	
	i = i + 1;
	if(i == 5){
		i = 0;
	}
}

$('.carousel').carousel({
  interval: 2000
})

