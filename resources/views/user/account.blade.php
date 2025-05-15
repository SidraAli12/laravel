
<!-- resources/views/account.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Account</title>
</head>
<body>
    <h2>Welcome</h2>
    <p>You are logged in successfully.</p>

    <form method="POST" action="user/account">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
