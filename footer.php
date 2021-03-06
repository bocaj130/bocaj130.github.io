<br />
<br />

</div>

</body>
</html>

<script>
// Prevent zoom
// https://stackoverflow.com/questions/27116221/prevent-zoom-cross-browser
// https://jsfiddle.net/VijayDhanvai/4m3z3knd/
// I changed the first event.ctrlKey to event.metaKey to allow functionality on Mac OS
$(document).ready(function(){
	$(document).keydown(function(event) {
	    	    if (event.metaKey==true && (event.which == '61' || event.which == '107' || event.which == '173' || event.which == '109'  || event.which == '187'  || event.which == '189'  ) ) {
        //alert('disabling zooming'); // displays message to user
		event.preventDefault();
		// 107 Num Key  +
		//109 Num Key  -
		//173 Min Key  -/_
		// 61 Plus key  +/=
	     }
	});

	$(window).bind('mousewheel DOMMouseScroll', function (event) {
	       if (event.ctrlKey == true) {
           //alert('disabling zooming');  // displays message to user
		   event.preventDefault();
	       }
	});
});

// Display live time
// Use in div id="time"
// https://stackoverflow.com/questions/18229022/how-to-show-current-time-in-javascript-in-the-format-hhmmss
function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    // add a zero in front of numbers <10 -- FIX THIS - after midnight h=0 not h=00
    m = checkTime(m);
    s = checkTime(s);
    // make the colon blink on if second counter is odd
    if (s % 2 == 0) {
    	document.getElementById('time').innerHTML = h + " " + m;
    } else {
    	document.getElementById('time').innerHTML = h + ":" + m;
    }
    t = setTimeout(function () {
        startTime()
    }, 500);
}

// fade in the page on load
function fadePage() {
	document.getElementById('fadeIn').style.opacity = "0";
	setTimeout(function(){
		 document.getElementById('fadeIn').style.display = 'none';
	}, 1000);	
}

// Create new notes page
// https://www.w3schools.com/jsref/met_document_createelement.asp
// https://www.w3schools.com/jsref/tryit.asp?filename=tryjsref_document_createelement4
function newNotesPage() {
	//create RFA: text
	//var p = document.createElement("p");
	var rfa = document.createTextNode("RFA: ");
	//p.appendChild(rfa);
	//create <select> and <option>s
    var select = document.createElement("select");
    select.innerHTML =  "<option value='' disabled selected>Select...</option>" +
						"<option value='newPtExam'>New patient exam</option>" +
						"<option value='reviewExam'>Review exam</option>" +
						"<option value='tx'>Treatment</option>" +
						"<option value='emergency'>Emergency</option>" +
						"<option value='review'>Review</option>";
    event.currentTarget.style.display = 'none'; //hide the 'new page' button
    document.getElementById("notes").appendChild(rfa); //add the new <p> to the notes div
    document.getElementById("notes").appendChild(select); //add the new <select> to the notes div
}


startTime();
openDefaultTab();
//tabResize();
//$(window).resize();
fadePage(); // must be last
</script>