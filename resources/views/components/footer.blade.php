<footer class="pt-4 pb-0" style="background-color: rgb(222, 222, 222)">
    
    <div class="container main-foonter-content">
        <div class="row">
            <div class="col-12  logo-wrapper">
                <a href="">
                    <img src="{{ Vite::asset('resources/images/logo/desktop-logo.png') }}" alt=""
                        class="img-fluid">
                </a>
            </div>

            <div class="col-md-5 col-12 intro-text-wrp">
                <div class="text-content">
                    <p class="mb-0">Spot Limo introduces the top-rated limousine and car service in Illinois and its
                        suburban areas. We make your transportation secure with professional and licensed drivers.
                        Whether you are traveling to a nearby state, an airport, or a wedding hall, we try to make your
                        drive memorable with reasonable rates.
                        With an extensive network of affiliates and prompt response time, we prioritize customer
                        satisfaction over anything else.
                    </p>
                </div>
                <div class="icons-social">
                    <div class=title-wrp>
                        <h4>Social Links</h4>
                    </div>
                    <div class="icons-wrp">
                        <ul class="d-flex">
                            @if (theme_options()->where('key', 'social-facebook-url')->first())
                                <li class="me-3">
                                    <a target="_blank"
                                        href="{{ theme_options()->where('key', 'social-facebook-url')->first()->value }}">
                                        <i class="bi bi-facebook"></i>
                                    </a>
                                </li>
                            @endif

                            @if (theme_options()->where('key', 'social-linkedin-url')->first())
                                <li class="me-3">
                                    <a target="_blank"
                                        href="{{ theme_options()->where('key', 'social-linkedin-url')->first()->value }}">
                                        <i class="bi bi-linkedin"></i>
                                    </a>
                                </li>
                            @endif
                            @if (theme_options()->where('key', 'social-twitter-url')->first())
                                <li class="me-3">
                                    <a target="_blank" href="{{ theme_options()->where('key', 'social-twitter-url')->first()->value }}">
                                        <i class="bi bi-twitter"></i>
                                    </a>
                                </li>
                            @endif
                            @if (theme_options()->where('key', 'social-youtube-url')->first())
                                <li class="me-3">
                                    <a target="_blank" href="{{ theme_options()->where('key', 'social-youtube-url')->first()->value }}">
                                        <i class="bi bi-youtube"></i>
                                    </a>
                                </li>
                            @endif
                            @if (theme_options()->where('key', 'social-instagram-url')->first())
                                <li class="">
                                    <a target="_blank" href="{{ theme_options()->where('key', 'social-instagaram-url')->first()->value }}">
                                        <i class="bi bi-instagram"></i>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-4 quicklinks-wrp">
                <div>
                    <div class=title-wrp>
                        <h4>Quick Links</h4>
                    </div>
                    <div class="col">
                        <ul style="">
                            <li><a href="{{ route('home')}}">Home</a></li>
                            <li><a href="{{ route('about')}}">About Us</a></li>
                            <li><a href="">Our Services</a></li>
                            <li><a href="{{ route('vehicle-rates')}}">Our Vehicles</a></li>
                            <li><a href="">Testimonials</a></li>
                            <li><a href="{{ route('contact')}}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-md-4 col-sm-7 offset-md-0 col-8 offset-sm-1 contact-us-wrp">
                <div>
                    <div class=title-wrp>
                        <h4>Contact Us</h4>
                    </div>
                    <div class="col">
                        <ul style="">
                            <li class=" links-wrp ">
                                <div class="d-flex">
                                    <span class="d-block me-2"><i class="bi bi-geo-alt-fill"></i></span>
                                    <div class="">
                                        {{ theme_options()->where('key', 'address')->first()->value }}
                                    </div>

                                </div>

                            </li>
                            <li class="links-wrp">
                                <a href="tel:+1{{str_replace('-','',theme_options()->where('key', 'hotline')->first()->value)}}" class="d-flex">
                                    <span class="d-block me-2"><i class="bi bi-telephone-fill"></i></span>
                                    <div>
                                        {{ theme_options()->where('key', 'hotline')->first()->value }}
                                    </div>
                                </a>
                            </li>
                            <li class="links-wrp">
                                <a href="mailto:{{ theme_options()->where('key', 'email')->first()->value }}"
                                    class="d-flex">
                                    <span class="d-block me-2"><i class="bi bi-envelope-fill"></i></span>
                                    <div>
                                        {{ theme_options()->where('key', 'email')->first()->value }}
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="bottomline py-3 px-0">
        <div class="container">
            <p class="mb-0 copyright-text"><a href="">Spotlimo.com</a> All Rights Reserved. Copyright &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>.
            </p>
            <p class=" mb-0 developed-text"> Developed By, <a href="https://mosora.ai/">mosora.ai</a>
            </p>
        </div>

    </div>
    

</footer>
