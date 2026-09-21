<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin - SMKN 1 Cijati</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .login-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: #f4f4f4;
        }
        .login-box {
            background: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 360px;
        }
        .login-box h2 {
            margin-bottom: 1.5rem;
            text-align: center;
        }
        .login-box label {
            display: block;
            margin-bottom: 0.4rem;
            font-weight: 600;
        }
        .login-box input {
            width: 100%;
            padding: 0.6rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .login-box button {
            width: 100%;
            padding: 0.7rem;
            background: #1a73e8;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 600;
        }
        .login-box button:hover {
            background: #1558b0;
        }
        .error-msg {
            color: #d32f2f;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="login-wrapper">
        <div class="login-box">
            <h2>Login Admin</h2>

            @if ($errors->any())
                <div class="error-msg">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus>

                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>

                <label>
                    <input type="checkbox" name="remember" style="width:auto; display:inline-block;">
                    Ingat saya
                </label>

                <button type="submit">Masuk</button>
            </form>
        </div>
    </div>
</body>
</html>