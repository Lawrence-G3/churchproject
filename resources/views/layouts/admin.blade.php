<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Church Administration Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom CSS for dashboard -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #343a40 !important;
        }
        .navbar-brand, .navbar-nav .nav-link {
            color: #ffffff !important;
        }
        .navbar-brand {
            font-size: 1.5rem;
        }
        .drawer {
            background-color: #343a40;
            color: #ffffff;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            padding-top: 3rem;
            overflow-x: hidden;
            transition: 0.2s;
        }
        .drawer ul {
            list-style-type: none;
            padding: 0;
        }
        .drawer li {
            padding: 10px;
            border-bottom: 1px solid #ffffff;
        }
        .drawer a {
            color: #ffffff;
            text-decoration: none;
            display: block;
            padding: 10px;
        }
        .drawer a:hover {
            background-color: #4e555b;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
        .content-header {
            margin-bottom: 20px;
        }
        .content-header h1 {
            font-size: 2.5rem;
            margin-bottom: 0;
        }
        .welcome-text {
            font-size: 1.2rem;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .feature-box {
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .feature-box h2 {
            font-size: 1.8rem;
            margin-bottom: 10px;
        }
        .feature-box p {
            font-size: 1.2rem;
            line-height: 1.6;
        }
        .logout-link {
            color: #dc3545;
            cursor: pointer;
        }
        .logout-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Church Admin Dashboard</a>
        </div>
    </nav>

    <!-- Drawer/Navigation -->
    <div class="drawer">
        <ul>
            <li><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="{{ route('admin.members') }}"><i class="fas fa-users"></i> Members</a></li>
            <li><a href="{{ route('admin.events') }}"><i class="far fa-calendar-alt"></i> Events</a></li>
            <li><a href="{{ route('admin.sermons') }}"><i class="fas fa-microphone-alt"></i> Sermons</a></li>
            <li><a href="{{ route('admin.donations') }}"><i class="fas fa-hand-holding-usd"></i> Donations</a></li>
            <li><a href="{{ route('admin.settings') }}"><i class="fas fa-cog"></i> Settings</a></li>
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </li>
        </ul>
    </div>

    <!-- Content Section -->
    <div class="content">
        <div class="content-header">
            <h1>Welcome to the Church Admin Dashboard</h1>
            <p class="welcome-text">Manage your church activities with ease.</p>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="feature-box">
                        <h2><i class="fas fa-users"></i> Manage Members</h2>
                        <p>Keep track of your church members, update their information, and engage with them effectively.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-box">
                        <h2><i class="far fa-calendar-alt"></i> Schedule Events</h2>
                        <p>Plan and organize church events, services, and meetings in a convenient calendar view.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="feature-box">
                        <h2><i class="fas fa-microphone-alt"></i> Publish Sermons</h2>
                        <p>Upload and share sermons with your congregation, making them accessible anytime.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-box">
                        <h2><i class="fas fa-hand-holding-usd"></i> Manage Donations</h2>
                        <p>Track donations, manage donor information, and generate reports for financial transparency.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Logout Form -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
