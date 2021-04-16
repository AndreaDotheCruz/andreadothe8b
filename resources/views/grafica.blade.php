<script data-require="chart.js@*" data-semver="1.0.2"
src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>

<link rel="stylesheet" href="style.css" />

<canvas id="buyers" width="600" height="400"></canvas>
        <script>

        var buyerData = {

        labels : ["January","February","March","April","May","June"],

        datasets : [

        {

        fillColor : "rgba(172,194,132,0.4)",

        strokeColor : "#ACC26D",

        pointColor : "#fff",

        pointStrokeColor : "#9DB86D",

        data : [203,156,99,251,305,247]

        }

        ]

        }

        var buyers = document.getElementById('buyers').getContext('2d');

        new Chart(buyers).Line(buyerData, {

        animation: true,

        animationSteps: 100,

        animationEasing: "easeOutQuart",

        scaleFontSize: 16,

        responsive: true,

        showTooltip: true,

        tooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",

        scaleShowGridLines : false,

        bezierCurve : false,

        pointDotRadius : 5,

        });

        </script>