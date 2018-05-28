// Resize the tab content to fit page
// https://jsfiddle.net/maniator/JVKbR/
/*$(window).resize(function(){
   var height = $("#container").height() - $(".tab").height() - 16
   $('.tabcontent').height(height);
})*/

function openCity(evt, cityName, tabSet) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent " + tabSet);
    for (i = 0; i < tabcontent.length; i++) {
        	tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks " + tabSet);
    for (i = 0; i < tablinks.length; i++) {
        	tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.target.className += " active"; // changed currentTarget to target
    
    // Set cookie for default tab
    document.cookie = "defaulttab" + tabSet + "=" + cityName + ";";
    
    // https://jsfiddle.net/maniator/JVKbR/
    //$(window).resize();
}

// Open default tabs on page load
function openDefaultTab() {
	// get cookies of last tabs visited
	var left = getCookie('defaulttableft');
	var right = getCookie('defaulttabright');
	// open last tabs visited
	if (left == "" || left == null) {
		$("#chartBtn").trigger('click'); // click on chart as default
	} else {
		$('#' + left + "Btn").trigger('click');
	}
	if (right == "" || right == null) {
		$("#planBtn").trigger('click'); // click on plan as default
	} else {
		$('#' + right + "Btn").trigger('click');
	}
}

// Return the value of a specified cookie
function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

// https://jsfiddle.net/maniator/JVKbR/
//$(window).resize(); //on page load

// Function to open new window containing window_src, 100x400
// https://stackoverflow.com/questions/400475/how-do-i-launch-a-new-browser-window-with-no-toolbars
function openWindow(window_src){
	window.open(window_src, 'newwindow', config='height=screen.height, width=screen.width, '
		+ 'toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, '
		+ 'directories=no, status=no, titlebar=no');
}

// PERIO CHARTS
var ctx = $("#line-chart");
var lineChart = new Chart(ctx, {
	type: 'line',
	data: {
		labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
		datasets: [
			{
				label: "2015",
				data: [10,8,6,5,12,8,16,17,6,7,6,10]
			}
		]
	}
});









































