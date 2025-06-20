<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Email</title>
</head>
<body>
    <h1>You have recieved an email</h1>
    <p><strong>Name:</strong> {{ $mailData['name'] }}</p>
    <p><strong>Email:</strong> {{ $mailData['email'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $mailData['$message'] }}</p>

    <p>Thank you for reaching out!</p>
    
</body>
</html>