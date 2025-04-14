<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <style>
        /* تنظیمات برای بدنه صفحه */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* استایل لینک‌ها */
        a {
            font-size: 20px;
            color: #3498db;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
            display: inline-block;
            margin: 10px;
        }

        /* تغییر رنگ پس‌زمینه و متن هنگام هاور */
        a:hover {
            background-color: #3498db;
            color: white;
        }

        /* استایل لینک‌ها وقتی فشرده می‌شوند */
        a:active {
            background-color: #2980b9;
        }

        /* استایل برای کل بدنه */
        h1 {
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
    <div>
        <h1>Choose an action:</h1>
        <a href="/create">Create</a>
        <br>
        <a href="/read">Read</a>
        <br>
        <a href="/update">Update</a>
        <br>
        <a href="/destroy">Destroy</a>
    </div>
</body>
</html>
