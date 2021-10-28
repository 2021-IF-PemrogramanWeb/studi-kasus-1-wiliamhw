var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: 'Trend of Reason',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(69, 114, 198, 0.2)',
            ],
            borderColor: [
                'rgba(69, 114, 198, 1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});