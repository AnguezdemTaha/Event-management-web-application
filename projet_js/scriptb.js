


var test1 = document.getElementById("tee1").value;
var test11 = parseInt(test1);

var test2 = document.getElementById("tee2").value;
var test22 = parseInt(test2);

var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
  type: 'bar',
    data: {
      labels: ["Participant", "Intéressant"],
      datasets: [
        {
          label: "Participant_Intéressant",
          backgroundColor: ["#3e95cd", "#8e5ea2"],
          data: [test11,test22]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'partipe_interese'
      }
    }
});