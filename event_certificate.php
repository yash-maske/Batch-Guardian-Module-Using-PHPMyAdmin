<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackathon Participation Form</title>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
            color: #333;
        }

        form {
            background-color: #ffffff;
            border: 2px solid #ccc;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 900px;
            margin: 50px auto;
        }

        h2, h3 {
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .input-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            justify-content: space-between;
        }

        .input-container label {
            width: 30%;
            font-weight: bold;
            font-size: 16px;
        }

        .input-container input[type="text"],
        .input-container input[type="number"],
        .input-container input[type="date"],
        .input-container input[type="tel"],
        .input-container textarea,
        .input-container select {
            border: 1px solid #3498db;
            padding: 10px;
            font-size: 16px;
            width: 65%;
            border-radius: 4px;
        }

        fieldset {
            border: 2px solid #3498db;
            border-radius: 8px;
            padding: 20px;
            margin-top: 20px;
            box-sizing: border-box;
        }

        button {
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }

        .button-container {
            display: flex;
            justify-content: center;
        }

        #Department {
            width: 80%; /* Increased size for the dropdown */
            font-size: 16px;
        }

    </style>
<body>
    <form id="event-form" method="post" action="event_certificate_backend.php" >
        <div class="upper1"><h3>Event Participation Form</h3></div>
        <div class="info">
            <?php
            include 'message.php';
            ?>
<div class="input-container">
                <label for="prn">Enter PRN:</label>
                <input type="text" id="prn" name="prn_main" required placeholder="PRN">
            </div>
            <div class="input-container">
                <label for="division-year">Division & Year:</label>
                <select id="division-year" name="division_year" required>
                    <option value="">Select Division & Year</option>
                    <option value="A-FY">A - FY</option>
                    <option value="B-FY">B - FY</option>
                    <option value="C-FY">C - FY</option>
                    <option value="D-FY">D - FY</option>
                    <option value="A-SY">A - SY</option>
                    <option value="B-SY">B - SY</option>
                    <option value="C-SY">C - SY</option>
                    <option value="D-SY">D - SY</option>
                    <option value="A-TY">A - TY</option>
                    <option value="B-TY">B - TY</option>
                    <option value="C-TY">C - TY</option>
                    <option value="D-TY">D - TY</option>
                    <option value="A-B.TECH">A - B.TECH</option>
                    <option value="B-B.TECH">B - B.TECH</option>
                    <option value="C-B.TECH">C - B.TECH</option>
                    <option value="D-B.TECH">D - B.TECH</option>
                </select>
            </div>
            <div class="input-container">
                <label for="hackathon-name">Name of Event:</label>
                <input type="text" id="event-name" name="event_name" required placeholder="Enter event name">
            </div>
<div class="input-container">
                <label for="event-date">Event Date:</label>
            <input type="date" id="event-date" name="event_date" required>
            </div>
            <div class="input-container">
                <label for="organization-name">Organization/Institute Name, City:</label>
                <input type="text" id="organization-name" name="organization_name" required placeholder="Enter organization name, city">
            </div>
            <div class="input-container">
                <label for="event-type">Event Type:</label>
                <select id="event-type" name="event_type" required>
                    <option value="">Please Choose</option>
                    <option value="Inter College">Inter College</option>
                    <option value="Intra College">Intra College</option>
                </select>
            </div>
            <div class="input-container">
                <label for="team-name">Team Name:</label>
                <input type="text" id="team-name" name="team_name" required placeholder="Enter team name">
            </div>
            <div class="input-container">
                <label for="team-leader">Name of Team Leader:</label>
                <input type="text" id="team-leader" name="team_leader" required placeholder="Enter team leader name">
            </div>
            <div class="input-container">
                <label for="team-members">Team Member Names:</label>
                <textarea id="team-members" name="team_members" rows="3" required placeholder="Enter team member names"></textarea>
            </div>
            <div class="input-container">
                <label for="team-size">Team Size (No. of Students):</label>
                <input type="number" id="team-size" name="team_size" required placeholder="Enter team size">
            </div>
            <div class="input-container">
                <label for="problem-statement">Problem Statement:</label>
                <textarea id="problem-statement" name="problem_statement" rows="3" required placeholder="Enter problem statement"></textarea>
            </div>
            <div class="input-container">
                <label for="event-status">Event Status:</label>
                <select id="event-status" name="event_status" required>
                    <option value="Participated">Participated</option>
                    <option value="Winner">Winner</option>
                    <option value="Runner Up">Runner Up</option>
                </select>
            </div> 
          
        <div class="button-container">
            <button type="submit"> Save Details & Upload Certificate</button>
        </div>
    </form>
</body>
</html>