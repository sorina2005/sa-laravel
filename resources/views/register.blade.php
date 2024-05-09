@include('shared.header')

<section class="vh-200" style="background-color: #FFE6A7; padding-bottom: 65rem; ">
    <div class="container py-5 h-200">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="../images/baked-apple.webp"
                                 alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;"/>
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form method="post" action="{{ route('create-user') }}">
                                    @csrf

                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <span class="h1 fw-bold mb-0 bx bxs-bowl-hot">Bite Station</span>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">@lang('app.createAccount')</h5>

                                    <div class="form-outline mb-4">
                                        <input class="form-control form-control-lg" type="text" id="name" name="name"
                                               value="{{ old('name') }}">
                                        <label class="form-label" for="name">@lang('app.name')</label>
                                        @php
                                            $field='name'
                                        @endphp
                                        @include('components.error')

                                    </div>

                                    <div class="form-outline mb-4">
                                        <input class="form-control form-control-lg" type="email" id="email" name="email"
                                               value="{{ old('email') }}">
                                        <label class="form-label" for="email">Email</label>
                                        @php
                                            $field='email'
                                        @endphp
                                        @include('components.error')

                                    </div>

                                    <div class="form-outline mb-4">
                                        <input class="form-control form-control-lg" type="password" id="password"
                                               name="password">
                                        <label class="form-label" for="password">@lang('app.password')</label>
                                        <span class="password-toggle-icon"><i class="fa fa-eye"></i></span>
                                        @php
                                            $field='password'
                                        @endphp
                                        @include('components.error')

                                    </div>

                                    <div class="form-outline mb-4">

                                        <input class="form-control form-control-lg" type="password"
                                               id="confirm_password" name="confirm_password">
                                        <label class="form-label" for="confirm-password">@lang('app.confirmPassword')</label>
                                        <span class="confirm-password-toggle-icon"><i class="fa fa-eye"></i></span>
                                        @php
                                            $field='confirm_password'
                                        @endphp
                                        @include('components.error')

                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-dark btn-lg btn-block" value="Submit"
                                               name="register">
                                        <label class="form-label" for="reset">@lang('app.forgotPassword')?</label>
                                        <input type="reset" class="btn btn-secondary ml-2" value="Reset" id="reset">
                                    </div>

                                    <p class="mb-5 pb-lg-2" style="color: #393f81;">@lang('app.alreadyAccount')? <a
                                            href="{{ route('login') }}"
                                            style="color: #393f81;">@lang('app.loginHere')</a></p>
                                    <a href="#!" class="small text-muted">@lang('app.termsOfUse')</a>
                                    <a href="#!" class="small text-muted">@lang('app.privacyPolicy')</a>
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
    const confirmPassword = document.getElementById("confirm_password");
    const togglePassword = document.querySelector(".password-toggle-icon i");
    const togglePassword2 = document.querySelector(".confirm-password-toggle-icon i");

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


    togglePassword2.addEventListener("click", function () {
        if (confirmPassword.type === "password") {
            confirmPassword.type = "text";
            togglePassword2.classList.remove("fa-eye");
            togglePassword2.classList.add("fa-eye-slash");
        } else {
            confirmPassword.type = "password";
            togglePassword2.classList.remove("fa-eye-slash");
            togglePassword2.classList.add("fa-eye");
        }
    });
</script>

@include('shared.footer')
