<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vishwakarma Meet Invitation</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f2f5; /* Very light gray background for the whole page */
            margin: 0;
            padding: 0;
            color: #333; /* Dark text color for better readability */
        }

        .container {
            width: 90%;
            max-width: 600px;
            margin: 50px auto;
            background-color: #ffffff; /* White container background */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
            overflow: hidden;
            animation: fadeIn 1.5s ease-in-out;
        }

        .header {
            background-color: #004085; /* Dark blue background for header */
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }

        .header img {
            width: 100px;
            margin-bottom: 10px;
        }

        .content {
            padding: 30px;
            line-height: 1.6;
        }

        .content h2 {
            color: #004085; /* Dark blue color for headers */
            margin-bottom: 15px;
            text-align: center;
        }

        .content p {
            font-size: 16px;
            margin-bottom: 20px;
            text-align: center;
        }

        .meeting-details {
            background-color: #e9ecef; /* Light gray background for details */
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            animation: slideInUp 1.5s ease-in-out;
        }

        .meeting-details p {
            margin: 5px 0;
            color: #333; /* Dark text for better readability */
        }

        .btn {
            display: block;
            width: 80%;
            max-width: 200px;
            margin: 20px auto;
            padding: 10px;
            background-color: #007bff; /* Bright blue button color */
            color: #ffffff;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3; /* Darker blue button color on hover */
        }

        .footer {
            background-color: #004085; /* Dark blue background for footer */
            color: #ffffff;
            text-align: center;
            padding: 10px;
        }

        /* Animations */
        @keyframes fadeIn {
            0% { opacity: 0; transform: scale(0.9); }
            100% { opacity: 1; transform: scale(1); }
        }

        @keyframes slideInUp {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="https://www.viit.ac.in/images/logo.png" alt="Vishwakarma Logo">
            <h1>Vishwakarma Institute of Technology, Pune</h1>
        </div>
        <div class="content">
            <h2>Batch Guardian Meet Invitation</h2>
            <p>Dear Students,</p>
            <p>We are pleased to invite you to the upcoming Batch Guardian Meeting.</p>
            <div class="meeting-details">
                <p><strong>Meeting Topic:</strong> Batch Guardian Meet</p>
                <p><strong>Meeting Date:</strong> {{date}}</p>
                <p><strong>Meeting Time:</strong> {{time}}</p>
            </div>
            <a href="{{meeting_link}}" class="btn">Join Meeting</a>
        </div>
        <div class="footer">
            <p>&copy; 2024 Vishwakarma Institute. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
