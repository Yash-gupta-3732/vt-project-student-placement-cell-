
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
                    color: '#1493e1'
                }
            }
        },
        scales: {
            x: {
                ticks: {
                    color: '#1493e1'
                },
                grid: {
                    color: '#1493e1'
                }
            },
            y: {
                ticks: {
                    color: '#1493e1'
                },
                grid: {
                    color: '#1493e1'
                }
            }
        }
    }
});

// Line Chart
 var ctx = document.getElementById('lineChart').getContext('2d');
 var lineChart = new Chart(ctx, {
     type: 'line',
     data: {
         labels: ['1', '2', '3', '4'],
         datasets: [{
             label: 'Students',
             data: [3, 5, 2, 9],
             backgroundColor: 'rgba(255, 99, 132, 0.3)',
             borderColor: 'rgba(255, 99, 132, 1)',
             fill: true,
             tension: 0.4,
         }, {
             label: 'Placed Students',
             data: [2, 4, 5, 7],
             backgroundColor: 'rgba(153, 102, 255, 0.3)',
             borderColor: 'rgba(153, 102, 255, 1)',
             fill: true,
             tension: 0.4,
         }]
     },
     options: {
         responsive: true,
         scales: {
             y: {
                 beginAtZero: true
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
                    color: '#1493e1'
                }
            }
        },
        scales: {
            x: {
                ticks: {
                    color: '#1493e1'
                },
                grid: {
                    color: '#1493e1'
                }
            },
            y: {
                ticks: {
                    color: '#1493e1'
                },
                grid: {
                    color: '#1493e1'
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
                    color: '#1493e1'
                }
            }
        }
    }
});

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
                    color: '#1493e1'
                }
            }
        },
        scales: {
            x: {
                ticks: {
                    color: '#1493e1'
                },
                grid: {
                    color: '#1493e1'
                }
            },
            y: {
                ticks: {
                    color: '#1493e1'
                },
                grid: {
                    color: '#1493e1'
                }
            }
        }
    }
});

// Line Chart
 var ctx = document.getElementById('lineChart').getContext('2d');
 var lineChart = new Chart(ctx, {
     type: 'line',
     data: {
         labels: ['1', '2', '3', '4'],
         datasets: [{
             label: 'Students',
             data: [3, 5, 2, 9],
             backgroundColor: 'rgba(255, 99, 132, 0.3)',
             borderColor: 'rgba(255, 99, 132, 1)',
             fill: true,
             tension: 0.4,
         }, {
             label: 'Placed Students',
             data: [2, 4, 5, 7],
             backgroundColor: 'rgba(153, 102, 255, 0.3)',
             borderColor: 'rgba(153, 102, 255, 1)',
             fill: true,
             tension: 0.4,
         }]
     },
     options: {
         responsive: true,
         scales: {
             y: {
                 beginAtZero: true
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
                    color: '#1493e1'
                }
            }
        },
        scales: {
            x: {
                ticks: {
                    color: '#1493e1'
                },
                grid: {
                    color: '#1493e1'
                }
            },
            y: {
                ticks: {
                    color: '#1493e1'
                },
                grid: {
                    color: '#1493e1'
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
                    color: '#1493e1'
                }
            }
        }
    }
});

