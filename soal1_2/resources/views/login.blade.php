<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log Management - Login</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/favicon/site.webmanifest') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="script" href="{{ asset('/js/bootstrap.min.js') }}" />
</head>

<body>
    <div class="card mx-auto" style="width: 30rem; margin-top: 200px;">
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
        <div class="card-body">
            <h2 class="mx-auto" style="margin-bottom: 20px;"><b>Login</b></h2>
            <form action="/login/action" method="POST">
                @csrf
                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" required name="email" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" required name="password" class="form-control" id="exampleInputPassword1"
                        placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</body>

</html>
