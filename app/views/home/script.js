google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var chartArray = [];
    var chartHeader = ['Dia', 'Valor'];
    chartArray.push(chartHeader);
    
    moviments.forEach((item)=>{
        console.log(item)	
        chartItem = [item.date, item.value];
        chartArray.push(chartItem);
    })

    var data = google.visualization.arrayToDataTable(chartArray);


    var options = {
    title: 'Company Performance',
    curveType: 'function',
    legend: { position: 'bottom' }
    };

    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

    chart.draw(data, options);
}