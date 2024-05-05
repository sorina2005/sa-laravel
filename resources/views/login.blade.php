@include('shared.header')
<body>
<section class="vh-130" style="background-color: #FFE6A7;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="{{ asset('images/baked-apple.webp') }}"
                                 alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">


                                <form method="post" action="{{ route('authenticate') }}">
                                    @csrf
{{--                                    <?php include('errors.php'); ?>--}}

                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <span class="h1 fw-bold mb-0 bx bxs-bowl-hot">Bite Station</span>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                                    <div class="form-outline mb-4">

                                        <input type="text" id="username" class="form-control form-control-lg" name="email"/>
                                        <label class="form-label" for="username">Username</label>
                                    </div>

                                    <div class="form-outline mb-4">

                                        <input type="password" id="password" class="form-control form-control-lg" name="password" />
                                        <label class="form-label" for="password">Password</label>
                                        <span class="password-toggle-icon"><i class="fa fa-eye"></i></span>

                                    </div>


                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-dark btn-lg btn-block" type="submit" value="login" name="login">Login</button>
                                    </div>

                                    <a class="small text-muted" href="!#">Forgot password?</a>
                                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="register.php"
                                                                                                              style="color: #393f81;">Register here</a></p>
                                    <a href="#!" class="small text-muted">Terms of use.</a>
                                    <a href="#!" class="small text-muted">Privacy policy</a>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const passwordField = document.getElementById("password");
    const togglePassword = document.querySelector(".password-toggle-icon i");

    togglePassword.addEventListener("click", function () {
        if (passwordField.type === "password") {
            passwordField.type = "text";
            togglePassword.classList.remove("fa-eye");
            togglePassword.classList.add("fa-eye-slash");
        } else {
            passwordField.type = "password";
            togglePassword.classList.remove("fa-eye-slash");
            togglePassword.classList.add("fa-eye");
        }
    });
</script>

@include('shared.footer')

