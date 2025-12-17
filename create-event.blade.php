<!DOCTYPE html>
<html>
<head>
    <title>Create Event</title>
    <style>
        body { background-color: pink; font-family: Arial; text-align: center; }
        h1 { color: hotpink; margin-top: 50px; font-size: 3em; }
        form { background: white; max-width: 400px; margin: 50px auto; padding: 30px; border-radius: 12px; box-shadow: 0 4px 12px rgba(255,105,180,0.3); }
        input, textarea { width: 100%; padding: 12px; margin-bottom: 20px; border-radius: 6px; border: 1px solid #ccc; }
        button { width: 100%; padding: 15px; background-color: hotpink; color: white; border: none; border-radius: 10px; font-weight: bold; cursor: pointer; }
        button:hover { background-color: deeppink; }
    </style>
</head>
<body>
    <h1>Create Event</h1>
    <form method="POST" action="/events/create">
        @csrf
        <input type="text" name="title" placeholder="Event Title" required>
        <input type="date" name="date" required>
        <textarea name="description" placeholder="Description" required></textarea>
        <button type="submit">Create Event</button>
    </form>
</body>
</html>
