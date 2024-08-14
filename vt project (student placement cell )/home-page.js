//javascript for the charts
// Bar Chart
const barCtx = document.getElementById('barChart').getContext('2d');
new Chart(barCtx, {
    type: 'bar',
    data: {
        labels: ['ECE', 'CSE'],
        datasets: [
            {
                label: 'Total No of Students',
                data: [2, 8],
                backgroundColor: 'rgb(222 6 115)',
            },
            {
                label: 'Placed Students',
                data: [1, 3],
                backgroundColor: 'rgb(108 39 179)',
            }
        ]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                labels: {
                    color: '#fff'
                }
            }
        },
        scales: {
            x: {
                ticks: {
                    color: '#fff'
                },
                grid: {
                    color: '#555'
                }
            },
            y: {
                ticks: {
                    color: '#fff'
                },
                grid: {
                    color: '#555'
                }
            }
        }
    }
});

// Line Chart
const lineCtx = document.getElementById('lineChart').getContext('2d');
new Chart(lineCtx, {
    type: 'line',
    data: {
        labels: ['1', '2', '3', '4'],
        datasets: [
            {
                label: 'Students',
                data: [3, 5, 4, 8],
                borderColor: '#ff66ff',
                backgroundColor: 'rgba(255, 102, 255, 0.5)',
                fill: true,
            }
        ]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                labels: {
                    color: '#fff'
                }
            }
        },
        scales: {
            x: {
                ticks: {
                    color: '#fff'
                },
                grid: {
                    color: '#555'
                }
            },
            y: {
                ticks: {
                    color: '#fff'
                },
                grid: {
                    color: '#555'
                }
            }
        }
    }
});

// Horizontal Bar Chart
const hBarCtx = document.getElementById('horizontalBarChart').getContext('2d');
new Chart(hBarCtx, {
    type: 'bar',
    data: {
        labels: ['Amazon', 'Google', 'Infosys', 'Microsoft', 'One Direct', 'TCS'],
        datasets: [
            {
                label: 'Placed Students',
                data: [1.5, 1.2, 1.7, 1.9, 1.8, 2.0],
                backgroundColor: 'rgb(108 39 179)',
            }
        ]
    },
    options: {
        indexAxis: 'y',
        responsive: true,
        plugins: {
            legend: {
                labels: {
                    color: '#fff'
                }
            }
        },
        scales: {
            x: {
                ticks: {
                    color: '#fff'
                },
                grid: {
                    color: '#555'
                }
            },
            y: {
                ticks: {
                    color: '#fff'
                },
                grid: {
                    color: '#555'
                }
            }
        }
    }
});

// Doughnut Chart
const doughnutCtx = document.getElementById('doughnutChart').getContext('2d');
new Chart(doughnutCtx, {
    type: 'doughnut',
    data: {
        labels: ['Not Eligible', 'Eligible', 'Placed'],
        datasets: [{
            data: [10, 50, 40],
            backgroundColor: ['rgb(222 6 115)', 'rgb(108 39 179)', 'black'],
            hoverOffset: 4
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                labels: {
                    color: '#fff'
                }
            }
        }
    }
});
