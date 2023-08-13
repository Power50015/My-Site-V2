<!-- gallery-area -->
<section id="portfolio" class="pt-120 pb-110 fix" style="background: #fff;">
    <div class="container">
        <div class="portfolio ">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="section-title p-relative mb-50 wow fadeInLeft  animated" data-animation="fadeInLeft" data-delay=".4s">
                        <h5>
                            <span>
                                <img src="{{ asset('site/img/bg/cube.png') }}" alt="icon01">
                            </span> {{$PortfolioSubTitle}}
                        </h5>
                        <h2>
                            {{$PortfolioTitle}}
                        </h2>
                        <div>{!!$PortfolioDescription!!}</div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-right">

                </div>
            </div>
            <div class="home-blog-active wow fadeInUp  animated" data-animation="fadeInUp" data-delay=".4s">
                @forelse ($Projects as $project)
                <div class="grid-item financial">
                    <a href="{{route('projects.show', $project->id)}}">
                        <figure class="gallery-image">
                            <img src="{{ url('public/Image/' . $project->image) }}" alt="{{$project->name}}" class="img">
                            <figcaption>
                                <span>{{$project->sub_title}}</span>
                                <h4> {{$project->name}}</h4>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                @empty
                <p>No Projects</p>
                @endforelse
            </div>
        </div>
    </div>
</section>
<!-- gallery-area-end -->