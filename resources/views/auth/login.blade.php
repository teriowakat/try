<x-layout>
    <x-slot name="title">Login</x-slot>

    <!-- Fullscreen Background Wrapper -->
    <div class="w-100 min-vh-100 d-flex justify-content-center align-items-center"
         style="background: url('{{ asset('images/uni.jpg') }}') no-repeat center center; background-size: cover; background-attachment: fixed;">

        <!-- Overlay for readability (optional) -->
        <div class="w-100 h-100 d-flex justify-content-center align-items-center bg-white bg-opacity-75">
            
            <!-- Login Form -->
            <form method="POST" action="/login" class="w-100" style="max-width: 28rem;">
                @csrf <!-- CSRF token -->

                <!-- Card with frosted glass effect -->
                <div class="card shadow-lg p-4 border-0 rounded-4 frosted-card text-dark bg-white bg-opacity-75">
                    
                    <!-- Logo and Title -->
                    <div class="text-center mb-4">
                        <img src="{{ asset('images/images.png') }}" alt="BSU Logo" style="height: 60px;">
                        <h3 class="mt-3 fw-bold">Login to your BSU Account</h3>
                    </div>

                    <!-- Email Field -->
                    <div class="mb-3">
                        <input type="email" class="form-control rounded-pill shadow-sm" placeholder="Email" name="email" required />
                    </div>

                    <!-- Password Field with Show Password -->
                    <div class="mb-3">
                        <input type="password" id="password" class="form-control rounded-pill shadow-sm" placeholder="Password" name="password" required />
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" id="showPassword" onclick="togglePassword()">
                            <label class="form-check-label small" for="showPassword">
                                Show Password
                            </label>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="d-grid mt-3">
                        <button type="submit" class="btn btn-success rounded-pill fw-bold py-2 shadow">
                            Login
                        </button>
                    </div>

                    <!-- Register Link -->
                    <div class="text-center mt-4">
                        <small class="text-muted">Don't have an account? 
                            <a href="{{ url('/register') }}" class="text-success fw-bold">Register here</a>
                        </small>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Custom Styles -->
    <style>
        .frosted-card {
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.8);
        }

        input.form-control::placeholder {
            color: #aaa;
        }

        .form-control:focus {
            border-color: #198754;
            box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
        }

        .btn-success:hover {
            background-color: #157347;
            transition: 0.3s;
        }
    </style>

    <!-- Show Password Script -->
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById("password");
            passwordInput.type = passwordInput.type === "password" ? "text" : "password";
        }
    </script>
</x-layout>
