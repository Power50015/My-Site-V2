<x-site-layout>
    <!-- main-area -->
    <main>
        <!-- breadcrumb-area -->
        <section class="breadcrumb-area d-flex align-items-center" style="background-image: url('{{ url('public/Image/'.$HomeBackground) }}'); ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-center">
                            <div class="breadcrumb-title">
                                <h2>{{ $ServiceTitle }}</h2>
                                <div class="breadcrumb-wrap">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">{{ $ServiceTitle }}</li>
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
        <!-- service-details-area -->
        <div class="about-area5 about-p p-relative pt-120 pb-90" style="background: #fff;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 order-2">
                        <div class="service-detail">
                            <div class="content-box">
                                {!! $ServiceDescription !!}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- service-details-area-end -->
    </main>
    <!-- main-area-end -->
</x-site-layout>