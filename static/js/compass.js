$(document).ready(function () {
    $('.flights').click(function () {
        $("#999").removeClass("bg-white").addClass("bg-danger");
        $("#998").removeClass("text-danger").addClass("text-white");
        $("#997").removeClass("bg-danger").addClass("bg-white");
        $("#996").removeClass("text-white").addClass("text-danger");
        $("#995").removeClass("bg-danger").addClass("bg-white");
        $("#994").removeClass("text-white").addClass("text-danger");
        $("#993").removeClass("bg-danger").addClass("bg-white");
        $("#992").removeClass("text-white").addClass("text-danger");
    });

    $('.trains').click(function () {
        $("#999").removeClass("bg-danger").addClass("bg-white");
        $("#998").removeClass("text-white").addClass("text-danger");
        $("#997").removeClass("bg-white").addClass("bg-danger");
        $("#996").removeClass("text-danger").addClass("text-white");
        $("#995").removeClass("bg-danger").addClass("bg-white");
        $("#994").removeClass("text-white").addClass("text-danger");
        $("#993").removeClass("bg-danger").addClass("bg-white");
        $("#992").removeClass("text-white").addClass("text-danger");
    });

    $('.rentals').click(function () {
        $("#999").removeClass("bg-danger").addClass("bg-white");
        $("#998").removeClass("text-white").addClass("text-danger");
        $("#997").removeClass("bg-danger").addClass("bg-white");
        $("#996").removeClass("text-white").addClass("text-danger");
        $("#995").removeClass("bg-white").addClass("bg-danger");
        $("#994").removeClass("text-danger").addClass("text-white");
        $("#993").removeClass("bg-danger").addClass("bg-white");
        $("#992").removeClass("text-white").addClass("text-danger");
    });

    $('.hotels').click(function () {
        $("#999").removeClass("bg-danger").addClass("bg-white");
        $("#998").removeClass("text-white").addClass("text-danger");
        $("#997").removeClass("bg-danger").addClass("bg-white");
        $("#996").removeClass("text-white").addClass("text-danger");
        $("#995").removeClass("bg-danger").addClass("bg-white");
        $("#994").removeClass("text-white").addClass("text-danger");
        $("#993").removeClass("bg-white").addClass("bg-danger");
        $("#992").removeClass("text-danger").addClass("text-white");
    });




});


    var contents = ["Once a year, go someplace you’ve never been before.", "You don’t have to be rich to travel well.", "Investment in travel is an investment in yourself.", "We travel not to escape life, but for life not to escape us."];
    var i = 0;

    setInterval("changecontent()", 2000);

    function changecontent( )
    {
        document.getElementsByClassName("show1")[0].innerHTML = contents[i];

        i = i + 1;
        if (i == 4) {
            i = 0;
        }
    }
