const menu = document.querySelector("#toggle-btn");

menu.addEventListener("click", function(){
    document.querySelector("#sidebar").classList.toggle("expand");
});

var xyValues = [
    {x:50, y:7},
    {x:60, y:8},
    {x:70, y:8},
    {x:80, y:9},
    {x:90, y:9},
    {x:100, y:9},
    {x:110, y:10},
    {x:120, y:11},
    {x:130, y:14},
    {x:140, y:14},
    {x:150, y:15}
  ];
  
  new Chart("myChart", {
    type: "scatter",
    data: {
      datasets: [{
        pointRadius: 4,
        pointBackgroundColor: "rgb(0,0,255)",
        borderColor: "rgb(0,0,255)",  // Line color
        borderWidth: 2,              // Line width
        data: xyValues,
        showLine: true               // Enable the line connecting points
      }]
    },
    options: {
        scales: {
          x: { min: 40, max: 160 },
          y: { min: 6, max: 16 }
        }
      }
      
  });