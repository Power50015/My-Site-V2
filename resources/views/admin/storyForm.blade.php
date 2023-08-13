<x-app-layout>
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">
                                @isset($story)
                                Edit
                                @endisset
                                @empty($story)
                                Add
                                @endempty
                                story</h4>
                            <hr class="mb-2" />
                            <div class="row">
                                @if(session('success'))

                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <i class="mdi mdi-check-all me-2"></i> {!! session('success') !!}
                                </div>
                                @endif

                                @if(session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <i class="mdi mdi-block-helper me-2"></i> {!! session('error') !!}
                                </div>
                                @endif



                                <div class="col-lg-12">

                                    @isset($story)
                                    <form method="POST" action="{{ route('story.update',$story->id) }}" enctype="multipart/form-data">
                                        @method('PUT')
                                        @endisset
                                        @empty($story)
                                        <form method="POST" action="{{ route('story.store') }}" enctype="multipart/form-data">
                                            @endempty
                                            @csrf
                                            <div class="mb-3">
                                                <div class="row">
                                                    <div class="col-12 mt-3">
                                                        <x-input-label for="title" :value="__('Name')" class="form-label" />
                                                        <x-text-input id="name" class="form-control" type="text" name="name" autocomplete="name" value="{{@isset($story->name)?$story->name:''}}" />
                                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <x-input-label for="title" :value="__('Title')" class="form-label" />
                                                        <x-text-input id="title" class="form-control" type="text" name="title" autocomplete="title" value="{{@isset($story->title)?$story->title:''}}" />
                                                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <x-input-label :value="__('Description')" class="form-label" />
                                                        <div id="snow-editor" style="height: 300px;">
                                                            @isset($story->description)
                                                            {!!$story->description!!}
                                                            @endisset
                                                        </div> <!-- end Snow-editor-->
                                                        <textarea class="w-100 d-none" id="text-editor" name="description">
                                                            @isset($story->description)
                                                            {!!$story->description!!}
                                                            @endisset</textarea>
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <x-input-label for="client_name" :value="__('Client Name')" class="form-label" />
                                                        <x-text-input id="client_name" class="form-control" type="text" name="client_name" autocomplete="client_name" value="{{@isset($story->client_name)?$story->client_name:''}}" />
                                                        <x-input-error :messages="$errors->get('client_name')" class="mt-2" />
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <x-input-label for="client_job" :value="__('Client Job')" class="form-label" />
                                                        <x-text-input id="client_job" class="form-control" type="text" name="client_job" autocomplete="client_job" value="{{@isset($story->client_job)?$story->client_job:''}}" />
                                                        <x-input-error :messages="$errors->get('client_job')" class="mt-2" />
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <x-input-label for="client_image" :value="__('Client Image')" class="form-label" />
                                                        <div class="d-flex">
                                                            <input type="file" name="client_image" data-plugins="dropify" data-default-file="" data-height="300" />
                                                            @isset($story->client_image)
                                                            <img src="{{ url('public/Image/'.$story->client_image) }}" alt="{{$story->client_name}}" class="d-inline mx-3" width="300" height="300" />
                                                            @endisset
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <x-input-label for="client_logo" :value="__('Client Logo')" class="form-label" />
                                                        <div class="d-flex">
                                                            <input type="file" name="client_logo" data-plugins="dropify" data-default-file="" data-height="300" />
                                                            @isset($story->client_logo)
                                                            <img src="{{ url('public/Image/'.$story->client_logo) }}" alt="{{$story->client_name}}" class="d-inline mx-3" width="300" height="300" />
                                                            @endisset
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <x-input-label for="statisticTitle1" :value="__('Statistic Title 1')" class="form-label" />
                                                        <x-text-input id="statisticTitle1" class="form-control" type="text" name="statisticTitle1" autocomplete="statisticTitle1" value="{{@isset($story->statisticTitle1)?$story->statisticTitle1:''}}" />
                                                        <x-input-error :messages="$errors->get('statisticTitle1')" class="mt-2" />
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <x-input-label for="statisticNumber1" :value="__('Statistic Number 1')" class="form-label" />
                                                        <x-text-input id="statisticNumber1" class="form-control" type="text" name="statisticNumber1" autocomplete="statisticNumber1" value="{{@isset($story->statisticNumber1)?$story->statisticNumber1:''}}" />
                                                        <x-input-error :messages="$errors->get('statisticNumber1')" class="mt-2" />
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <x-input-label for="statisticTitle2" :value="__('Statistic Title 2')" class="form-label" />
                                                        <x-text-input id="statisticTitle2" class="form-control" type="text" name="statisticTitle2" autocomplete="statisticTitle2" value="{{@isset($story->statisticTitle2)?$story->statisticTitle2:''}}" />
                                                        <x-input-error :messages="$errors->get('statisticTitle2')" class="mt-2" />
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <x-input-label for="statisticNumber2" :value="__('Statistic Number 2')" class="form-label" />
                                                        <x-text-input id="statisticNumber2" class="form-control" type="text" name="statisticNumber2" autocomplete="statisticNumber2" value="{{@isset($story->statisticNumber2)?$story->statisticNumber2:''}}" />
                                                        <x-input-error :messages="$errors->get('statisticNumber2')" class="mt-2" />
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <x-input-label for="link" :value="__('Link')" class="form-label" />
                                                        <x-text-input id="link" class="form-control" type="text" name="link" autocomplete="link" value="{{@isset($story->link)?$story->link:''}}" />
                                                        <x-input-error :messages="$errors->get('link')" class="mt-2" />
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <x-input-label for="linkText" :value="__('Link Text')" class="form-label" />
                                                        <x-text-input id="linkText" class="form-control" type="text" name="linkText" autocomplete="linkText" value="{{@isset($story->linkText)?$story->linkText:''}}" />
                                                        <x-input-error :messages="$errors->get('linkText')" class="mt-2" />
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <x-input-label for="videoLink" :value="__('Video Link')" class="form-label" />
                                                        <x-text-input id="link" class="form-control" type="text" name="videoLink" autocomplete="videoLink" value="{{@isset($story->videoLink)?$story->videoLink:''}}" />
                                                        <x-input-error :messages="$errors->get('videoLink')" class="mt-2" />
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <x-input-label for="image" :value="__('Image')" class="form-label" />
                                                        <div class="d-flex">
                                                            <input type="file" name="image" data-plugins="dropify" data-default-file="" data-height="300" />
                                                            @isset($story->image)
                                                            <img src="{{ url('public/Image/'.$story->image) }}" alt="{{$story->name}}" class="d-inline mx-3" width="300" height="300" />
                                                            @endisset
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-lg btn-primary waves-effect waves-light w-100">Save</button>
                                        </form>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div><!-- end col -->
            </div>
            <!-- end row -->
        </div> <!-- container -->
    </div> <!-- content -->


    <x-slot:PluginsJs>


        <script src="{{ asset('admin/assets/libs/quill/quill.min.js') }}"></script>
        <!-- Init js-->
        <!-- <script src="{{ asset('admin/assets/js/pages/form-quilljs.init.js') }}"></script> -->

        <script src="{{ asset('admin/assets/libs/selectize/js/standalone/selectize.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/mohithg-switchery/switchery.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/multiselect/js/jquery.multi-select.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/select2/js/select2.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/jquery-mockjax/jquery.mockjax.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/devbridge-autocomplete/jquery.autocomplete.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
        <!-- Init js-->
        <script src="{{ asset('admin/assets/js/pages/form-advanced.init.js') }}"></script>
        </x-slot>
        <x-slot:CSSLinked>
            <!-- Plugins css -->
            <link href="{{ asset('admin/assets/libs/mohithg-switchery/switchery.min.css') }}" rel="stylesheet" type="text/css" />
            <link href="{{ asset('admin/assets/libs/multiselect/css/multi-select.css') }}" rel="stylesheet" type="text/css" />
            <link href="{{ asset('admin/assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
            <link href="{{ asset('admin/assets/libs/selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet" type="text/css" />
            <link href="{{ asset('admin/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" type="text/css" />
            </x-slot>
            <x-slot:ScriptJs>
                <script>
                    var quill = new Quill('#snow-editor', {
                        theme: "snow",
                        modules: {
                            toolbar: [
                                [{
                                    font: []
                                }, {
                                    size: []
                                }],
                                ["bold", "italic", "underline", "strike"],
                                [{
                                    color: []
                                }, {
                                    background: []
                                }],
                                [{
                                    script: "super"
                                }, {
                                    script: "sub"
                                }],
                                [{
                                    header: [!1, 1, 2, 3, 4, 5, 6]
                                }, "blockquote", "code-block"],
                                [{
                                        list: "ordered"
                                    },
                                    {
                                        list: "bullet"
                                    },
                                    {
                                        indent: "-1"
                                    },
                                    {
                                        indent: "+1"
                                    },
                                ],
                                ["direction", {
                                    align: []
                                }],
                                ["link", "image", "video"],
                                ["clean"],
                            ],
                        },
                    });
                    quill.on('text-change', function(delta, oldDelta, source) {
                        if (source == 'api') {
                            console.log("An API call triggered this change.");
                        } else if (source == 'user') {
                            document.getElementById('text-editor').innerHTML = document.querySelector('#snow-editor .ql-editor').innerHTML;
                        }
                    });
                </script>
                </x-slot>

</x-app-layout>