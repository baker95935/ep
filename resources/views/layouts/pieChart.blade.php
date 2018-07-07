<!-- Pie Chart -->
<script>
let myChart = document.getElementById('myChart').getContext('2d');

// Global Options
Chart.defaults.global.defaultFontFamily = 'Lato';
Chart.defaults.global.defaultFontSize = 10;
Chart.defaults.global.defaultFontColor = '#777';

let massPopChart = new Chart(myChart, {
  type: 'doughnut', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
  data: {
      labels:['nicht erledigt','erledigt'],
      datasets: [{
      label: 'Fortschritte',
      data: [
        //SQL Abfrage - Erledigte Aufgaben / unerledigte Aufgaben -> Count
        {{$aufgabeNotDone}}
        ,
        {{$aufgabeDone}}
      ],
      //backgroundColor:'green',
      backgroundColor:[
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)'
      ],
      borderWidth:1,
      borderColor:'#FFF',
      hoverBorderWidth:3,
      hoverBorderColor:'#FFF'
    }]
  },
  options:{
    legend:{
      display:false,
      position:'right',
      labels:{
        fontColor:'#000'
      }
    },
    layout:{
      padding:{
        left:50,
        right:0,
        bottom:0,
        top:0
      }
    },
    tooltips:{
      enabled:true
    }
  }
});
</script>
