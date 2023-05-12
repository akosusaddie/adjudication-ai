<!DOCTYPE html>
<html>
<head>
    <title>Registration Confirmation</title>
</head>
<body>
    <h2>Registration Confirmation</h2>
    <p>Dear {{ $user->name }},</p>
    <p>Thank you for registering! Please click the following link to verify your email:</p>
    <p><a href="{{ $verificationUrl }}">Verify Email</a></p>
    <p>If you didn't register, you can safely ignore this email.</p>
</body>
</html>
