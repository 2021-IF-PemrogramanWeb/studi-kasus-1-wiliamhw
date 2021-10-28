let ctx = document.getElementById("myChart").getContext('2d');
$.post("graph-data",
function (data)
{
    const parsedData = JSON.parse(data);

    const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
            labels: parsedData["labels"],
            datasets: [{
                label: 'Trend of Reason',
                data: parsedData["values"],
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
});
