var contents = ["/static/img/hampi.jpg","/static/img/indiagate.jpeg","/static/img/jodhpur.jpg","/static/img/kashmir.jpg","/static/img/shimla.jpg"];
var i = 0;
	
setInterval ( "changecontent()", 2000 );

function changecontent( )
{
	document.getElementsByClassName("img")[0].src = contents[i];
	
	i = i + 1;
	if(i == 5){
		i = 0;
	}
}

$(document).ready(function() {
    $('.continue').click(function () {
        $('.continue').css("display","none");
        
        
    });
});

