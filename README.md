
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }
        .sidebar {
            width: 250px;
            background-color: #e6f7f9;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        }
        .sidebar h2 {
            margin: 0 0 20px;
            font-size: 24px;
        }
        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }
        .sidebar ul li {
            margin: 20px 0;
        }
        .sidebar ul li a {
            color: #333;
            text-decoration: none;
            font-size: 18px;
            display: block;
        }
        .sidebar ul li a:hover {
            color: #007bff;
        }
        .main-content {
            margin-left: 270px;
            padding: 20px;
        }
        .main-content .dashboard {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
            margin-top: 40px;
        }
        .dashboard .card {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            font-size: 18px;
        }
        .search-bar {
            margin: 20px 0;
            text-align: right;
        }
        .search-bar input[type="text"] {
            padding: 10px;
            width: 300px;
            border: 1px solid #ddd;
            border-radius: 20px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>JOURNEY BEYOND</h2>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Odders</a></li>
            <li><a href="#">Payments</a></li>
            <li><a href="#">Sign Out</a></li>
        </ul>
    </div>

    <div class="main-content">
        <div class="search-bar">
            <input type="text" placeholder="Search here...">
        </div>
        <div class="dashboard">
            <div class="card">Total Bookings</div>
            <div class="card">Managing Bookings</div>
            <div class="card">Updating the availability</div>
            <div class="card">Responds to bookings</div>
            <div class="card">View of the payments</div>
            <div class="card">Rate management</div>
           
        </div>
    </div>
</body>
</html>



