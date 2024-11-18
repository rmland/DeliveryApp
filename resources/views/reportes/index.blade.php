<x-app-layout>
    <x-slot
    name="header">
    </x-slot>
    <div>
        <title>Dashboard de Reportes</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
        <style>
            .chart-container {
                display: none;
                margin-top: 20px;
                height: 300px;
            }
            .chart-container.active {
                display: block;
            }
            .form-container {
                background-color: #f8f9fa;
                padding: 30px;
                border-radius: 8px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
            .form-group {
                margin-bottom: 20px;
            }
            .form-label {
                font-weight: bold;
                color: #495057;
            }
            .form-select {
                border-radius: 5px;
                padding: 10px;
                font-size: 1rem;
            }
            .form-select:focus {
                box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
                border-color: #80bdff;
            }
        </style>
    </head>
    <body>
    <body>
    
    <div class="container">
        <div class="form-container">
            <h2 class="text-center mb-4">Generar Reporte</h2>
            <form action="{{ route('reportes.index') }}" method="GET" class="mb-4">
                <div class="form-group">
                    <label for="chart_type" class="form-label">Seleccione el tipo de gráfica:</label>
                    <select name="chart_type" id="chart_type" class="form-select" onchange="this.form.submit()">
                        <option value="">Seleccione una opción</option>
                        <option value="users" {{ request('chart_type') == 'users' ? 'selected' : '' }}>Usuarios Registrados por Mes</option>
                        <option value="orders" {{ request('chart_type') == 'orders' ? 'selected' : '' }}>Pedidos por Estado</option>
                        <option value="sales" {{ request('chart_type') == 'sales' ? 'selected' : '' }}>Ventas por Mes</option>
                    </select>
                </div>
            </form>
        </div>
    </div>
    
            <div id="usersChartContainer" class="chart-container {{ request('chart_type') == 'users' ? 'active' : '' }}">
                <canvas id="usersChart"></canvas>
            </div>
    
            <div id="ordersChartContainer" class="chart-container {{ request('chart_type') == 'orders' ? 'active' : '' }}">
                <canvas id="ordersChart"></canvas>
            </div>
    
            <div id="salesChartContainer" class="chart-container {{ request('chart_type') == 'sales' ? 'active' : '' }}">
                <canvas id="salesChart"></canvas>
            </div>
        </div>
    
        <script>
            const selectedChart = '{{ request('chart_type') }}';
    
            if (selectedChart === 'users' && {!! $usersOverTime->count() ? 'true' : 'false' !!}) {
                const usersCtx = document.getElementById('usersChart').getContext('2d');
                const usersChart = new Chart(usersCtx, {
                    type: 'line',
                    data: {
                        labels: {!! json_encode($usersOverTime->pluck('month')->map(function($month) {
                            return date('F', mktime(0, 0, 0, $month, 1));
                        })) !!},
                        datasets: [{
                            label: 'Usuarios Registrados por Mes',
                            data: {!! json_encode($usersOverTime->pluck('users')) !!},
                            borderColor: 'rgb(75, 192, 192)',
                            tension: 0.1
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            title: {
                                display: true,
                                text: 'Usuarios Registrados por Mes'
                            }
                        }
                    }
                });
            }
    
            if (selectedChart === 'orders' && {!! $ordersByStatus->count() ? 'true' : 'false' !!}) {
                const ordersCtx = document.getElementById('ordersChart').getContext('2d');
                const ordersChart = new Chart(ordersCtx, {
                    type: 'doughnut',
                    data: {
                        labels: {!! json_encode($ordersByStatus->pluck('estado')) !!},
                        datasets: [{
                            data: {!! json_encode($ordersByStatus->pluck('count')) !!},
                            backgroundColor: [
                                'rgb(255, 99, 132)',
                                'rgb(54, 162, 235)',
                                'rgb(255, 205, 86)',
                                'rgb(75, 192, 192)'
                            ]
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            title: {
                                display: true,
                                text: 'Pedidos por Estado'
                            }
                        }
                    }
                });
            }
    
            if (selectedChart === 'sales' && {!! $salesOverTime->count() ? 'true' : 'false' !!}) {
                const salesCtx = document.getElementById('salesChart').getContext('2d');
                const salesChart = new Chart(salesCtx, {
                    type: 'bar',
                    data: {
                        labels: {!! json_encode($salesOverTime->pluck('month')->map(function($month) {
                            return date('F', mktime(0, 0, 0, $month, 1));
                        })) !!},
                        datasets: [{
                            label: 'Ventas por Mes',
                            data: {!! json_encode($salesOverTime->pluck('sales')) !!},
                            backgroundColor: 'rgb(54, 162, 235)',
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            title: {
                                display: true,
                                text: 'Ventas por Mes'
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    callback: function(value) {
                                        return '$' + value.toLocaleString();
                                    }
                                }
                            }
                        }
                    }
                });
            }
        </script>
    </div>
</x-app-layout>