<!-- video-area -->
<section class="cta-area cta-bg pt-160" style="background-image:url({{ url('public/Image/' . $ContactBackground) }})">
    <div class="container">
        <div class="row justify-content-center text-center align-items-center">
            <div class="col-lg-12">
                @if(!empty($ContactVideo))
                <a href="{{$ContactVideo}}" class="popup-video mb-50">
                    <img src="{{ asset('site/img/bg/play-button.png') }}" alt="circle_right">
                </a>
                @endif
            </div>
        </div>
    </div>
</section>
<!-- video-area-end -->

<!-- contact-area -->
<section id="contact" class="contact-area after-none contact-bg pb-120 p-relative fix">
    <div class="animations-01"><img src="{{ asset('site/img/bg/an-img-08.png') }}" alt="an-img-01"></div>
    <div class="container">

        <div class="row">

            <div class="col-lg-7 col-md-12 order-1">
                <div class="section-title p-relative mb-50 pl-60 wow fadeInLeft  animated" data-animation="fadeInLeft" data-delay=".4s">
                    <h5>
                        <span>
                            <img src="{{ asset('site/img/bg/cube.png') }}" alt="icon01">
                        </span> {{$ContactSubTitle}}
                    </h5>
                    <h2>
                        {{$ContactTitle}}
                    </h2>
                    <p>Above creature the rule blessed brought. Multiply they're one. Gathering own waters beast blessed.</p>
                </div>

                <div class="contact-info pl-60">
                    <div class="single-cta pb-30 mb-30 wow fadeInUp  animated" data-animation="fadeInDown animated" data-delay=".2s" style="visibility: visible; animation-name: fadeInUp;">
                        {!! $ContactAddress !!}
                    </div>
                    <div class="single-cta pb-30 mb-30 wow fadeInUp  animated" data-animation="fadeInDown animated" data-delay=".2s" style="visibility: visible; animation-name: fadeInUp;">

                    </div>

                </div>
            </div>
            <div class="col-lg-5 col-md-12 order-2">
                <div class="contact-bg">
                    <form action="{{ route('contact.store')}}" method="post" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-field p-relative c-name mb-20">
                                    <i class="fas fa-user"></i>
                                    <input type="text" id="firstn" name="firstn" placeholder="First Name" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="contact-field p-relative c-subject mb-20">
                                    <i class="fas fa-envelope-open"></i>
                                    <input type="text" id="email" name="email" placeholder="Eamil" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="contact-field p-relative c-subject mb-20">
                                    <i class="fas fa-phone"></i>
                                    <input type="text" id="phone" name="phone" placeholder="Phone" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-field p-relative c-subject mb-20">
                                    <i class="fas fa-book"></i>
                                    <input type="text" id="subject" name="subject" placeholder="Subject">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-message mb-30">
                                    <i class="fas fa-pencil"></i>
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Write comments"></textarea>
                                </div>
                                <div class="slider-btn">
                                    <button class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Submit Request</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>

</section>
<!-- contact-area-end -->