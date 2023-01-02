<?php 
include "./classes/connection.class.php";
include "./classes/dashboard.class.php";
include "./controller/dashContr.php";
$num = new DashboardContr;
?>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawStuff);

    function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
        ['', 'Cantidad'],
        ["Likes ", <?php $num->DisplayLikes(); ?>], 
        ["Posts ", <?php $num->DisplayNumber(); ?>]
        ]);

        var options = {
        title: 'Blog Performance',
        width: 1000,
        legend: { position: 'none' },
        bars: 'horizontal',
        axes: {
            x: {
            0: { side: 'top', label: 'Amount'}
            }
        },
        bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
    };
    </script>
</head>
<body>
    <div class="dashboard_bg">
        <h1 class="dash_title">YOUR DASHBOARD</h1>
        <div id="top_x_div" class="chart" style="width: 900px; height: 500px;"></div>
            <div class="stadistics">
                <div class="stadistic_box">
                    <div>
                        <h3><?php $num->DisplayLikes(); ?></h3>
                    </div>
                    <h2>Likes</h2>
                </div>
                <div class="stadistic_box">
                    <div>
                        <h3><?php $num->DisplayNumber(); ?></h3>
                    </div>
                    <h2>Posts</h2>
                </div>
            </div>
    </div>
</body>

