@section('testimsliderCSS')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection


<div class="testimonials-block mt-0">
    <div class="bg-shape"></div>
    <div class="testimonials-container"
        style="background-image: url('{{ Vite::asset('resources/images/banners/testimonials-bgImg.png') }}')">
        <div class="testimonial-content">
            <div class="testimonial-card-title">
                <h5 class="small-title">TESTIMONIALS</span>
                    <h2 class="title">What Our Clients Say</h2>
            </div>
            <div class="testimonial-slider owl-carousel">
                {{-- @for ($i = 0; $i < 10; $i++) --}}
                <div class="testimonial-item">
                    <div class="testimonial-content mt-4 mb-3">
                        <div class="mx-auto  quote-mark">
                            <img src="{{ Vite::asset('resources/images/other/straight-quotes.png') }}" alt=""
                                class="img-fluid">
                        </div>
                        <div class="text-block ">
                            <p class="mb-o">
                                SpotLimo's black car service in Chicago is the epitome of class and style. The chauffeur
                                was friendly and the vehicle was a pristine luxury SUV. I will definitely be using
                                SpotLimo for all my future transportation needs.
                            </p>
                        </div>
                        <div class="client-details mx-auto  mt-3 mb-3">
                            <div class="avatar">
                                {{-- <img src="{{ Vite::asset('resources/images/other/avatar.png') }}" alt=""
                                    class="img-fluid"> --}}
                            </div>
                            <div class="name-date-wrp">
                                <p>Lopez Holland </p>
                                <p>7/12/2023</p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="testimonial-item">
                    <div class="testimonial-content mt-4 mb-3">
                        <div class="mx-auto  quote-mark">
                            <img src="{{ Vite::asset('resources/images/other/straight-quotes.png') }}" alt=""
                                class="img-fluid">
                        </div>
                        <div class="text-block ">
                            <p class="mb-o">
                                SpotLimo offers an outstanding black car service in Chicago. The chauffeur was
                                professional, the vehicle was elegant, and the overall experience was fantastic. I
                                highly recommend SpotLimo for all your transportation needs. </p>
                        </div>
                        <div class="client-details mx-auto  mt-3 mb-3">
                            <div class="avatar">
                                {{-- <img src="https://plus.unsplash.com/premium_photo-1689551670902-19b441a6afde?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fHdvbWFufGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60"
                                    alt="" class="img-fluid"> --}}
                            </div>
                            <div class="name-date-wrp">
                                <p>Erica Ardith </p>
                                <p>7/10/2023</p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="testimonial-item">
                    <div class="testimonial-content mt-4 mb-3">
                        <div class="mx-auto  quote-mark">
                            <img src="{{ Vite::asset('resources/images/other/straight-quotes.png') }}" alt=""
                                class="img-fluid">
                        </div>
                        <div class="text-block ">
                            <p class="mb-o">
                                SpotLimo's limousine car service in Chicago is exceptional. The stretch limousine was
                                immaculate, and the driver provided a smooth and enjoyable ride. I highly recommend
                                SpotLimo for a luxurious and reliable transportation experience.
                            </p>
                        </div>
                        <div class="client-details mx-auto  mt-3 mb-3">
                            <div class="avatar">
                                {{-- <img src="{{ Vite::asset('resources/images/other/avatar.png') }}" alt=""
                                    class="img-fluid"> --}}
                            </div>
                            <div class="name-date-wrp">
                                <p>Lilly Jasen</p>
                                <p>7/3/2023</p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="testimonial-item">
                    <div class="testimonial-content mt-4 mb-3">
                        <div class="mx-auto  quote-mark">
                            <img src="{{ Vite::asset('resources/images/other/straight-quotes.png') }}" alt=""
                                class="img-fluid">
                        </div>
                        <div class="text-block ">
                            <p class="mb-o">
                                I recently used SpotLimo for a stretch limousine service in Chicago, and I couldn't be
                                happier with the experience. The limousine was elegant and the driver was professional
                                and attentive. SpotLimo offers a truly luxurious ride.
                            </p>
                        </div>
                        <div class="client-details mx-auto  mt-3 mb-3">
                            <div class="avatar">
                                {{-- <img src="{{ Vite::asset('resources/images/other/avatar.png') }}" alt=""
                                    class="img-fluid"> --}}
                            </div>
                            <div class="name-date-wrp">
                                <p>Leo Jason </p>
                                <p>6/30/2023</p>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="testimonial-item">
                    <div class="testimonial-content mt-4 mb-3">
                        <div class="mx-auto  quote-mark">
                            <img src="{{ Vite::asset('resources/images/other/straight-quotes.png') }}" alt=""
                                class="img-fluid">
                        </div>
                        <div class="text-block ">
                            <p class="mb-o">
                                Mr. Ali Shah was great at helping us book a vehicle for a wedding anniversary. I was
                                extremely pleased with the ease of process and great customer service.
                                I would highly recommend spotlimo as one of your go-to limo services.
                            </p>
                        </div>
                        <div class="client-details mx-auto  mt-3 mb-3">
                            <div class="avatar">
                                {{-- <img src="{{ Vite::asset('resources/images/other/avatar.png') }}" alt=""
                                    class="img-fluid"> --}}
                            </div>
                            <div class="name-date-wrp">
                                <p>Abdullah Z Farooqui </p>
                                <p>6/20/2023</p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="testimonial-item">
                    <div class="testimonial-content mt-4 mb-3">
                        <div class="mx-auto  quote-mark">
                            <img src="{{ Vite::asset('resources/images/other/straight-quotes.png') }}" alt=""
                                class="img-fluid">
                        </div>
                        <div class="text-block ">
                            <p class="mb-o">
                                Amazing drivers! Always on time and are very professional. I will go through this company every time I need an SUV or Limo service. Ask for Jay or Riaz as your drivers.
                            </p>
                        </div>
                        <div class="client-details mx-auto  mt-3 mb-3">
                            <div class="avatar">
                                {{-- <img src="{{ Vite::asset('resources/images/other/avatar.png') }}" alt=""
                                    class="img-fluid"> --}}
                            </div>
                            <div class="name-date-wrp">
                                <p>Stefan Johnson</p>
                                <p>6/18/2023</p>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- @endfor --}}
            </div>
        </div>
    </div>
</div>


@section('testimsliderJS')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            $(".testimonial-slider").owlCarousel({
                items: 1,
                nav: false,
                dots: true,
            });
        });
    </script>
@endsection
