<!DOCTYPE html>
<html>
<head>
    <title>Bar Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
     @vite(['resources/css/homepage.css']) 
</head>
<body>
    <div class="background">
        <nav>
            <a href={{route('all.homepage')}}>હોમ</a>
            <a href={{route('all.scheme')}}>સરકારી યોજના</a>
            <a href={{route('all.weather')}}>હવામાન</a>
            <a href={{route('all.data')}}>પાક નો ડેટા</a>
            <a href={{route('all.showchart')}}>ચાર્ટ</a>
            <div class="animation start-home"></div>
        </nav>
    </div>
    <div class="wrap">
        <div class="title">
            <h2> ઉત્પાદન આધારિત ચાર્ટ </h2>
           
        </div>  
    <canvas id="barChart" width="400" height="400"></canvas>
</div>
    <script>

                    const ctx = document.getElementById('barChart').getContext('2d');
                    new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels:['મગ','અન્ય કઠોળ','ઉદડ','મઠ','મગ','તુર','નાના બાજરી','રાગી','મકાઈ','ખરીફ બાજરી','ખરીફ જુવાર','કુલ ખરીફ ચોખા','બિન-સિંચાઈ વગરના ચોખા','સિંચાઈ કરેલ ચોખા','અન્ય કઠોળ','ઉદડ','મઠ'],
                            datasets: [{
                                label: 'Production in Quintals',
                                data:  [3400,184,611,98,730,2590,5089,5089,5089,5089,1215,12974,2415,10771,184,611,98],
                                backgroundColor: '#454576',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            responsive: true,
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    
                                }
                            }
                        }
                    });
           
    </script>
</body>
</html>
