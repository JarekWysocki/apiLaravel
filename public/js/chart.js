var url = '/chart';
let xValues = [];
let yValues = [];

$.get(url, (data) => {
  data.forEach(element => {
    xValues.push(element.name);
    yValues.push(element.posts);
  }) 
var barColors = ["red", "green","blue","orange","brown"];
new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Most active users"
    }
  }
});
});