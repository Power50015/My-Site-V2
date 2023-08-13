<!-- services-three-area -->
<section id="services" class="services-area services-bg  p-relative fix pt-120 pb-90" style="background:#1a1d88; ">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6">
                <div class="s-single-services text-center mb-30 wow fadeInUp  animated" data-animation="fadeInUp" data-delay=".2s">
                    <div class="services-icon mb-30">
                        <img src="{{ url('public/Image/'.$ServiceImage1) }}" alt="{{$ServiceTitle1}}">
                    </div>
                    <div class="second-services-content">
                        <h3><a href="{{route('service.show',1)}}">{{$ServiceTitle1}}</a></h3>
                        <p>{{$ServiceShortDescription1}}</p>
                        <a href="{{route('service.show',1)}}" class="readmore">{{$ServiceBtn1}}</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="s-single-services text-center active mb-30 wow fadeInUp  animated" data-animation="fadeInUp" data-delay=".4s">
                    <div class="services-icon mb-30">
                        <img src="{{ url('public/Image/'.$ServiceImage2) }}" alt="{{$ServiceTitle2}}">
                    </div>
                    <div class="second-services-content">
                        <h3><a href="{{route('service.show',2)}}">{{$ServiceTitle2}}</a></h3>
                        <p>{{$ServiceShortDescription2}}</p>
                        <a href="{{route('service.show',2)}}" class="readmore">{{$ServiceBtn2}}</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="s-single-services text-center mb-30 wow fadeInUp  animated" data-animation="fadeInUp" data-delay=".6s">
                    <div class="services-icon mb-30">
                        <img src="{{ url('public/Image/'.$ServiceImage3) }}" alt="{{$ServiceTitle3}}">
                    </div>
                    <div class="second-services-content">
                        <h3><a href="{{route('service.show',3)}}">{{$ServiceTitle3}}</a></h3>
                        <p>{{$ServiceShortDescription3}}</p>
                        <a href="{{route('service.show',3)}}" class="readmore">{{$ServiceBtn3}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- services-three-area -->