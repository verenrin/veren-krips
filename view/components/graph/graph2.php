<?php 
    if (!defined('BASE')) die('<h1 class="try-hack">Restricted access!</h1>');
?>


<div id="containergraphNum2" class="bg-light p-4 rounded">
    <h5>Graph 2</h5>
    <p><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dictum dapibus arcu eget condimentum.</em></p>
    <div id="loadergraphNum2" class="d-flex justify-content-center">
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <canvas id="graphNum2" ></canvas>
</div>

<script>
$.get($('#BASEURL').val() + "api/get.php?context=graph1-test", function(data, status){
    const chartData = JSON.parse(data);
    var ctx = document.getElementById('graphNum2');
    $("#loadergraphNum2").removeClass('d-flex').hide();
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: chartData,
        options: {
            aspectRatio: 1, // to make the chart square shapped
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
        }
    });
});

</script>
