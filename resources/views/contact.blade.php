@include('navbar')

<!-- Page Content -->
<div class="page-heading contact-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h2 class="text-primary">contact us</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="find-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Our Location on Maps</h2>
                </div>
            </div>
            <div class="col-md-8">

                <div id="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1993.2539555666158!2d99.06501050136467!3d2.3341671025124793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e04670309d115%3A0xd035ba0030362db!2sToko%20Obat%20Las%20Roha!5e0!3m2!1sid!2sid!4v1619337157433!5m2!1sid!2sid"
                        width="100%" height="330px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-4">
                <div class="left-content">
                    <h4>About our Store</h4>
                    <p>Toko obat Lasroha various types of medical needs, medicines, and other health products</p>
                    <ul class="social-icons">
                        <li><a href="https://www.facebook.com/onra.imanuel"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/onra-sihombing-037545208/"><i
                                    class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://www.instagram.com/onra_imanuel/"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@if(Session::has('user'))
<div class="send-message">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Send us a Message</h2>
                </div>
            </div>
            <div class="col-md-8">
                <div class="contact-form">
                    <form action="{{ route('feedback.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{-- <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name"
                                        placeholder="Full Name" required="" value="{{ Auth::user()->name }}">
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email"
                                        placeholder="E-Mail Address" required="" value="{{ Auth::user()->email }}">
                                </fieldset>
                            </div> --}}
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <fieldset>
                                <input name="subjek" type="text" class="form-control" id="subject"
                                    placeholder="Subject" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <textarea name="deskripsi" rows="6" class="form-control" id="message" placeholder="Your Message"
                                    required=""></textarea>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                            </fieldset>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

   
@else
<div class="send-message">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Send us a Message</h2>
                </div>
            </div>
            <div class="col-md-8">
                <div class="contact-form">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            {{-- <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name"
                                        placeholder="Full Name" required="" value="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email"
                                        placeholder="E-Mail Address" required="" value="">
                                </fieldset>
                            </div> --}}
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="subjek" type="text" class="form-control" id="subject"
                                        placeholder="Subject" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="deskripsi" rows="6" class="form-control" id="message" placeholder="Your Message"
                                        required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="button" id="form-submit" class="filled-button"
                                        onclick="window.location.href='{{ route('login') }}'">Send Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@include('footer')
