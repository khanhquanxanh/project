<script>
    var chart;
    /**
 * Request data from the server, add it to the graph and set a timeout 
 * to request again
 */
function requestData() {
    $.ajax({
        url: 'datajson.php',
        success: function(point) {
            var series = chart.series[0];
            
                shift = series.data.length > 20; // shift if the series is 
                                                 // longer than 20

            // add the point
            chart.series[0].addPoint(point, true, shift);
            
            // call it again after one second
            setTimeout(requestData, 5000);    
        },
        cache: false
    });
}
document.addEventListener('DOMContentLoaded', function() {
    chart = Highcharts.chart('container', {
        chart: {
            type: 'spline',
            events: {
                load: requestData
            }
        },
        title: {
            text: 'Live Temp'
        },
        xAxis: {
            type: 'datetime',
            tickPixelInterval: 150,
            maxZoom: 20 * 1000
        },
        yAxis: {
            minPadding: 0.2,
            maxPadding: 0.2,
            title: {
                text: 'Temperature (°C)',
                margin: 80
            }
        },
        series: [{
            name: 'Temp',
            data: []
        }]
    });        
});
</script>