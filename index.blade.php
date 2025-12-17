<!-- resources/views/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Event Reservation</title>
    <style>
        body {
            background-color: pink;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        h1 {
            color: hotpink; /* brighter pink for contrast */
            text-align: center;
            padding-top: 50px;
            font-size: 3em;
        }
        p {
            text-align: center;
            font-size: 1.2em;
            color: #333;
            margin-bottom: 40px;
        }
        .btn-book-now {
            display: block;
            width: 200px;
            margin: 0 auto 50px; /* center horizontally and add bottom margin */
            padding: 15px 0;
            background-color: hotpink;
            color: white;
            font-size: 1.5em;
            font-weight: bold;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            box-shadow: 0 4px 8px rgba(255, 105, 180, 0.4);
            transition: background-color 0.3s ease;
        }
        .btn-book-now:hover {
            background-color: deeppink;
        }
    </style>
</head>
<body>
    <h1>Welcome to Event Reservation</h1>
    <p>Book now for Good Experience!!!</p>
    <a href="/login" class="btn-book-now">Book Now</a>
</body>
</html>
