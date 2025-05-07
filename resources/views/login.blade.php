@extends("layouts.layout")

@section('title', 'Login')

@section('content')
    <!-- Main container with light blue background -->
    <div class="login-container">
        <!-- Centered card with white background -->
        <div class="login-card">
            <h3 class="login-title">Halaman Login</h3>

            <!-- Login form -->
            <form class="login-form" action="/login" method="POST">
                @csrf

                <!-- Email input -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email"
                           id="email"
                           name="email"
                           class="form-control"
                           placeholder="Masukkan email"
                           required>
                </div>

                <!-- Password input -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password"
                           id="password"
                           name="password"
                           class="form-control"
                           placeholder="Masukkan password"
                           required>
                </div>

                <!-- Submit button -->
                <button type="submit" class="login-button">
                    Login
                </button>
            </form>
        </div>
    </div>

    <style>
        /* Main container styles */
        .login-container {
            background-color: #e3f2fd;
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 20px;
        }

        /* Card styles */
        .login-card {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
        }

        /* Title styles */
        .login-title {
            font-weight: bold;
            text-align: center;
            margin-bottom: 1.5rem;
            color: #333;
        }

        /* Form group spacing */
        .form-group {
            margin-bottom: 1rem;
        }

        /* Input styles */
        .form-control {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .login-button {
            background-color: #0d6efd;
            color: white;
            width: 100%;
            padding: 0.5rem;
            border: none;
            border-radius: 4px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .login-button:hover {
            background-color: #0b5ed7;
        }
    </style>
@endsection
