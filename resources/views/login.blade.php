<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container p-0">
    <h2>Login</h2>

    <form method="POST" action="{{ route('request-code') }}">
        @csrf

        <!-- Email field -->
        <div class="form-group d-flex justify-content-between">
            <label class="col-2 text-primary" for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <!-- Request button -->
        <button type="submit" class="btn btn-primary col-12">Request</button>
    </form>

    <!-- Code field -->
    <form method="POST" action="{{ route('login-user') }}">
        @csrf

        <div class="form-group mt-3 d-flex justify-content-between">
            <label class="col-2 text-primary" for="code">Code:</label>
            <input type="text" class="form-control" id="code" name="code" required>
        </div>

        <!-- Log in button -->
        <button type="submit" class="btn btn-success w-100">Log in</button>
    </form>
</div>

</body>
</html>

