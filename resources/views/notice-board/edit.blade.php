<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            border-radius:14px;
            background-color: #f5f5f5;
        }
        .form-container {
            background-color: white;
            padding: 30px;
            max-width: 500px;
            width: 100%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-group textarea {
            resize: vertical;
            height: 150px;
        }
        .form-group button {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background: #2c3e50;
            color: white;
            border: none;
            border-radius: 24px;
            cursor: pointer;
        }
        .form-group button:hover {
            background:rgb(8, 129, 120);
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Notice Form</h2>
    <div class="card">
        <div class="card-header">
            <h5>
                <a href="{{route('notice.create')}}" class="btn btn-primary float-end">Add notice</a>
            </h5>
        </div>

    </div>
    <form action="{{route('notice.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ $notice->title }}" required placeholder="Notice">
        </div>
        <div class="form-group">
            <label for="content">Content:</label>
            <input type="text" name="content" value="{{ $notice->content }}" required></input>
        </div>
        <div class="form-group">
            <button type="submit">Update</button>
        </div>
    </form>
</div>

</body>
</html>
