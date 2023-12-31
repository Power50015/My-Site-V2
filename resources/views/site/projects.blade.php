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
                                <h2>Projects</h2>
                                <div class="breadcrumb-wrap">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="{{ route('home') }}">
                                                    Home
                                                </a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                Projects
                                            </li>
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
        <!-- inner-blog -->
        <section class="inner-blog pt-120" style="background-color: #fff;">
            <div class="container">
                <div class="row">
                    @forelse ($Projects as $project)
                    <div class="col-lg-6">

                        <div class="bsingle__post mb-50">
                            <div class="bsingle__post-thumb">
                                <img src="{{ url('public/Image/' . $project->image) }}" alt="{{$project->name}}">
                            </div>
                            <div class="bsingle__content">
                                <div class="meta-info">
                                    <ul>
                                        <li><i class="fal fa-user"></i>{{$project->sub_title}}</li>
                                        <li><i class="fal fa-calendar-alt"></i>{{date('F Y', strtotime($project->date))}}</li>
                                    </ul>
                                </div>
                                <h2><a href="{{route('projects.show', $project->id)}}">{{$project->name}}</a></h2>
                                <p>{!! $project->small_description !!}</p>
                                <div class="blog__btn">
                                    <a href="{{route('projects.show', $project->id)}}" class="btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <p>No Projects</p>
                    @endforelse
                </div>
            </div>
        </section>
        <!-- inner-blog-end -->
    </main>
    <!-- main-area-end -->
    <x-slot:MetaData>
        <title>Mohamed Ashamallah - Projects</title>
        <meta name="description" content="Finding solutions to challenges and focused on customer satisfaction. Proven experience developing consumer-focused web sites using JavaScript and PHP. Experience building products for Web.
    I love to learn Software engineering, more standards for Programming, user experience, best practices, usability, and speed code. 
    Responding to challenges by designing and developing solutions and building web applications aligned to customer services. 
    Translating solutions into code.">

        <meta property="og:title" content="Mohamed Ashamallah - Projects" />
        <meta property="og:image" content="{{ asset('site/favicon_io/screen.png') }}" />
        <meta property="og:description" content="Finding solutions to challenges and focused on customer satisfaction. Proven experience developing consumer-focused web sites using JavaScript and PHP. Experience building products for Web.
    I love to learn Software engineering, more standards for Programming, user experience, best practices, usability, and speed code. 
    Responding to challenges by designing and developing solutions and building web applications aligned to customer services. 
    Translating solutions into code." />
        <meta property="og:url" content="https://mohamed-ashamallah.com/" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="627" />
        <meta property="og:type" content="website" />
        </x-slot>
</x-site-layout>