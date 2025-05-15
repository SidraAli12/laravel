<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up</title>
  <link rel="stylesheet" href="signup.css">
</head>
<body>
  <div class="signup-container">
    <h2>Create Account</h2>
    <form action="{{ url('/user/save') }}" method="POST">
  @csrf
  <input type="text" name="name" placeholder="Full Name" required>
  <input type="email" name="email" placeholder="Email Address" required>
  <input type="password" name="password" placeholder="Password" required>
  <button type="submit">Sign Up</button>
</form>

  </div>
</body>
</html>