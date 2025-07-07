<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Page</title>
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

        /* استایل پیام‌های نمایش داده شده */
        .message {
            margin-top: 20px;
            padding: 10px;
            background-color: #2ecc71;
            color: white;
            font-weight: bold;
            border-radius: 5px;
        }

        .error {
            margin-top: 20px;
            padding: 10px;
            background-color: #e74c3c;
            color: white;
            font-weight: bold;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <form action="{{ route('read') }}" method="POST">
        @csrf
        <label for="row">Please enter row for show:</label><br>
        <input type="text" id="row" name="row" required><br>
        <input type="submit" id="Submit" name="Submit" value="Submit">
    </form>

    <!-- نمایش پیام موفقیت یا خطا -->
    @if(session('message'))
        <div class="message">
            {{ session('message') }}
        </div>
    @endif

    @if(session('error'))
        <div class="error">
            {{ session('error') }}
        </div>
    @endif

</body>
</html>
