<!-- brand-area -->
<section class="brand-area pt-120 pb-120" style="background-image: url({{ asset('site/img/bg/client-bg.png') }}); background-position: center top;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="section-title text-center mb-50 wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                    <h5><img src="{{ url('public/Image/' . $SpinnerLogo) }}" alt="img"></h5>
                    <h2>
                        {{ $CompanyTitle }}
                    </h2>

                </div>
            </div>

        </div>
        <div class="row brand-active">
            @forelse ($Companies as $company)
            <div class="col-xl-2">
                <div class="single-brand">
                    <img src="{{ url('public/Image/' . $company->image) }}" alt="img" class="px-3" height="50">
                </div>
            </div>
            @empty
            <p>No Companies</p>
            @endforelse
        </div>
        <div class="row brand-text">
            <div class="col-lg-12">
                {!! $CompanyText !!}
            </div>
        </div>
    </div>
</section>
<!-- brand-area-end -->