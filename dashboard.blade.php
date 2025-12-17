<!DOCTYPE html>
<html>
<head>
    <title>My Events</title>
    <style>
        body { background-color: pink; font-family: Arial; text-align: center; }
        h1 { color: hotpink; margin-top: 50px; font-size: 3em; }
        a.btn { display: inline-block; padding: 10px 20px; background-color: hotpink; color: white; text-decoration: none; border-radius: 10px; margin: 10px; }
        a.btn:hover { background-color: deeppink; }
        table { width: 80%; margin: 20px auto; border-collapse: collapse; background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 12px rgba(255,105,180,0.3);}
        th, td { padding: 15px; border-bottom: 1px solid #ddd; }
        th { background-color: hotpink; color: white; }
        form { display: inline; }
        button.delete { padding: 5px 10px; background-color: red; color: white; border: none; border-radius: 6px; cursor: pointer; }
        button.delete:hover { background-color: darkred; }
    </style>
</head>
<body>
    <h1>My Events</h1>
    <a href="/events/create" class="btn">Create New Event</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Date</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        @foreach($events as $event)
        <tr>
            <td>{{ $event['id'] }}</td>
            <td>{{ $event['title'] }}</td>
            <td>{{ $event['date'] }}</td>
            <td>{{ $event['description'] }}</td>
            <td>
                <a href="/events/{{ $event['id'] }}" class="btn">Details</a>
                <a href="/events/{{ $event['id'] }}/edit" class="btn">Edit</a>
                <form action="/events/{{ $event['id'] }}/delete" method="POST">
                    @csrf
                    <button type="submit" class="delete">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
