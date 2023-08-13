<!-- testimonial-area -->
<section id="testimonial" class="testimonial-area pt-120 pb-115 p-relative fix">
    <div class="animations-01"><img src="{{ asset('site/img/bg/an-img-03.png') }}" alt="an-img-01"></div>
    <div class="animations-02"><img src="{{ asset('site/img/bg/an-img-04.png') }}" alt="contact-bg-an-01"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-35 wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                    <h5>{{$TestimonialTitle}}</h5>
                    <h2>
                        {{$TestimonialSubTitle}}
                    </h2>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="testimonial-active wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                    @forelse ($Testimonials as $testimonial)
                    <div class="single-testimonial text-center">
                        <div class="testi-author">
                            <img src="{{ url('public/Image/' . $testimonial->client_image) }}" alt="img">
                        </div>
                        <p>“ {!! $testimonial->text !!} ”</p>
                        <div class="ta-info">
                            <h6>{{ $testimonial->client }}</h6>
                            <span>{{ $testimonial->client_job }}</span>
                        </div>
                    </div>
                    @empty
                    <p>No Testimonials</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-area-end -->