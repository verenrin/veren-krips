<?php 
    if (!defined('BASE')) die('<h1 class="try-hack">Restricted access!</h1>');
?>


<div id="containergraphNum4" class="bg-light p-4 rounded">
    <h5>Graph 4</h5>
    <p><em>Average nilai teori.</em></p>
    <div id="loadergraphNum4" class="d-flex justify-content-center">
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <canvas id="graphNum4" ></canvas>
</div>

<script>
$.get($('#BASEURL').val() + "api/get.php?context=graphfour", function(data, status){
    const chartData = JSON.parse(data);
    var ctx = document.getElementById('graphNum4');
    $("#loadergraphNum4").removeClass('d-flex').hide();
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: chartData,
        options: {
            // aspectRatio: 1, // to make the chart square shapped
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: false
                    }
                }]
            },
        }
    });
});

</script>
