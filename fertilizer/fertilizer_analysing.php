<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Watermelon Fertilizing Informations</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script>
        function myFunction() {
            var txt;
            if (confirm("Are you Sure?")) {
                window.location.href = 'truncatetable.php';
            } else {
                    die();
            }
            document.getElementById("submit").innerHTML = txt;
            }
    </script>
    <script>
$(document).ready(function () {
    showGraph1();
});
function showGraph1()
{
    {
        $.post("doughnutchart1.php",
        function (data)
        {
            console.log(data);
            var fertilizer_info = [];
            var amount = [];

            for (var i in data) {
                
                fertilizer_info.push(data[i].fertilizer_info);
                amount.push(data[i].amount);
            }

            var chartdata1 = {
                labels: fertilizer_info,
                datasets: [
                    {
                        label: "Fertilizer Recommendations (kilograms)",
                        backgroundColor: ["#ffd280", "#ff8080","#8080ff"],
                        borderColor: ["#ffd280", "#ff8080","#8080ff"],
                        hoverBackgroundColor: ["#ffd280", "#ff8080","#8080ff"],
                        hoverBorderColor: ["#ffd280", "#ff8080","#8080ff"],
                        fill: false,
                        data: amount
                    }
                ]
                
            };
            var graphTarget = $("#graphCanvas1");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata1
        
            });
            
        });
        
    }
    
}
</script>

<script>
$(document).ready(function () {
    showGraph2();
});
function showGraph2()
{
    {
        $.post("doughnutchart2.php",
        function (data)
        {
            console.log(data);
            var fertilizer_info2 = [];
            var amount2 = [];

            for (var i in data) {
                
                fertilizer_info2.push(data[i].fertilizer_info2);
                amount2.push(data[i].amount2);
            }

            var chartdata2 = {
                labels: fertilizer_info2,
                datasets: [
                    {
                        label: "Fertilizer Recommendations (kilograms)",
                        backgroundColor: ["#ffd280", "#ff8080","#8080ff"],
                        borderColor: ["#ffd280", "#ff8080","#8080ff"],
                        hoverBackgroundColor: ["#ffd280", "#ff8080","#8080ff"],
                        hoverBorderColor: ["#ffd280", "#ff8080","#8080ff"],
                        fill: false,
                        data: amount2
                    }
                ]
                
            };
            var graphTarget = $("#graphCanvas2");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata2
        
            });
            
        });
        
    }
    
}
</script>

<script>
$(document).ready(function () {
    showGraph3();
});
function showGraph3()
{
    {
        $.post("doughnutchart3.php",
        function (data)
        {
            console.log(data);
            var fertilizer_info3 = [];
            var amount3 = [];

            for (var i in data) {
                
                fertilizer_info3.push(data[i].fertilizer_info3);
                amount3.push(data[i].amount3);
            }

            var chartdata3 = {
                labels: fertilizer_info3,
                datasets: [
                    {
                        label: "Fertilizer Recommendations (kilograms)",
                        backgroundColor: ["#ffd280", "#ff8080","#8080ff"],
                        borderColor: ["#ffd280", "#ff8080","#8080ff"],
                        hoverBackgroundColor: ["#ffd280", "#ff8080","#8080ff"],
                        hoverBorderColor: ["#ffd280", "#ff8080","#8080ff"],
                        fill: false,
                        data: amount3
                    }
                ]
                
            };
            var graphTarget = $("#graphCanvas3");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata3
        
            });
            
        });
        
    }
    
}
</script>
<style>
        .image{
            transition: transform 1s; /* Animation */
            margin: 0 auto;
        }
        .image:hover 
        {
            transform: scale(1.2); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
</style>
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="home.jpg" width="30" height="30" class="d-inline-block align-top" alt="">&nbsp;Home</a>
        <a class="btn btn-lg btn-danger text-white pull-right" href="#" role="button">Login</a>
    </nav>
    <div class="container pt-5 mb-2 text-secondary ">
            <div class="row bg-primary mb-2 text-white">
                <h3><b><u>Fertilizer Recommendations according to your land size</u> (Watermelon)</b></h3>
            </div>
            <div class="row image">
                <div class="col-md-6 bg-white jumbotron">
                    <center><h3>Basal Dressing</h3></center>
                    <center><h6>Before two days of seeding</h6></center>
                    <canvas id="graphCanvas1"></canvas>
                </div>
<!--  col-md-6  -->
                <div class="col-md-6 bg-white jumbotron">      
                    <center><h3>Top Dressing</h3></center>              
                    <center><h6>Two weeks after planting</h6></center>
                    <canvas id="graphCanvas2"></canvas>
                </div>
<!--  col-md-6  -->
            </div>
<!--  row  -->
            <div class="row image">
                <div class="col-md-6 bg-white jumbotron">
                    <center><h3>Top Dressing</h3></center>
                    <center><h6>Five weeks after planting</h6></center>
                    <canvas id="graphCanvas3"></canvas>
                </div>
<!--  col-md-6  -->            
                <div class="col-md-6 bg-white jumbotron">
                    <u><h3><b>Basic instructions to Farmers</b></h3></u>
                    <h5 class=""><u>-Seeding-</u></h5>
                        <p> * Seed requirement is 3 kg/ha. Three to four seed have to be planted in planting holes spaced at a distance of 100 x 50 cm and thinned out to get two plants per hill, ten days after planting. It is better to apply straw mulch in the cultivation. Irrigation has to terminate two weeks prior to harvesting.</p>
                    <h5 class=""><u>-Fertilizing-</u></h5>
                        <p> * Disperse chemical fertilizers 30cm around the plant like a annulus. Then shuffle them to the soil using a hand fork. </p>
                        <p> * When you use the chemical fertilizers, there should be a wetness in soil.</p>
                        <p> * After fertilizing, need to supply water to the plantation.</p>
                    <button class="btn btn-success btn-block" onclick="myFunction()" id="submit">Check Again?</button>
                </div>
<!--  col-md-6  -->    
            </div>
<!--  row  -->
            <div class="row bg-primary mt-5 mb-2 text-white">
                <h3><b><u>Fertilizer Recommendations for a acre</u> (Watermelon)</b></h3>
            </div>
            <div class="row jumbotron bg-white">
                <div class="col-md-4 image">
                <center><h3>Basal Dressing</h3></center>
                <canvas id="bar-chart1"></canvas>
                <script>
                    // Bar chart
                    new Chart(document.getElementById("bar-chart1"), {
                    type: 'bar',
                    data: {
                    labels: ["Urea", "Triple Super Pospate", "Miurate of Potash"],
                    datasets: [
                    {
                    label: "Fertilizer Recommendations (in kilograms)",
                    backgroundColor: ["#ffd280", "#ff8080","#8080ff"],
                    data: [30,75,25]
                    }
                    ]
                    },
                    options: {
                    legend: { display: false },
                    title: {
                    display: true,
                    text: 'Before two days of seeding'
                    }
                    }
                    });
                </script>
                </div>
<!--  col-md-6  -->            
                <div class="col-md-4 image">
                <center><h3>Top dressing</h3></center>
                <canvas id="bar-chart2"></canvas>
                <script>
                    // Bar chart
                    new Chart(document.getElementById("bar-chart2"), {
                    type: 'bar',
                    data: {
                    labels: ["Urea", "Triple Super Pospate", "Miuriate of Potash"],
                    datasets: [
                    {
                    label: "Fertilizer Recommendations (in kilograms)",
                    backgroundColor: ["#ffd280", "#ff8080","#8080ff"],
                    data: [30,0,25]
                    }
                    ]
                    },
                    options: {
                    legend: { display: false },
                    title: {
                    display: true,
                    text: 'Two weeks after planting'
                    }
                    }
                    });
                </script>
                </div>
<!--  col-md-6  -->  
                <div class="col-md-4 image">
                <center><h3>Top Dressing</h3></center>
                <canvas id="bar-chart3"></canvas>
                <script>
                    // Bar chart
                    new Chart(document.getElementById("bar-chart3"), {
                    type: 'bar',
                    data: {
                    labels: ["Urea", "Triple Super Pospate", "Miuriate of Potash"],
                    datasets: [
                    {
                    label: "Fertilizer Recommendations (in kilograms)",
                    backgroundColor: ["#ffd280", "#ff8080","#8080ff"],
                    data: [30,0,25]
                    }
                    ]
                    },
                    options: {
                    legend: { display: false },
                    title: {
                    display: true,
                    text: 'Five weeks after planting'
                    }
                    }
                    });
                </script>
                </div>
<!--  col-md-6  -->  
            </div>
<!--  row  -->
    </div>
<!-- container -->
</body>
</html>