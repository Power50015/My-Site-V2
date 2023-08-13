<x-site-layout>
    <!-- main-area -->
    <main>
        <!-- breadcrumb-area -->
        <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(img/bg/bdrc-bg.png);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="breadcrumb-wrap text-center">
                            <div class="breadcrumb-title">
                                <h2>{{$project->name}}</h2>
                                <div class="breadcrumb-wrap">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="{{ route('home') }}">Home</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="{{ route('projects.all') }}">Projects</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">{{$project->name}}</li>
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
        <!-- Project Detail -->
        <section class="project-detail pt-120 pb-90" style="background: #fff;">
            <div class="container">


                <!-- Lower Content -->
                <div class="lower-content">
                    <div class="row">
                        <div class="text-column col-lg-8 col-md-12 col-sm-12">
                            <!-- Upper Content -->
                            <div class="upper-box">
                                <div class="single-item-carousel owl-carousel owl-theme">
                                    <figure class="image pb-30"> <img src="{{ url('public/Image/' . $project->image) }}" alt="{{$project->name}}"></figure>
                                    <h3>{{$project->name}}</h3>
                                    <h6>{{$project->sub_title}}</h6>
                                </div>
                            </div>
                            <div class="inner-column">
                                {!! $project->description !!}
                            </div>
                        </div>

                        <div class="info-column col-lg-4 col-md-12 col-sm-12">
                            <div class="inner-column">

                                <ul class="project-info clearfix">
                                    <li>
                                        <strong>Sub Title:</strong>
                                        <p>{{$project->sub_title}}</p>
                                    </li>

                                    <li>

                                        <strong>Date:</strong>
                                        <p>{{date('F Y', strtotime($project->date))}}</p>
                                    </li>

                                    <li>

                                        <strong>Skills:</strong>
                                        <div>
                                            @forelse ($skills as $skill)
                                            <img src="{{ url('public/Image/' . $skill->image) }}" alt="{{$skill->name}}">
                                            @empty
                                            @endforelse
                                        </div>
                                    </li>
                                    @if(!empty($project->link) || !empty($project->codeLink))
                                    <div class="slider-btn mt-30">
                                        @if(!empty($project->link))
                                        <a href="{{ $project->link}}" class="btn ss-btn mr-15"><span>Live Preview</span> </a>
                                        @endif
                                        @if(!empty($project->codeLink))
                                        <a href="{{ $project->codeLink}}" class="btn ss-btn mr-15"><span>Code Preview</span> </a>
                                        @endif
                                    </div>
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Project Detail -->
    </main>
    <!-- main-area-end -->
</x-site-layout>