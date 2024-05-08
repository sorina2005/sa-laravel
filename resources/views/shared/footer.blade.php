
<footer class="bg-body-tertiary text-center">
    <div class="container p-4">
        <!-- Section: Social media -->
        <div class="mb-4">
            <a
                data-mdb-ripple-init
                class="btn text-white btn-floating m-1"
                style="background-color: #3b5998;"
                href="https://www.facebook.com/sorina.ciobanu.771"
                role="button"
                target="_blank"
            ><i class="fa fa-facebook-f"></i
                ></a>
            <a
                data-mdb-ripple-init
                class="btn text-white btn-floating m-1"
                style="background-color: #55acee;"
                href="https://twitter.com/Sorina80468616"
                role="button"
                target="_blank"
            ><i class="fa fa-twitter"></i
                ></a>
            <a
                data-mdb-ripple-init
                class="btn text-white btn-floating m-1"
                style="background-color: #ac2bac;"
                href="https://www.instagram.com/ciobanu_sorina05/"
                role="button"
                target="_blank"
            ><i class="fa fa-instagram"></i
                ></a>
            <a
                data-mdb-ripple-init
                class="btn text-white btn-floating m-1"
                style="background-color: #333333;"
                href="https://github.com/sorina2005"
                role="button"
                target="_blank"
            ><i class="fa fa-github"></i
                ></a>
        </div>
        <!-- Section: Form -->
        <div class="">
            <form action="">
                <div class="row d-flex justify-content-center">
                    <div class="col-auto">
                        <p class="pt-2">
                            <strong>Sign up for our newsletter</strong>
                        </p>
                    </div>
                    <div class="col-md-5 col-12">
                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="email" id="form5Example24" class="form-control" placeholder="email@something.com" />
                            <label class="form-label" for="form5Example24">Email address</label>
                        </div>
                    </div>
                    <div class="col-auto">
                        <button data-mdb-ripple-init type="submit" class="btn btn-outline mb-4">
                            Subscribe
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="mb-4">
            <p>
                Tasteful recipes and easy to make.
            </p>
        </div>
        <!-- Section: Links -->
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 mx-auto">
                <h5 class="text-uppercase">Links</h5>
                <ul class="list-unstyled mb-auto">
                    <li>
                        <a class="text-body" href="{{ route('home')  }}">Home</a>
                    </li>
                    <li>
                        <a class="text-body" href="{{ route('about-us')  }}">About Us</a>
                    </li>
                    <li>
                        <a class="text-body" href="{{ route('contact') }}">Contact</a>
                    </li>
                    @auth
                        <li>
                            <a class="text-body" href="{{ route('recipes') }}">Recipes</a>
                        </li>
                        <li>
                            <a class="text-body" href="{{ route('profile') }}">Profile</a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ route('favorites') }}">Favorites</a>
                        </li>

                    @endauth
                </ul>
            </div>
        </div>
    </div>
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
        Ciobanu Sorina © 2024 All rights reserved.
    </div>
</footer>

@vite('resources/js/modal_script.js');
@vite('resources/js/index_script.js');
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>
