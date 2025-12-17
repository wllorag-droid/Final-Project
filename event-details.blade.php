<!DOCTYPE html>
<html>
<head>
    <title>{{ $event['title'] }} - Details</title>
    <style>
        body { background-color: pink; font-family: Arial; text-align: center; }
        h1 { color: hotpink; margin-top: 50px; font-size: 3em; }
        p { font-size: 1.5em; margin: 20px 0; }
        .ticket { background: white; display: inline-block; padding: 30px; border-radius: 12px; box-shadow: 0 4px 12px rgba(255,105,180,0.3); margin-top: 30px; }
        a.btn-back { display: inline-block; margin-top: 40px; padding: 12px 20px; background-color: hotpink; color: white; text-decoration: none; border-radius: 10px; font-weight: bold; transition: background-color 0.3s ease; }
        a.btn-back:hover { background-color: deeppink; }
    </style>
</head>
<body>
    <h1>{{ $event['title'] }}</h1>
    <p>Date: {{ $event['date'] }}</p>
    <p>Description: {{ $event['description'] }}</p>

    <div class="ticket">
        <h2>Your Ticket Number</h2>
        <p>{{ $ticketNumber }}</p>
    </div>

    <a href="/dashboard" class="btn-back">Back to Dashboard</a>
</body>
</html>
