<!DOCTYPE html>
<html>
<head>
    <title>Edit Event</title>
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
    <h1>Edit Event</h1>
    <form method="POST" action="/events/{{ $event['id'] }}/edit">
        @csrf
        <input type="text" name="title" value="{{ $event['title'] }}" required>
        <input type="date" name="date" value="{{ $event['date'] }}" required>
        <textarea name="description" required>{{ $event['description'] }}</textarea>
        <button type="submit">Update Event</button>
    </form>
</body>
</html>
