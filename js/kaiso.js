jQuery(document).ready(function ($)
{

    $("#main-menu a").click(function (e)
    {
        e.preventDefault();

        $("html, body").animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 500);
    });

});
