<html>

<head>
    <title>Minimal Dashboard</title>
    <script src="https://unpkg.com/react/umd/react.development.js"></script>
    <script src="https://unpkg.com/react-dom/umd/react-dom.development.js"></script>
    <script src="https://unpkg.com/@babel/standalone/babel.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </link>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div id="root"></div>
    <script type="text/babel">
        const { useState, useEffect } = React;

        const Sidebar = () => (
            <div className="w-64 bg-white h-screen shadow-md">
                <div className="p-4 text-xl font-bold">KLAJA</div>
                <nav className="mt-4">
                    <ul>
                        <li className="p-4 text-gray-700 hover:bg-gray-200 cursor-pointer">Dashboards</li>
                        <li className="p-4 text-gray-700 hover:bg-gray-200 cursor-pointer">Analytics</li>
                        <li className="p-4 text-gray-700 hover:bg-gray-200 cursor-pointer">Commerce</li>
                        <li className="p-4 text-gray-700 hover:bg-gray-200 cursor-pointer">Sales</li>
                        <li className="p-4 text-gray-700 hover:bg-gray-200 cursor-pointer">Minimal</li>
                        <li className="p-4 text-gray-700 hover:bg-gray-200 cursor-pointer">Variation 1</li>
                        <li className="p-4 text-gray-700 hover:bg-gray-200 cursor-pointer">Variation 2</li>
                    </ul>
                </nav>
            </div>
        );

        const Header = () => (
            <div className="flex justify-between items-center p-4 bg-white shadow-md">
                <div className="flex items-center">
                    <i className="fas fa-bars text-xl mr-4"></i>
                    <div className="text-lg font-bold">Dashboard</div>
                </div>
                <div className="flex items-center">
                    <i className="fas fa-search text-xl mr-4"></i>
                    <i className="fas fa-bell text-xl mr-4"></i>
                    <i className="fas fa-user-circle text-xl"></i>
                </div>
            </div>
        );

        const Card = ({ title, value, percentage, icon, color }) => (
            <div className="bg-white p-4 rounded-lg shadow-md flex items-center justify-between">
                <div>
                    <div className="text-gray-500">{title}</div>
                    <div className="text-2xl font-bold">{value}</div>
                </div>
                <div className={`text-${color}-500 text-xl`}>
                    <i className={`fas fa-${icon}`}></i> {percentage}
                </div>
            </div>
        );

        const BarChart = () => {
            useEffect(() => {
                const ctx = document.getElementById('barChart').getContext('2d');
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Jan 01', 'Jan 02', 'Jan 03', 'Jan 04', 'Jan 05', 'Jan 06', 'Jan 07', 'Jan 08', 'Jan 09', 'Jan 10', 'Jan 11', 'Jan 12'],
                        datasets: [
                            {
                                label: 'Website Blog',
                                data: [300, 400, 200, 500, 700, 600, 800, 400, 300, 500, 600, 700],
                                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                                borderColor: 'rgba(54, 162, 235, 1)',
                                borderWidth: 1
                            },
                            {
                                label: 'Social Media',
                                data: [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000, 1100, 1200],
                                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                borderColor: 'rgba(75, 192, 192, 1)',
                                borderWidth: 1
                            }
                        ]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            }, []);

            return <canvas id="barChart"></canvas>;
        };

        const DoughnutChart = () => {
            useEffect(() => {
                const ctx = document.getElementById('doughnutChart').getContext('2d');
                new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: ['Income'],
                        datasets: [
                            {
                                label: 'Income',
                                data: [75, 25],
                                backgroundColor: ['rgba(75, 192, 192, 1)', 'rgba(201, 203, 207, 1)'],
                                borderWidth: 1
                            }
                        ]
                    },
                    options: {
                        cutout: '70%'
                    }
                });
            }, []);

            return <canvas id="doughnutChart"></canvas>;
        };

        const Dashboard = () => (
            <div className="flex">
                <Sidebar />
                <div className="flex-1 p-6">
                    <Header />
                    <div className="mt-6">
                        <div className="grid grid-cols-4 gap-6">
                            <Card title="New Accounts" value="234 %" percentage="58" icon="arrow-up" color="green" />
                            <Card title="Total Expenses" value="71 %" percentage="62" icon="arrow-down" color="red" />
                            <Card title="Company Value" value="$1.45M" percentage="72" icon="arrow-up" color="yellow" />
                            <Card title="New Employees" value="+34 hires" percentage="81" icon="arrow-up" color="green" />
                        </div>
                        <div className="mt-6 grid grid-cols-3 gap-6">
                            <div className="bg-white p-4 rounded-lg shadow-md">
                                <div className="flex justify-between items-center">
                                    <div className="text-lg font-bold">Traffic Sources</div>
                                    <button className="bg-yellow-500 text-white px-4 py-2 rounded">Actions</button>
                                </div>
                                <div className="mt-4">
                                    <BarChart />
                                </div>
                            </div>
                            <div className="bg-white p-4 rounded-lg shadow-md">
                                <div className="text-lg font-bold">Income</div>
                                <div className="mt-4">
                                    <DoughnutChart />
                                </div>
                            </div>
                        </div>
                        <div className="mt-6 grid grid-cols-4 gap-6">
                            <Card title="Income" value="$5,456" percentage="+14%" icon="arrow-up" color="green" />
                            <Card title="Expenses" value="$4,764" percentage="+8%" icon="arrow-down" color="red" />
                            <Card title="Spendings" value="$1.5M" percentage="+15%" icon="arrow-down" color="green" />
                            <Card title="Totals" value="$31,564" percentage="+76%" icon="arrow-up" color="yellow" />
                        </div>
                        <div className="mt-6 grid grid-cols-3 gap-6">
                            <div className="bg-white p-4 rounded-lg shadow-md">
                                <div className="text-lg font-bold">Target Section</div>
                                <div className="mt-4">
                                    <div className="flex justify-between items-center">
                                        <div className="text-gray-500">Income Target</div>
                                        <div className="text-red-500">71%</div>
                                    </div>
                                    <div className="w-full bg-gray-200 h-2 rounded-full mt-2">
                                        <div className="bg-red-500 h-2 rounded-full" style={{ width: '71%' }}></div>
                                    </div>
                                </div>
                                <div className="mt-4">
                                    <div className="flex justify-between items-center">
                                        <div className="text-gray-500">Expenses Target</div>
                                        <div className="text-green-500">54%</div>
                                    </div>
                                    <div className="w-full bg-gray-200 h-2 rounded-full mt-2">
                                        <div className="bg-green-500 h-2 rounded-full" style={{ width: '54%' }}></div>
                                    </div>
                                </div>
                                <div className="mt-4">
                                    <div className="flex justify-between items-center">
                                        <div className="text-gray-500">Spendings Target</div>
                                        <div className="text-yellow-500">32%</div>
                                    </div>
                                    <div className="w-full bg-gray-200 h-2 rounded-full mt-2">
                                        <div className="bg-yellow-500 h-2 rounded-full" style={{ width: '32%' }}></div>
                                    </div>
                                </div>
                            </div>
                            <div className="bg-white p-4 rounded-lg shadow-md">
                                <div className="text-lg font-bold">Totals Target</div>
                                <div className="mt-4">
                                    <div className="flex justify-between items-center">
                                        <div className="text-gray-500">Totals Target</div>
                                        <div className="text-blue-500">89%</div>
                                    </div>
                                    <div className="w-full bg-gray-200 h-2 rounded-full mt-2">
                                        <div className="bg-blue-500 h-2 rounded-full" style={{ width: '89%' }}></div>
                                    </div>
                                </div>
                                <div className="mt-4 text-right">
                                    <button className="bg-yellow-500 text-white px-4 py-2 rounded">View Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );

        ReactDOM.render(<Dashboard />, document.getElementById('root'));
    </script>
</body>

</html>