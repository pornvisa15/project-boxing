<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>หน้าแรก</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    @vite('resources/css/app.css')
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    .header .navbar a:hover,
    .box-item .hero-btn:hover {
        color: #ffd700;
    }

    body {
        background: #f1f3f5;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container {
        max-width: 1140px;
        margin: 0 auto;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .wrapper {
        width: 420px;
        background: rgba(255, 255, 255, 0.15);
        color: #fff;
        border-radius: 10px;
        padding: 30px 40px;
        backdrop-filter: blur(10px);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.37);
        background: #7ba5e4;
        text-align: center;
        margin-top: 50px;
    }

    .wrapper h1 {
        font-size: 36px;
        text-align: center;
        margin-bottom: 20px;
    }

    .input-box {
        position: relative;
        width: 100%;
        height: 50px;
        margin: 30px 0;
    }

    .input-box input {
        width: 100%;
        height: 100%;
        background: transparent;
        border: none;
        outline: none;
        border: 2px solid rgba(255, 255, 255, 0.6);
        border-radius: 40px;
        font-size: 16px;
        color: #fff;
        padding: 0 20px;
        transition: 0.3s ease;
    }

    .input-box input:focus {
        border-color: #fff;
    }

    .input-box input::placeholder {
        color: rgba(255, 255, 255, 0.7);
    }

    .input-box i {
        position: absolute;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
        color: rgba(255, 255, 255, 0.7);
        font-size: 18px;
    }

    .remember-forgot {
        margin: 20px 0;
        display: flex;
        justify-content: space-between;
        color: #fff;
    }

    .remember-forgot label {
        display: flex;
        align-items: center;
        font-size: 14px;
    }

    .remember-forgot a {
        color: #fff;
        text-decoration: none;
        font-size: 14px;
    }

    .remember-forgot a:hover {
        text-decoration: underline;
    }

    .btn {
        width: 100%;
        height: 45px;
        background: #fff;
        border: none;
        outline: none;
        border-radius: 40px;
        box-shadow: 0 0 10px rgba(78, 122, 124, 0.1);
        cursor: pointer;
        font-size: 16px;
        color: #7ba5e4;
        font-weight: 600;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #4a658e;
        color: #fff;
    }

    .register-link {
        font-size: 14.5px;
        text-align: center;
        margin: 20px 0 15px;
        color: #fff;
    }

    .register-link p a {
        color: #fff;
        text-decoration: none;
        font-weight: 600;
    }

    .register-link p a:hover {
        text-decoration: underline;
    }
</style>

<body>
    <div class="container">
        <div class="center">
            <div class="wrapper">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <h1>Login</h1>
                    <div class="input-box">
                        <input type="text" placeholder="Username"  name="teacher_name" required>
                        <i class="fas fa-user"></i>
                    </div>

                    <div class="input-box">
                        <input type="password" placeholder="Password" name="password" required>
                        <i class="fas fa-lock"></i>
                    </div>

                    <div class="remember-forgot">
                        <label><input type="checkbox"> Remember me</label>
                    </div>

                    <button type="submit" class="btn">Login</button>
                </form>
            </div>
        </div>
    </div>

    {{-- <form action="{{ route('login') }}" method="POST">
        @csrf
        <h1>Login</h1>
        <div class="input-box">
            <input type="text" name="teacher_name" placeholder="Username" required>
            <i class="fas fa-user"></i>
        </div>

        <div class="input-box">
            <input type="password" name="password" placeholder="Password" required>
            <i class="fas fa-lock"></i>
        </div>

        <div class="remember-forgot">
            <label><input type="checkbox" name="remember"> Remember me</label>
        </div>

        <button type="submit" class="btn">Login</button>
    </form> --}}
</body>
</html>
