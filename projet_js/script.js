var days = [1,2,3,4,5,6,7,8,9,10];
// For drawing the lines
var d1p = document.getElementById("d1p").value;
var d1pp = parseInt(d1p);
var d2p = document.getElementById("d2p").value;
var d2pp = parseInt(d2p);
var d3p = document.getElementById("d3p").value;
var d3pp = parseInt(d3p);
var d4p = document.getElementById("d4p").value;
var d4pp = parseInt(d4p);
var d5p = document.getElementById("d5p").value;
var d5pp = parseInt(d5p);
var d6p = document.getElementById("d6p").value;
var d6pp = parseInt(d6p);
var d7p = document.getElementById("d7p").value;
var d7pp = parseInt(d7p);
var d8p = document.getElementById("d8p").value;
var d8pp = parseInt(d8p);
var d9p = document.getElementById("d9p").value;
var d9pp = parseInt(d9p);
var d10p = document.getElementById("d10p").value;
var d10pp = parseInt(d10p);

var d1i = document.getElementById("d1i").value;
var d1ii = parseInt(d1i);
var d2i = document.getElementById("d2i").value;
var d2ii = parseInt(d2i);
var d3i = document.getElementById("d3i").value;
var d3ii = parseInt(d3i);
var d4i = document.getElementById("d4i").value;
var d4ii = parseInt(d4i);
var d5i = document.getElementById("d5i").value;
var d5ii = parseInt(d5i);
var d6i = document.getElementById("d6i").value;
var d6ii = parseInt(d6i);
var d7i = document.getElementById("d7i").value;
var d7ii = parseInt(d7i);
var d8i = document.getElementById("d8i").value;
var d8ii = parseInt(d8i);
var d9i = document.getElementById("d9i").value;
var d9ii = parseInt(d9i);
var d10i = document.getElementById("d10i").value;
var d10ii = parseInt(d10i);


var a = [d1pp,d2pp,d3pp,d4pp,d5pp,d6pp,d7pp,d8pp,d9pp,d10pp];
var e = [d1ii,d2ii,d3ii,d4ii,d5ii,d6ii,d7ii,d8ii,d9ii,d10ii];



var ctx = document.getElementById("myChart1");
var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: days,
    datasets: [
      { 
        data: a,
        label: "Participant" ,//for label we can not but we want color
        borderColor: "#3e95cd",
		fill: false
      },
      { 
        data: e,
        label: "Intéressant" ,//for label we can not but we want color
        borderColor: "#4e95cd",
    fill: false
      }
    ]
  }
});