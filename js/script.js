$(document).ready(function() {
    $("#textboxes h1, #textboxes h2, #textboxes h3").each(function(i) {
        var current = $(this);
        current.attr("id", "title" + i);
        $("nav ul").append("<li"+" class='" + current.prop("tagName") + "'><a id='link" + i + "' href='#title" + i + "'>" + current.html() + "</a></li>");
    });
});

// Text boxes
$('nav button').click(function(e){
	e.preventDefault();
	var opener = $(this),
	oclass = opener.attr('class');
	pid = $('#' + oclass);
	$('body').toggleClass(oclass);
	pid.toggle();
});


