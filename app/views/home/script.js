/*
* Usando o google charts para criar os gráficos.
* @author Alunos Luís Felipe Ries Pereira e Ana Clara Barcella Miskulin
* package home.script
* @since 0.1
*/
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

//função que monta os gráficos
function drawChart() {
    //Primeiro gráfico a ser construído, do tipo curve chart
    var chartArrayCurve = [];
    var chartHeaderCurve = ['Dia', 'Valor'];
    chartArrayCurve.push(chartHeaderCurve);
    
    moviments.forEach((item)=>{
        chartItem = [item.date, item.value];
        chartArrayCurve.push(chartItem);
    })

    var data = google.visualization.arrayToDataTable(chartArrayCurve);


    var options = {
    title: 'Performance da empresa:',
    curveType: 'function',
    legend: { position: 'bottom' }
    };

    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

    chart.draw(data, options);

    //Segundo gráfico a ser construído, do tipo pie chart

    var chartArrayPie = [];
    var chartHeaderPie = ['Tipo', 'Valor'];
    chartArrayPie.push(chartHeaderPie);
    
    moviments.forEach((item)=>{
        chartItem = [item.description, item.value];
        chartArrayPie.push(chartItem);
    })

    
    var data = google.visualization.arrayToDataTable(chartArrayPie);

    var options = {
        title: 'Serviços e renda:'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
}
