<!-- awards-area -->
<section id="awards" class="awards-area after-none contact-bg pt-120 pb-120 p-relative fix" style="background: #f1f4f6;">
    <div class="animations-03"><img src="{{ asset('site/img/bg/an-img-06.png') }}" alt="an-img-01"></div>
    <div class="animations-02"><img src="{{ asset('site/img/bg/an-img-07.png') }}" alt="contact-bg-an-01"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-50 wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                    <h5>{{ $AwardTitle }}</h5>
                    <h2>
                        {{ $AwardSubTitle }}
                    </h2>
                </div>
            </div>
            <div class="col-lg-12">
                @forelse ($Awards as $award)
                <div class='awards-box p-relative hover-zoomin'>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-9">
                            <span>{{$award->sub_title}}</span>
                            <h3>{{$award->title}}</h3>
                        </div>
                        <div class="col-lg-3 text-right">
                            <span class="sine">{{date('F Y', strtotime($award->date))}}</span>
                        </div>
                    </div>
                    <div class="layer img-hover" data-depth="0.10">
                        <img src="{{ url('public/Image/' . $award->image) }}" alt="shape">
                    </div>
                </div>
                @empty
                <p>No Awards</p>
                @endforelse
            </div>
        </div>
    </div>
</section>
<!-- awards-area-end -->