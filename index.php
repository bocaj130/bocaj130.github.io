<?php require("header.php");?>

<div id="fadeIn">Loading...</div>

<div id="top">
	<div id="patient_box">
		<div style="display:table-cell; vertical-align:middle; padding:0; margin:0;">
			<center>
				<b>Mr John Smith</b>
				<p>34 years 5 months</p>
			</center>
			<div class="nhs">NHS</div><p style="margin:0px; vertical-align:middle; line-height:0.9; float:left; padding-top:1px;">943-476-5919</p>
		</div>
	</div>
	<div id="apptsBox">
		<div class="late">14:30 Mr KS. RFA: review denture</div>
		<div class="overdue">15:00 Mr DN. RFA: perio</div>
		<div class="arrived">15:30 Mrs TP. RFA: filling</div>
		<div class="">15:30 Mr DA. RFA: RSD</div>
		<div class="cancel">15:30 Mrs CG. RFA: imps for SOG</div>
	</div>
	<div id="time" style="float:right; margin-top:10px;"></div>
	<!--<div id="menu">
	
		<script>
			function menuClick(idName) {
				i = 0;
				while (i != null) {
					var x = document.getElementsByClassName("menu_item");
					x[i].style.borderBottom = "2px solid #ccc";
					i++;
					document.getElementById(idName).style.borderBottom = "2px solid white";
				}
			}
		</script>
	
		<a href="#" onclick="menuClick('menu_chart');"><div class="menu_item" id="menu_chart">Chart</div></a><a href="#" onclick="menuClick('menu_perio');"><div class="menu_item" id="menu_perio">Perio</div></a><a href="#" onclick="menuClick('menu_xray');"><div class="menu_item" id="menu_xray">X-ray</div></a>
		<a href="#" onclick="menuClick('menu_medical');"><div class="menu_item" id="menu_medical">Medical</div></a>
		<a href="#" onclick="menuClick('menu_personal');"><div class="menu_item" id="menu_personal">Personal</div></a><a href="#" onclick="menuClick('menu_comms');"><div class="menu_item" id="menu_comms">Comms</div></a>
	</div>--!>
</div>

<div id="container">
    <div id="left_panel">
    	<div class="tab">
			<button class="tablinks firsttab left" onclick="openCity(event, 'chart', 'left')" id="chartBtn" style="margin-left: 10px;">Chart</button>
			<button class="tablinks left" onclick="openCity(event, 'perio', 'left')" id="perioBtn">Perio</button>
			<button class="tablinks left" onclick="openCity(event, 'xray', 'left')" id="xrayBtn">X-ray</button>
			<button class="tablinks left" onclick="openCity(event, 'med', 'left')" id="medBtn">Medical</button>
			<button class="tablinks left" onclick="openCity(event, 'pers', 'left')" id="persBtn">Personal</button>
			<button class="tablinks left" onclick="openCity(event, 'comms', 'left')" id="commsBtn">Comms</button>
		</div>
		
		<!-- Tab content -->
		<div id="chart" class="tabcontent left">
			<div>
				<!-- chart example -->	
				<svg width="auto" height="auto" style="position:absolute;" viewBox="0 0 2000 2000" preserveAspectRatio="xMidYMid meet">
				  <polygon points="5,5 195,5 195,195 5,195"
				  style="fill:white;stroke:black;stroke-width:5;" />
				  <polygon points="5,5 195,195"
				  style="fill:white;stroke:black;stroke-width:5;" />
				  <polygon points="195,5 5,195"
				  style="fill:white;stroke:black;stroke-width:5;" />
				  <polygon points="50,50 150,50 150,150 50,150"
				  style="fill:white;stroke:black;stroke-width:5;" />
				Sorry, your browser does not support inline SVG.
				</svg>
				<svg width="auto" height="auto" style="position:absolute;" viewBox="0 0 2000 2000" preserveAspectRatio="xMidYMid meet">
				  <polygon points="15,45 25,45 55,75 145,75 175,45 185,45 185,155 175,155 145,125 55,125 25,155 15,155"
				  style="fill:blue;stroke:black;stroke-width:5;" />
				Sorry, your browser does not support inline SVG.
				</svg>
			</div>
		</div>
		
		<div id="perio" class="tabcontent left">
			<p>Perio goes here.</p>
			<canvas id="line-chart"></canvas>
			<script>
				// http://www.chartjs.org/docs/latest/charts/line.html
				var ctx = $("#line-chart");
				var color=["#4778d9","#09ad7e"];
				var lineChart = new Chart(ctx, {
					type: 'line',
  					data: {
    					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    					datasets: [
     						{
        					label: "2015",
        					borderColor: color[1],
        					backgroundColor: color[1],
                 			pointBackgroundColor: color[1],
                 			pointBorderColor: color[1],
                 			pointHoverBackgroundColor: color[1],
                 			pointHoverBorderColor: color[1],
        					data: [10,8,6,5,12,8,16,17,6,7,6,10]
      						},
      						{
      						label: "2016",
      						borderColor: color[0],
      						backgroundColor: color[0],
                 			pointBackgroundColor: color[0],
                 			pointBorderColor: color[0],
                 			pointHoverBackgroundColor: color[0],
                 			pointHoverBorderColor: color[0],
      						data: [9,4,3,6,12,4,7,10,8,6,10,11]
      						}
    					]
  					}
				});
			</script>
			<img src="https://i.ytimg.com/vi/fq3xbKmjncY/maxresdefault.jpg" width="100%" />
			<img src="https://www.for.org/sites/default/files/diagnosis-photos/periochart.png" width="100%" />
		</div>
		
		<div id="xray" class="tabcontent left">
			<!-- HIDDEN XRAY ORIGINALS -->
			<img id="pan" src="images/OPG.jpg" width="100%" style="display: none;" />
			
			<canvas id="myCanvas" width="600" height="300"
			style="border:1px solid red;">
			Your browser does not support the HTML5 canvas tag.</canvas>

			<br />
			<!--<button onclick="drawXray()">Draw img</button><br />-->
			<button onclick="clickInvertXray()">Invert</button> <br />
			<!--<input type="checkbox"><br />-->
			<!--<button onclick="contrastXray()">Contrast</button>-->
			<form>Contrast: <input type="range" name="points" min="-100" max="180" value="0" id="xraySlider" >
			<button onclick="document.getElementById('xraySlider').value = '0'; document.getElementById('output').innerHTML = '0'; contrastXray();">Reset</button>
			<span id="output">0</span></form>
			<script>
				// change contrast on slider change
				var xrayContrast = document.getElementById('xraySlider');
				xrayContrast.addEventListener('change', contrastXray);
				
				// slider
				// https://stackoverflow.com/questions/5165579/onchange-event-for-html5-range
				$("#xraySlider").on("input", function() {
					document.getElementById('output').innerHTML = document.getElementById('xraySlider').value;
					contrastXray();
				});
				
				// globals
				var inverted = "false";
				
				// draw the xray on page load
				window.onload = function() {
					drawXray();
				}
				
				function drawXray() {
					var c = document.getElementById("myCanvas");
					var ctx = c.getContext("2d");
					var img = document.getElementById("pan");
					var width = 600;
					var height = 300;
					ctx.drawImage(img, 0, 0, width, height);
				}
				function clickInvertXray() {
					// invert xray
					invertXray();
					// change global var
					if (inverted == "false") {
						inverted = "true";
					} else {
						inverted = "false";
					}
				}
				function invertXray() {
					var c = document.getElementById("myCanvas");
					var ctx = c.getContext("2d");
					var imgData = ctx.getImageData(0, 0, c.width, c.height);
					// invert colours
					var i;
					for (i = 0; i < imgData.data.length; i += 4) {
						imgData.data[i] = 255 - imgData.data[i];
						imgData.data[i+1] = 255 - imgData.data[i+1];
						imgData.data[i+2] = 255 - imgData.data[i+2];
						imgData.data[i+3] = 255;
					}
					ctx.putImageData(imgData, 0, 0);
				}
				function contrastXray() {
					// reset xray
					drawXray();
					// load canvas data
					var c = document.getElementById("myCanvas");
					var ctx = c.getContext("2d");
					var imgData = ctx.getImageData(0, 0, c.width, c.height); //changed from c.width c.height
					// change contrast
					var cont = Number(document.getElementById("xraySlider").value); //get contrast value
					var newImgData = contrastImage(imgData, cont);
					ctx.putImageData(newImgData, 0, 0);
					// invert xray
					if (inverted == "true") {
						invertXray();
					}
				}
				// adjust canvas image contrast
				// https://stackoverflow.com/questions/10521978/html5-canvas-image-contrast
				function contrastImage(imageData, contrast) {
					var data = imageData.data;
					var factor = (259 * (contrast + 255)) / (255 * (259 - contrast));
					for(var i=0;i<data.length;i+=4) {
						data[i] = factor * (data[i] - 128) + 128;
						data[i+1] = factor * (data[i+1] - 128) + 128;
						data[i+2] = factor * (data[i+2] - 128) + 128;
					}
					return imageData;
				}
			</script>
		</div>
		
		<div id="med" class="tabcontent left">
			<table id="medical">
				<tr>
					<th colspan="2" style="text-align: left;">Question</th>
					<th>Yes</th>
					<th>No</th>
				</tr>
				<tr>
					<td>1.</td>
					<td>
						Are you currently recieving any medical or hospital treatment?
						<br />
						<p contenteditable="true" class="textbox" id="notesQ1">Specify ... </p>
					</td>
					<td><input type="radio" name="q1" value="1" onclick="document.getElementById('notesQ1').style.display = 'block';"></td>
					<td><input type="radio" name="q1" value="2" onclick="document.getElementById('notesQ1').style.display = 'none';""></td>
				</tr>
				<tr>
					<td>2.</td>
					<td>Are you taking any tablets or medication? (e.g. inhalers)</td>
					<td><input type="radio" name="q2" value="1"></td>
					<td><input type="radio" name="q2" value="2"></td>
				</tr>
				<tr>
					<td>3.</td>
					<td>Are you allergic to anything? (e.g. penicillin, latex)</td>
					<td><input type="radio" name="q3" value="1"></td>
					<td><input type="radio" name="q3" value="2"></td>
				</tr>
				<tr>
					<td>4.</td>
					<td>Are you pregnant?</td>
					<td><input type="radio" name="q4" value="1"></td>
					<td><input type="radio" name="q4" value="2"></td>
				</tr>
				<tr>
					<td>5.</td>
					<td>Have you ever had any problems with your heart? (e.g. a heart murmur, rheumatic fever)</td>
					<td><input type="radio" name="q5" value="1"></td>
					<td><input type="radio" name="q5" value="2"></td>
				</tr>
				<tr>
					<td>6.</td>
					<td>Have you ever had raised blood pressure, angina, heart attack, or thrombosis?</td>
					<td><input type="radio" name="q6" value="1"></td>
					<td><input type="radio" name="q6" value="2"></td>
				</tr>
				<tr>
					<td>7.</td>
					<td>Have you ever had hepatitis, jaundice, or HIV?</td>
					<td><input type="radio" name="q7" value="1"></td>
					<td><input type="radio" name="q7" value="2"></td>
				</tr>
				<tr>
					<td>8.</td>
					<td>Have you ever had chest problems? (e.g. asthma, bronchitis, tuberculosis)</td>
					<td><input type="radio" name="q8" value="1"></td>
					<td><input type="radio" name="q8" value="2"></td>
				</tr>
				<tr>
					<td>9.</td>
					<td>Have you ever had an operation or illness treated in hospital?</td>
					<td><input type="radio" name="q9" value="1"></td>
					<td><input type="radio" name="q9" value="2"></td>
				</tr>
				<tr>
					<td>10.</td>
					<td>Have you ever been diagnosed with epilepsy?</td>
					<td><input type="radio" name="q10" value="1"></td>
					<td><input type="radio" name="q10" value="2"></td>
				</tr>
				<tr>
					<td>11.</td>
					<td>Have you ever been diagnosed with diabetes?</td>
					<td><input type="radio" name="q11" value="1"></td>
					<td><input type="radio" name="q11" value="2"></td>
				</tr>
				<tr>
					<td>12.</td>
					<td>Have you ever undergone brain surgery, received growth hormone treatment before the mid-80s, or do you have a close relative with CJD?</td>
					<td><input type="radio" name="q12" value="1"></td>
					<td><input type="radio" name="q12" value="2"></td>
				</tr>
				<tr>
					<td>13.</td>
					<td>Have you ever had prolonged bleeding following a tooth extraction or other surgery?</td>
					<td><input type="radio" name="q13" value="1"></td>
					<td><input type="radio" name="q13" value="2"></td>
				</tr>
				<tr>
					<td>14.</td>
					<td>Have you ever had a problem with local or general anaesthetic?</td>
					<td><input type="radio" name="q14" value="1"></td>
					<td><input type="radio" name="q14" value="2"></td>
				</tr>
				<tr>
					<td>15.</td>
					<td>Are there any other problems that might be relevant?</td>
					<td><input type="radio" name="q15" value="1"></td>
					<td><input type="radio" name="q15" value="2"></td>
				</tr>
				<tr>
					<td>16.</td>
					<td>Have you ever been a smoker?</td>
					<td><input type="radio" name="q16" value="1"></td>
					<td><input type="radio" name="q16" value="2"></td>
				</tr>
				<tr>
					<td>17.</td>
					<td>Do you regularly drink alcohol?</td>
					<td><input type="radio" name="q17" value="1"></td>
					<td><input type="radio" name="q17" value="2"></td>
				</tr>
			</table>
		</div>
		
		<div id="pers" class="tabcontent left">
			<div class="persRow">
				<div class="persCol">
					<div style="display: flex; flex-direction: row;">						
						<span>
							ID:<br />
							Name:<br />
							Title:<br />
							Scheme:<br />
							DOB:<br />
							Age:<br />
						</span>
						<span>
							01234<br />
							SMITH, John<br />
							Dr<br />
							NHS<br />
							01/01/1970<br />
							48<br />
						</span>
					</div>
					<div>
						Home address:<br />
						Poplar Farm<br />
						61 The Lanes<br />
						Over<br />
						CAMBRIDGE<br />
						CB24 5NQ<br />
						<br />
						Billing address: same<br />
					</div>
					<div>
						<p>Home tel:</p>
						<p>01189 998 819</p>
						<br />
						<p>Work tel:</p>
						<p>01189 998 819</p>
						<br />
						<p>Mobile:</p>
						<p>07713 998 819</p>
					</div>
					<div>
						<p>Email:</p>
						<p>JSmith@gmail.com</p>
					</div>
				</div>
				
				<div class="persCol">
					<div>
						<p>Clinicians</p>
						<p>Dentist: Dr J. L. Howard</p>
						<p>Hygienist: Mrs J. Smith</p>
					</div>
					<div>
						<p>Appointments</p>
						<p>Last: x</p>
						<p>Next: x</p>
					</div>
					<div>
						<p>Family members:</p>
						<p>Tom Smith</p>
						<p>Jaqui Smith</p>
					</div>
				</div>
			</div>
		</div>
		
		<div id="comms" class="tabcontent left">
			<p>Communications go here.</p>
		</div>
		
    </div>
    
    <!-- RIGHT PANEL -->
    
    <div id="right_panel">
        <div id="drag"></div> 
        
        <!-- Tab links -->
		<div class="tab">
			<button class="tablinks right" onclick="openCity(event, 'dx', 'right')" id="dxBtn" style="margin-left: 0px;">Diagnosis</button>
			<button class="tablinks right" onclick="openCity(event, 'plan', 'right')" id="planBtn">Plan</button>
			<button class="tablinks right" onclick="openCity(event, 'notes', 'right')" id="notesBtn">Notes</button>
		</div>

		<!-- Tab content -->
		<div id="dx" class="tabcontent right">
		  <p>Diagnosis goes here.</p>
		  <a href="#" onclick="openWindow('http://localhost:8888/dentalnotes/#');">x</a>
		  <br /><hr /><br />
		  Colours:
		  <button onClick="changeColorScheme('colorDarkBlue');">Dark blue</button><br />
		  <button onClick="changeColorScheme('colorBlue');">Blue</button><br />
		  <button onClick="changeColorScheme('colorBrightBlue');">Bright blue</button><br />
		  <button onClick="changeColorScheme('colorLightBlue');">Light blue</button><br />
		  <button onClick="changeColorScheme('colorAquaBlue');">Aqua Blue</button><br />
		  
		  <button onClick="changeColorScheme('colorDarkGreen');">Dark green</button><br />
		  <button onClick="changeColorScheme('colorGreen');">Green</button><br />
		  <button onClick="changeColorScheme('colorLightGreen');">Light green</button><br />
		  <button onClick="changeColorScheme('colorAquaGreen');">Aqua Green</button><br />
		  
		  <button onClick="changeColorScheme('colorPurple');">Purple</button><br />
		  <button onClick="changeColorScheme('colorDarkPink');">Dark pink</button><br />
		  <button onClick="changeColorScheme('colorPink');">Pink</button><br />
		  
		  <button onClick="changeColorScheme('colorDarkRed');">Dark red</button><br />
		  <button onClick="changeColorScheme('colorRed');">Red</button><br />
		  
		  <button onClick="changeColorScheme('colorOrange');">Orange</button><br />
		  <button onClick="changeColorScheme('colorWarmYellow');">Warm yellow</button><br />
		  <button onClick="changeColorScheme('colorYellow');">Yellow</button><br />
		  <script> //https://stackoverflow.com/questions/9153718/change-the-style-of-an-entire-css-class-using-javascript
		  	function changeColorScheme(color) {
		  		
		  		// Create a cookie to remember the color choice
		  		//if getCookie(color)
		  		document.cookie = "colorScheme=" + color;
		  		
		  		var colors = [ // define all the colors in an array
					"colorDarkBlue", 
					"colorBlue", 
					"colorBrightBlue",
					"colorLightBlue",
					"colorAquaBlue",
				
					"colorDarkGreen",
					"colorGreen",
					"colorLightGreen",
					"colorAquaGreen",
					
					"colorPurple",
					"colorDarkPink",
					"colorPink",
					
					"colorDarkRed",
					"colorRed",
					
					"colorOrange",
					"colorWarmYellow",
					"colorYellow"
				];
				var index = colors.indexOf(color); // find the position of the color to add to the element
				if (index > -1) {
					colors.splice(index, 1); // remove it from the array
				}
				var selects = document.getElementsByTagName("button");
				for (var i = 0, il = selects.length;i<il;i++){ // loop through all 'button' elements
					for (var x = 0; x < colors.length; x++) { // loop through 'colors' array
						selects[i].classList.remove(colors[x]); // remove each color in 'colors' array
					}
					selects[i].classList.add(color); // add the desired color
				}
				console.log(selects);
				var selects = document.getElementsByTagName("body");
				for (var i = 0, il = selects.length;i<il;i++){ // loop through all 'body' elements
					for (var x = 0; x < colors.length; x++) { // loop through 'colors' array
						selects[i].classList.remove(colors[x]); // remove each color in 'colors' array
					}
					selects[i].classList.add(color); // add the desired color
				}
			}
			changeColorScheme(getCookie("colorScheme"));
		  </script>
		</div>

		<div id="plan" class="tabcontent right">
			<form action="#">
				<p>
					<input type="checkbox" id="test1" checked="checked" disabled="disabled" />
					<label for="test1">Full exam</label>
				</p>
				<hr />
				<p>
					<input type="checkbox" id="test2" checked="checked" disabled="disabled" />
					<label for="test2">BPE</label>
				</p>
				<table class="bpe">
				  <tr>
					<td>2</td>
					<td>1</td> 
					<td>2</td>
				  </tr>
				  <tr>
					<td>3</td>
					<td>2</td>
					<td>2</td>
				  </tr>
				</table>
				<hr />
				<p>
					<input type="checkbox" id="test3" checked="checked" disabled="disabled" />
					<label for="test3">Radiographs (2 bitewings)</label>
				</p>
				<a href="#">
				<img src="http://drgstoothpix.com/wp-content/uploads/2011/07/twitter-practice-bitewing.jpg" width="100px" height="auto" />
				<img src="http://drgstoothpix.com/wp-content/uploads/2013/04/maxillary-left-third-molar-microdont-bitewing-radiograph.jpg" width="100px" height="auto" />
				</a>
				<p style="background-color: var(--color-yellow); border: 1px solid black;"><span style="font-size: 36px; vertical-align: -13%;">☢</span> Exposure factors: 0.16 &times 2</p>
				<p><span style="text-decoration:underline;">7654|</span></p>
				<p><span style="text-decoration:overline;">7654⎜</span></p>
				<p style="display: inline;">Post crown <span style="border-width: 1px 1px 0px 0px; border-style: solid; border-color: black; display: inline; font-family: Menlo; padding: 0px 3px 0px 3px;">4</span> with fibre post</p>
				<hr />
				<p>
					<input type="checkbox" id="test4" checked="checked" />
					<label for="test4">Full-mouth non-surgical debridement and prophylaxis</label>
				</p>
				<hr />
				<p>
					<input type="checkbox" id="test5" />
					<label for="test5">Customised OHI</label>
				</p>
			</form>
			<p>more text as placeholder</p>
			<p>ditto</p>
			<p>ditto2</p>
			<p>ditto3</p>
			<p>ditto4</p>
			<p>ditto5</p>
			<p>ditto6</p>
		</div>

		<div id="notes" class="tabcontent right">
			<span title="hover">RFA: </span>
			<select>
				<option value="" disabled selected>Select...</option>
				<option value="newPtExam">New patient exam</option>
				<option value="reviewExam">Review exam</option>
				<option value="tx">Treatment</option>
				<option value="emergency">Emergency</option>
				<option value="review">Review</option>
			</select>
			<a href="#">&#x270E; change</a>
			<p contenteditable="true" class="textbox">
		  		RFA: <br />
		  		PCO: <br />
		  		MH: 
		  	</p>
		  	<hr />
		  	<button onclick="newNotesPage()">Start new page</button>

		</div>
        
    </div>
</div>

<!-- Scripts -->
<script>
// Script for panels https://jsfiddle.net/T4St6/82/
var isResizing = false,
    lastDownX = 0;

$(function () {
    var container = $('#container'),
        left = $('#left_panel'),
        right = $('#right_panel'),
        handle = $('#drag');

    handle.on('mousedown', function (e) {
        isResizing = true;
        lastDownX = e.clientX;
    });

    $(document).on('mousemove', function (e) {
        // we don't want to do anything if we aren't resizing.
        if (!isResizing) 
            return;
        
        var offsetRight = container.width() - (e.clientX - container.offset().left);

        left.css('right', offsetRight);
        right.css('width', offsetRight);
    }).on('mouseup', function (e) {
        // stop resizing
        isResizing = false;
    });
});
</script>

<!--
<script>
// Script for draggable div https://jsfiddle.net/8ccw8gd9/
$(function() {
    $( ".draggable" ).draggable();
  });
</script>

<div class="draggable">
	<div class="alert">lol</div>
</div>--!>





<!--<?php
$conn3 = new mysqli($servername, $username, $password, $dbname);
if ($conn3->connect_error) {
    die("Connection failed: " . $conn3->connect_error);
}

$sql3 = "
SELECT icon, abbreviation, title, colour
FROM modules 
ORDER BY title;"
;
$result3 = mysqli_query($conn3, $sql3);

if (mysqli_num_rows($result3) >= 1) {
	echo "<div id='indexboxcontainer'>\r\n";
    while($row3 = mysqli_fetch_assoc($result3)) {
        echo "	<div class='indexbox' style='background-image: url(images/" . $row3["icon"] . ");' onclick='location.href=\"page.php/" . $row3["abbreviation"] . "/index\";'>\r\n		<span class='indexboxtext' style='color:" . $row3["colour"] . ";";
        //if ($row3["abbreviation"]=="Med" or $row3["abbreviation"]=="OS") {echo "text-shadow:0px 0px 10px gray;";} else {echo "text-shadow:0px 0px 10px white;";}
        echo "-webkit-text-stroke:1px black;";
        echo "'>" . $row3["title"] . "</span>\r\n	</div>\r\n";
    }
    echo "</div>";
} else {
    echo "<h1>Error</h1>";
}
?>-->

<?php require("footer.php"); ?>