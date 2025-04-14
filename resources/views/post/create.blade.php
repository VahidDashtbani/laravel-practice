<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
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

        /* استایل فرم */
        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        /* استایل برای برچسب‌ها */
        label {
            font-size: 16px;
            color: #333;
            margin-bottom: 10px;
            display: block;
        }

        /* استایل فیلدهای ورودی */
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        /* استایل دکمه ارسال */
        input[type="submit"] {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        /* تغییر رنگ دکمه هنگام هاور */
        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        /* فاصله بین فیلدها */
        br {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

    <form action="{{ route('create') }}" method="POST">
        @csrf
        <label for="name">Please enter name:</label><br>
        <input type="text" id="name" name="name" required><br>

        <label for="slug">Please enter slug:</label><br>
        <input type="text" id="slug" name="slug" required><br>

        <input type="submit" id="Submit" name="Submit" value="Create">
    </form>

</body>
</html>

