<!DOCTYPE html>
<html>
<head>
    <title>Email Verified</title>
</head>
<body>
    <h2>Email Verified</h2>
    <p>Dear {{ $user->name }},</p>
    <p>Your email has been successfully verified.</p>
    <p>You can now log in to your account by clicking the following link:</p>
    <p><a href="{{ $verificationUrl }}">Log In</a></p>
</body>
</html>
