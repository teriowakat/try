<x-layout>
    <x-slot name="title">Register Benguet State University</x-slot>

    <!-- Fullscreen Background Wrapper -->
    <div class="w-100 min-vh-100 d-flex justify-content-center align-items-center"
         style="background: url('{{ asset('images/uni.jpg') }}') no-repeat center center; background-size: cover; background-attachment: fixed;">

        <!-- Optional overlay for readability -->
        <div class="w-100 h-100 d-flex justify-content-center align-items-center bg-white bg-opacity-75">

            <!-- Full-height container to center form -->
            <div class="d-flex justify-content-center align-items-center w-100" style="max-width: 30rem;">
                <form method="POST" action="/register" class="w-100">
                    @csrf <!-- CSRF token -->

                    <div class="card frosted-card p-4 text-gold shadow">
                        <!-- Logo + Title -->
                        <div class="text-center mb-4">
                            <h3 class="mt-2">Create Your BSU Account</h3>
                        </div>

                        <!-- Input Fields -->
                        <div class="mb-3">
                            <input type="text" class="form-control mb-3" placeholder="Full Name" name="name" required />
                            <input type="email" class="form-control mb-3" placeholder="Email" name="email" required />

                            <!-- Password Input with Show Password -->
                            <input type="password" id="password" class="form-control mb-2" placeholder="Password" name="password" minlength="8" required />
                            <!-- Confirm Password Input -->
                            <input type="password" id="password_confirmation" class="form-control mb-2" placeholder="Confirm Password" name="password_confirmation" required />

                            <!-- Show Password Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="showPassword" onclick="togglePassword()">
                                <label class="form-check-label small" for="showPassword">
                                    Show Password
                                </label>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit" class="btn btn-success w-100 fw-bold" style="border-radius: 50px;">
                                Register
                            </button>
                        </div>

                        <!-- Back to Login -->
                        <div class="text-center mt-3">
                            <small>Already have an account? 
                                <a href="{{ url('/login') }}" class="fw-bold text-success">Log in here</a>
                            </small>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Toggle Password Script -->
    <script>
        function togglePassword() {
            const password = document.getElementById("password");
            const confirmPassword = document.getElementById("password_confirmation");

            const type = password.type === "password" ? "text" : "password";

            password.type = type;
            confirmPassword.type = type;
        }
    </script>

    <!-- Optional Custom CSS -->
    <style>
        .frosted-card {
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.85);
            border-radius: 1rem;
        }

        .form-control:focus {
            border-color: #198754;
            box-shadow: 0 0 0 0.2rem rgba(25, 135, 84, 0.25);
        }

        .btn-success:hover {
            background-color: #157347;
            transition: 0.3s;
        }
    </style>
</x-layout>
