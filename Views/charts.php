<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">


<script>

window.onload = function () {

var options = {
	animationEnabled: true,
	title: {
		text: "GDP Growth Rate - 2016"
	},
	axisY: {
		title: "Growth Rate (in %)",
		suffix: "%"
	},
	axisX: {
		title: "Countries"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.0#"%"",
		dataPoints: [
			{ label: "Iraq", y: 10.09 },	
			{ label: "T & C Islands", y: 9.40 },
			{ label: "Nauru", y: 8.50 },
			{ label: "Ethiopia", y: 7.96 },	
			{ label: "Uzbekistan", y: 7.80 },
			{ label: "Nepal", y: 7.56 },
			{ label: "Iceland", y: 7.20 }
		]
	}]
};


$("#showChart").click(function() {
	
	$("#dialogBox").dialog({
		open: function(event,ui) {
			$(".ui-widget-overlay").bind("click", function(event,ui) {         
				$("#dialogBox").dialog("close");
			});
		},
		closeOnEscape: true,
		draggable: false,
		resizable: false,
		title: "GDP Growth Rate",
		width: 700,
		modal: true,
		show: 500
	});
	$(".ui-widget-overlay").css({"background-color": "#111111"});
	$("#chartContainer").CanvasJSChart(options);
});

}
</script>


<script>
window.onload = function () {

// Construct options first and then pass it as a parameter
var options1 = {
	animationEnabled: true,
	title: {
		text: "Chart inside a jQuery Resizable Element"
	},
	data: [{
		type: "column", //change it to line, area, bar, pie, etc
		legendText: "Try Resizing with the handle to the bottom right",
		showInLegend: true,
		dataPoints: [
			{ y: 10 },
			{ y: 6 },
			{ y: 14 },
			{ y: 12 },
			{ y: 19 },
			{ y: 14 },
			{ y: 26 },
			{ y: 10 },
			{ y: 22 }
			]
		}]
};

$("#resizable").resizable({
	create: function (event, ui) {
		//Create chart.
		$("#chartContainer1").CanvasJSChart(options1);
	},
	resize: function (event, ui) {
		//Update chart size according to its container size.
		$("#chartContainer1").CanvasJSChart().render();
	}
});

$("#showChart2").click(function() {
	
	$("#dialogBox").dialog({
		open: function(event,ui) {
			$(".ui-widget-overlay").bind("click", function(event,ui) {         
				$("#dialogBox").dialog("close");
			});
		},
		closeOnEscape: true,
		draggable: false,
		resizable: false,
		title: "GDP Growth Rate",
		width: 700,
		modal: true,
		show: 500
	});
	$(".ui-widget-overlay").css({"background-color": "#111111"});
	$("#chartContainer").CanvasJSChart(options);
});

}
</script>

<style>
	#showChart{
		background-color: #5bb85b;
		color: #ffffff;
		padding: 10px;
		border: 0px;
		border-radius: 8px;
		font-size: 18px;
		outline: none;
		cursor: pointer;
    } 
  	#container{
		position: fixed;
		top: 50%;
		width:100%;
		text-align: center;
		margin-top: -41px;
  	}
</style>

<script>
window.onload = function() {

var dataPoints = [];

var options =  {
	animationEnabled: true,
	theme: "light2",
	title: {
		text: "Daily Sales Data"
	},
	axisX: {
		valueFormatString: "DD MMM YYYY",
	},
	axisY: {
		title: "USD",
		titleFontSize: 24
	},
	data: [{
		type: "spline", 
		yValueFormatString: "$#,###.##",
		dataPoints: dataPoints
	}]
};

function addData(data) {
	for (var i = 0; i < data.length; i++) {
		dataPoints.push({
			x: new Date(data[i].date),
			y: data[i].units
		});
	}
	$("#chartContainer").CanvasJSChart(options);

}
$.getJSON("https://canvasjs.com/data/gallery/jquery/daily-sales-data.json", addData);


$("#showChart3").click(function() {
	
	$("#dialogBox").dialog({
		open: function(event,ui) {
			$(".ui-widget-overlay").bind("click", function(event,ui) {         
				$("#dialogBox").dialog("close");
			});
		},
		closeOnEscape: true,
		draggable: false,
		resizable: false,
		title: "GDP Growth Rate",
		width: 700,
		modal: true,
		show: 500
	});
	$(".ui-widget-overlay").css({"background-color": "#111111"});
	$("#chartContainer").CanvasJSChart(options);
});

}
</script>

</head>

<body>
<div id="container">
	<button id="showChart">Click to Show Chart in a Pop-up</button>
</div>

<div id="dialogBox" style="display: none;">
	<div id="chartContainer" class="dialog" style="height: 250px; width: 100%;"></div>
</div>

<div id="container">
	<button id="showChart2">Click to Show Chart in a Pop-up</button>
</div>
<div id="resizable" style="height: 370px;border:1px solid gray;">
	<div id="chartContainer1" style="height: 100%; width: 100%;"></div>
</div>

<div id="container">
	<button id="showChart3">Click to Show Chart in a Pop-up</button>
</div>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>

<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>

</html>