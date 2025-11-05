<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>New Contact Form Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 15px;
            color: #333;
        }

        .box {
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 6px;
        }

        .label {
            font-weight: bold;
        }

        .message {
            margin-top: 10px;
            padding: 8px;
            background: #f7f7f7;
            border-radius: 4px;
            white-space: pre-wrap;
        }
    </style>
</head>

<body>

    <div class="box">
        <h2 style="margin-top:0;">New Contact Form Message</h2>

        <p><span class="label">Name:</span> {{ $name }}</p>
        <p><span class="label">Email:</span> {{ $email }}</p>
        <p><span class="label">Phone:</span> {{ $phone }}</p>

        <p class="label" style="margin-top: 15px;">Message:</p>
        <div class="message">
            {!! nl2br(e($userMessage)) !!}
        </div>
        <div class="footer">
            This message was sent from the website contact form.
        </div>

    </div>

</body>

</html>