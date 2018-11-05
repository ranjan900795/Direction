$(document).ready(function () {
    $('.flights').click(function() {
        $("#999").removeClass("bg-white").addClass("bg-danger");
        $("#998").removeClass("text-danger").addClass("text-white");
        $("#997").removeClass("bg-danger").addClass("bg-white");
        $("#996").removeClass("text-white").addClass("text-danger");
        $("#995").removeClass("bg-danger").addClass("bg-white");
        $("#994").removeClass("text-white").addClass("text-danger");
        $("#993").removeClass("bg-danger").addClass("bg-white");
        $("#992").removeClass("text-white").addClass("text-danger");
    });
    
    $('.trains').click(function() {
        $("#999").removeClass("bg-danger").addClass("bg-white");
        $("#998").removeClass("text-white").addClass("text-danger");
        $("#997").removeClass("bg-white").addClass("bg-danger");
        $("#996").removeClass("text-danger").addClass("text-white");
        $("#995").removeClass("bg-danger").addClass("bg-white");
        $("#994").removeClass("text-white").addClass("text-danger");
        $("#993").removeClass("bg-danger").addClass("bg-white");
        $("#992").removeClass("text-white").addClass("text-danger");
    });
    
    $('.rentals').click(function() {
        $("#999").removeClass("bg-danger").addClass("bg-white");
        $("#998").removeClass("text-white").addClass("text-danger");
        $("#997").removeClass("bg-danger").addClass("bg-white");
        $("#996").removeClass("text-white").addClass("text-danger");
        $("#995").removeClass("bg-white").addClass("bg-danger");
        $("#994").removeClass("text-danger").addClass("text-white");
        $("#993").removeClass("bg-danger").addClass("bg-white");
        $("#992").removeClass("text-white").addClass("text-danger");
    });
    
    $('.hotels').click(function() {
        $("#999").removeClass("bg-danger").addClass("bg-white");
        $("#998").removeClass("text-white").addClass("text-danger");
        $("#997").removeClass("bg-danger").addClass("bg-white");
        $("#996").removeClass("text-white").addClass("text-danger");
        $("#995").removeClass("bg-danger").addClass("bg-white");
        $("#994").removeClass("text-white").addClass("text-danger");
        $("#993").removeClass("bg-white").addClass("bg-danger");
        $("#992").removeClass("text-danger").addClass("text-white");
    });

$('#myCarousel').carousel('1') // Will start sliding to the slide 1 and returns to the caller
$('#myCarousel').carousel('2') // !! Will be ignored, as the transition to the slide 1 is not finished !!
});


