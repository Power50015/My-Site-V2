<!-- slider-area -->
<section id="parallax" class="slider-area pt-120 fix p-relative">
    <div class="slider-shape ss-one layer" data-delay=".15s" data-depth="0.10"><img src="{{ asset('site/img/bg/slider_shape01.png') }}" alt="shape"></div>
    <div class="slider-shape ss-three layer" data-depth="0.40"><img src="{{ asset('site/img/bg/slider_shape03.png') }}" alt="shape"></div>
    <div class="slider-active">
        <div class="single-slider slider-bg d-flex align-items-center" style="background-image: url('{{ url('public/Image/'.$HomeBackground) }}'); background-color: #fff; ">
            <div class="container">
                <div class="row justify-content-center align-items-center">

                    <div class="col-lg-7 col-md-7">
                        <div class="slider-content s-slider-content mt-100 p-relative">
                            <h5 data-animation="fadeInUp" data-delay=".3s">
                                <span>
                                    <img src="{{ asset('site/img/bg/cube.png') }}" alt="icon01">
                                </span>
                                {{$HomeJob}}
                            </h5>
                            <h2 data-animation="fadeInUp" data-delay=".6s">{{$HomeTitle}}</h2>
                            @isset($Codewars)
                            <div class="slider-btn">
                                <a href="{{$Codewars}}" target="_blank" class="" data-animation="fadeInUp" data-delay=".9s">
                                    <img src="https://www.codewars.com/users/Mohamed%20Ashamallah/badges/large" alt="">
                                </a>
                            </div>
                            @endisset
                            <br>
                            <div class="slider-btn mb-105 mt-3">
                                <a href="{{url('public/Image/'.$CV)}}" class="btn ss-btn mr-15" data-animation="fadeInUp" data-delay=".9s" download>Download CV </a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 p-relative">
                        <div class="img-main" data-animation="fadeInRight" data-delay=".3s">
                            @if(!empty($HomeImage))
                            <img src="{{ url('public/Image/'.$HomeImage) }}" alt="slider-overlay">
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- slider-area-end -->