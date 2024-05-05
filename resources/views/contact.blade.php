<!-- Header -->
@include('shared.header')

<main>
    <!--SEND MESSAGE AND EMBEDED MAP-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6" >
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.283745754291!2d24.137322676056687!3d45.78554287108099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x474c67882d9ae7db%3A0x7a33981b6b5f4531!2sBulevardul%20Victoriei%2C%20Sibiu!5e0!3m2!1sen!2sro!4v1710102095425!5m2!1sen!2sro" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-6">


{{--                    <form action="process.php" method="POST">--}}
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <span class="error1"></span>
                                <input type="text" class="form-control" id="inputFirstName" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <span class="error2"></span>
                                <input type="text" class="form-control" id="inputLastName" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="error3"></span>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <span class="error4"></span>
                            <input type="text" class="form-control" id="inputSubject" placeholder="Subject">
                        </div>
                        <div class="form-group text-center">
                            <span class="error5"></span>
                            <textarea placeholder="Message" cols="30" rows="10" class="contact-form-textarea" id="message"></textarea>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary submit">Submit form</button>
                        </div>
                        <div class="form-group text-center">
                            <h1>Submission Counter</h1>
                            <div id="submissionCounter">Submissions: 0</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!--DETALIS CONTACT-->
    <div class="container pt">
        <div class="row">
            <div class="col align-self-start">
                <span class="fa fa-map-marker"></span>
                <p>Address: Complex Studențesc Parc, Bulevardul Victoriei 31, Sibiu 550024</p>
            </div>
            <div class="col align-self-center">
                <span class="fa fa-phone"></span>
                <p>Phone: <a href="tel://1234567920">+40755946884</a></p>
            </div>
            <div class="col align-self-end">
                <span class="fa fa-paper-plane"></span>
                <p>Email: <a href="mailto:ciobanusorina05@gmail.com">ciobanusorina05@gmail.com</a></p>
            </div>
        </div>
    </div>
</main>

<!-- FOOTER -->
@include('shared.footer')
