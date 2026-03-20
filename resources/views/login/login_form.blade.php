<!DOCTYPE html>
<html lang="js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ログインフォーム</title>
    @vite('resources/sass/app.scss')
    @vite('resources/css/signin.css')
</head>
<body>
    <form class="form-signin" method="POST" action="{{ route('login') }}">
        @csrf
      <h1 class="h3 mb-3 font-weight-normal">ログインフォーム</h1>
      @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                <ul>
                    <li>{{ $error }}</li>
                </ul>
            </div>
        @endforeach
      <x-alert type="danger" :session="session('danger')"/>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" name = "email" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>

      <button class="btn btn-lg btn-primary btn-block" type="submit">ログイン</button>
    </form>

</body>
</html>


