<!-- video-area -->
<section id="video" class="video-area pt-120 pb-120 p-relative fix">
    <div class="animations-01"><img src="{{ asset('site/img/bg/an-img-05.png') }}" alt="an-img-01"></div>
    <div class="container">
        <div class="row  home-blog-active2">
            @forelse ($Stories as $story)
            <div class="col-lg-12">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <div class="video-content wow fadeInRight  animated" data-animation="fadeInRight" data-delay=".4s">
                            <div class="section-title pb-25">
                                <h5><span><img src="{{ asset('site/img/bg/cube.png') }}" alt="icon01"></span> {{$story->name}}</h5>
                                <h2>{{$story->title}}</h2>
                            </div>
                            <div>
                                {!! $story->description !!}
                            </div>
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-6">
                                    <div class="about-user">
                                        @if(!empty($story->client_image))
                                        <div class="img">
                                            <img src="{{ url('public/Image/' . $story->client_image) }}" alt="{{ $story->title }}">
                                        </div>
                                        @endif
                                        <div class="text">
                                            <span>{{$story->client_job}}</span>
                                            <h5>{{$story->client_name}}</h5>
                                        </div>
                                        
                                    </div>
                                </div>
     
                                <div class="col-lg-6 text-right">
                                    <img src="{{ url('public/Image/' . $story->client_logo) }}" alt="img">
                                </div>
                               
                            </div>
                            <div class="row justify-content-center align-items-center mt-30 bdr">
                                <div class="col-lg-8 pt-30">
                                    <div class="rised">
                                        <ul>
                                            <li>
                                                <span>{{$story->statisticTitle1}}</span>
                                                <h4>{{$story->statisticNumber1}}</h4>
                                            </li>
                                            <li>
                                                <span>{{$story->statisticTitle2}}</span>
                                                <h4>{{$story->statisticNumber2}}</h4>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-4 text-right pt-30">
                                    @if(!empty($story->linkText))
                                    <a href="{{$story->link}}" class="btn ss-btn smoth-scroll">
                                        {{$story->linkText}}
                                        <i class="fal fa-long-arrow-right"></i>
                                    </a>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="s-video-wrap pl-60">
                            <div class="video-img">
                                <img src="{{ url('public/Image/' . $story->image) }}" alt="img">
                            </div>
                            @if(!empty($story->videoLink))
                            <div class="s-video-content">
                                <a href="{{$story->videoLink}}" class="popup-video mb-50">
                                    <img src="{{ asset('site/img/bg/play-button.png') }}" alt="circle_right">
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <p>No Stories</p>
            @endforelse
        </div>
    </div>
</section>
<!-- video-area-end -->