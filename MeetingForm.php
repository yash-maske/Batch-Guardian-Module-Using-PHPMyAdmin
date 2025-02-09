<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5; /* Light grey background */
            margin: 0;
            padding-top: 60px; /* Adjust based on navbar height */
        }

        .navbar {
            background-color: #a3a7b3;
            color: white;
            padding: 10px 20px; /* Reduced padding to bring elements closer */
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .navbar .icons {
            display: flex;
            align-items: center;
        }

        .navbar .icons a {
            color: white;
            text-decoration: none;
            font-size: 20px;
            margin-right: 15px;
        }

        .navbar .icons a:hover {
            color: #007bff;
        }

        .navbar img {
            height: 40px;
            margin-right: 10px;
        }

        .navbar p {
            margin: 0;
            font-size: 20px;
            display: flex;
            align-items: center;
            gap: 10px; /* Add space between logo and text */
        }

        form {
            background-color: #ffffff; /* White background for form */
            border: 2px solid #ccc; /* Light grey border */
            border-radius: 8px; /* Rounded corners */
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Soft shadow for depth */
            max-width: 800px; /* Wider form for desktop */
            margin: 50px auto; /* Center the form with top and bottom margin */
        }

        h3, h2 {
            color: #2c3e50; /* Deep navy color for headings */
            margin-bottom: 20px;
        }

        .depart input[type="text"] {
            border: 1px solid #3498db; /* Light blue border */
            padding: 8px; /* Increased padding for better desktop appearance */
            font-size: 16px;
            width: 300px; /* Slightly wider input fields */
            border-radius: 4px; /* Rounded corners for input fields */
        }

        .meet {
            margin-top: 40px;
            font-size: 22px; /* Slightly larger font size for desktop */
            color: #2980b9; /* Dark blue for subheadings */
        }

        .input-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px; /* Increased bottom margin for better spacing */
            justify-content: space-between;
        }

        .input-container label {
            width: 30%; /* Adjusted label width for desktop */
            font-weight: bold;
            font-size: 16px;
        }

        .input-container input[type="text"],
        .input-container input[type="number"],
        .input-container input[type="date"] {
            border: 1px solid #ccc;
            padding: 10px; /* Increased padding for better desktop appearance */
            font-size: 16px;
            width: 60%; /* Adjusted width for desktop */
            border-radius: 4px; /* Rounded corners */
        }

        fieldset {
            border: 2px solid #3498db; /* Light blue border */
            border-radius: 8px;
            padding: 20px; /* Increased padding for better spacing */
            margin-top: 20px;
            box-sizing: border-box;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th {
            background-color: #2980b9; /* Dark blue background for table headers */
            color: white;
            padding: 12px; /* Increased padding for better desktop appearance */
            font-size: 16px;
        }

        table td {
            border: 1px solid #ddd;
            padding: 12px; /* Increased padding for better desktop appearance */
            font-size: 16px;
        }

        table td input[type="text"] {
            border: 1px solid #ccc;
            padding: 8px;
            font-size: 16px;
            width: 100%;
            border-radius: 4px;
        }

        .submit {
            margin-top: 30px; /* Margin top to separate from the form content */
            text-align: center; /* Center the button */
        }

        .submit button {
            background-color: #3498db; /* Blue background */
            color: white; /* White text */
            border: none;
            padding: 12px 20px; /* Padding for button */
            font-size: 18px;
            border-radius: 5px; /* Rounded corners for button */
            cursor: pointer; /* Pointer cursor on hover */
            transition: background-color 0.3s, transform 0.3s; /* Smooth transitions */
        }

        .submit button:hover {
            background-color: #2980b9; /* Darker blue on hover */
            transform: scale(1.05); /* Slightly larger on hover */
        }

        .submit button:active {
            background-color: #1f5f8b; /* Even darker blue when clicked */
        }

        .submit h2, .submit h3 {
            color: #2c3e50; /* Deep navy color for footer text */
            margin-top: 30px;
            font-size: 20px;
        }

        hr {
            border: 0;
            height: 1px;
            background: #ccc; /* Light grey horizontal line */
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="icons">
            <a href="#" id="hamburger-icon"><i class="fas fa-bars"></i></a>
            <a href="homepageforteacher.php"><i class="fas fa-home"></i></a>
        </div>
        <p><img src="https://www.viit.ac.in/images/logo.png" alt="VIIT Logo"> Vishwakarma Institute of Technology, Pune</p>
    </div>

    <form action="MeetingFormBackend.php" method="post">
        <div class="upper1"><h3>Bansilal Ramnath Agrawal Charitable Trust</h3></div>
        <div class="upper2"><h2>Vishwakarma Institute of Technology, Pune</h2></div>
        <div class="depart">
            <h2>Department of <input type="text" id="Department" name="Department" required placeholder="Computer Science(AI)"></h2>
        </div>
        <div class="meet">Class Teacher/Batch Guardian - STUDENT MEETING REPORT</div>

        <hr>

        <div class="info">
            <div class="input-container">
                <label for="name">Class</label>
                <input type="text" id="name" name="name" required placeholder="SYB">
            </div>
            <div class="input-container">
                <label for="year">Academic Year</label>
                <input type="number" id="year" name="year" required min="1900" max="2100" placeholder="YYYY">
            </div>
            <div class="input-container">
                <label for="Semester">Semester</label>
                <input type="number" id="Semester" name="Semester" required min="1" max="2" placeholder="1/2">
            </div>
            <div class="input-container">
                <label for="number">Class Strength</label>
                <input type="number" id="number" name="number" required>
            </div>
            <div class="input-container">
                <label for="yearpresent">Number of students present</label>
                <input type="number" id="yearpresent" name="yearpresent">
            </div>
            <div class="input-container">
                <label for="date">Date of Meeting</label>
                <input type="date" id="date" name="date" required>
            </div>
        </div>

        <fieldset>
            <legend>Meeting Details</legend>
            <table>
                <tr>
                    <th>Sr No</th>
                    <th>Points Discussed</th>
                    <th>Action Proposed</th>
                </tr>
                <tr>
                    <td><h3>1</h3></td>
                    <td><div class="f1"><input type="text" id="1" name="1"></div></td>
                    <td><div class="f2"><input type="text" id="1s" name="1a"></div></td>
                </tr>
                <tr>
                    <td><h3>2</h3></td>
                    <td><div class="f1"><input type="text" id="2" name="2"></div></td>
                    <td><div class="f2"><input type="text" id="2s" name="2a"></div></td>
                </tr>
                <tr>
                    <td><h3>3</h3></td>
                    <td><div class="f1"><input type="text" id="3" name="3"></div></td>
                    <td><div class="f2"><input type="text" id="3s" name="3a"></div></td>
                </tr>
                <tr>
                    <td><h3>4</h3></td>
                    <td><div class="f1"><input type="text" id="4" name="4"></div></td>
                    <td><div class="f2"><input type="text" id="4s" name="4a"></div></td>
                </tr>
                <tr>
                    <td><h3>5</h3></td>
                    <td><div class="f1"><input type="text" id="5" name="5"></div></td>
                    <td><div class="f2"><input type="text" id="5s" name="5a"></div></td>
                </tr>
            </table>
        </fieldset>
        
        <div class="submit">
            <button type="submit">Submit</button>
        </div>
    </form>
    
    <h2>Submitted to:</h2>
    <h3>Head Of Department</h3>
    <hr>

    <script>
        document.getElementById('hamburger-icon').addEventListener('click', function() {
            const menu = document.getElementById('hamburger-menu');
            if (menu.classList.contains('show')) {
                menu.classList.remove('show');
            } else {
                menu.classList.add('show');
            }
        });
    </script>
</body>
</html>
