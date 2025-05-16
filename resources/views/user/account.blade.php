
<!-- resources/views/account.blade.php -->
<!DOCTYPE html>
<html lang="en">

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>

</html>
