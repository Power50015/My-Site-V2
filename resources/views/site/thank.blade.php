<x-site-layout>
    <!-- main-area -->
    <main>
        <!-- breadcrumb-area -->
        <section class="breadcrumb-area d-flex align-items-center" style="background-image:url({{ url('public/Image/'.$HomeBackground) }});">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-center">
                            <div class="breadcrumb-title">
                                <h2>Thank You</h2>
                                <div class="breadcrumb-wrap">

                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Thank You</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- contact-area -->
        <section class="after-none contact-bg pt-60 pb-120 p-relative fix" style="background: #fff;">
            <div class="container">

                <div class="row">

                    <div class="col-lg-12 text-center">
                        <p><img src="{{ asset('site/img/bg/contact-img.png') }}" alt="map"></p>
                    </div>

                </div>

            </div>

        </section>
        <!-- contact-area-end -->
    </main>
    <!-- main-area-end -->
</x-site-layout>