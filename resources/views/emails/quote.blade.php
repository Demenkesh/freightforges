<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>New Quote Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        .email-container {
            background: #ffffff;
            max-width: 600px;
            margin: 40px auto;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .header {
            background: #023e8a;
            color: white;
            padding: 20px 30px;
            text-align: center;
        }

        .content {
            padding: 30px;
            color: #333;
        }

        .content p {
            font-size: 15px;
            line-height: 1.7;
            margin-bottom: 10px;
        }

        .label {
            font-weight: bold;
            color: #023e8a;
        }

        .footer {
            background: #f1f1f1;
            padding: 15px 30px;
            text-align: center;
            font-size: 13px;
            color: #666;
        }
    </style>
</head>

<body>

    <div class="email-container">
        <div class="header">
            <h2>New Quote Request</h2>
        </div>

        <div class="content">
            <p><span class="label">Name:</span> {{ $name }}</p>
            <p><span class="label">Email:</span> {{ $email }}</p>
            <p><span class="label">Phone:</span> {{ $phone }}</p>
            <p><span class="label">Message:</span></p>
            <p>{{ $user_message }}</p>

        </div>

        <div class="footer">
            © {{ date('Y') }} {{ env('APP_NAME') }}. All rights reserved.
        </div>
    </div>

</body>

</html>
