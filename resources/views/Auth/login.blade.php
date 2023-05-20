<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Todo List</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css') }}">
</head>
<body>
    <div class="container" style="height: 100vh">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-5">
                @if (session('message'))
                <div class="alert alert-success" role="alert">
                    <strong>{{ session('message') }}</strong>
                </div>
                @endif
                @if (session('error'))                    
                <div class="alert alert-success" role="alert">
                    <strong>{{ session('error') }}</strong>
                </div>
                @endif
                <script>
                  $(".alert").alert();
                </script>
                <div class="card">
                    <div class="card-header text-center border-0 bg-white">
                        <h2>Login Form</h2>
                    </div>
                    <div class="card-body">
                        <form action="/login-act" method="POST">
                            @csrf
                            <div class="form-group">
                              <label for="email">Email</label>
                              <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="c" placeholder="Masukkan Email Anda" value="{{ old('email') }}">
                              @error('email')
                                  <small class="text-danger">{{ $message }}</small>
                              @enderror
                            </div>
                            <div class="form-group my-3">
                                <label for="">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Masukkan Password Anda">
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <p>
                                Not have account?.
                                <a href="/register">Register Here</a>
                            </p>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary fw-semibold fs-6 px-3 py-1">Sign In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>