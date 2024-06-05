<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participant Dashboard</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #F0F8FF;
            color: #333;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            color: #4CAF50;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        p {
            text-align: center;
            font-size: 1.2em;
        }

        a {
            display: block;
            width: 200px;
            margin: 20px auto;
            padding: 10px;
            text-align: center;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        a:hover {
            background-color: #45a049;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #FFF;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .details, .souvenir-status {
            margin-top: 20px;
            padding: 10px;
            text-align: left;
        }

        .details p, .souvenir-status p {
            font-size: 1em;
            margin: 5px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Welcome to Your Dashboard, </h1>

        <div class="details">
            <h2>Your Participation Details:</h2>
            <p><strong>Name:</strong> </p>
            <p><strong>Gender:</strong> </p>
            <p><strong>Department:</strong> </p>
            <p><strong>Race:</strong> </p>
        </div>

        <div class="souvenir-status">
            <h2>Your Souvenir Collection Status:</h2>
            <p><strong>Shirt:</strong></p>
            <p><strong>Medal:</strong></p>
            <p><strong>Certificate:</strong></p>
        </div>

        <a href="logout_participant.php">Logout</a>
    </div>
</body>
</html>
