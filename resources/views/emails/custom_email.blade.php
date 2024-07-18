<!-- resources/views/emails/sent.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Sent</title>
    <!-- Include any CSS stylesheets or meta tags as needed -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .card {
            border-radius: 5px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
        }
        .card-header {
            background-color: #f0f0f0;
            padding: 10px;
            font-weight: bold;
            border-bottom: 1px solid #ddd;
        }
        .card-body {
            padding: 20px;
        }
        .btn {
            display: inline-block;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Email Sent</h2>
            </div>
            <div class="card-body">
                <p>Your email has been queued for sending.</p>
                <a href="" class="btn">Back to Home</a>
            </div>
        </div>
    </div>
</body>
</html>
