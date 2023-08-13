<x-app-layout>
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">
                                @isset($project)
                                Edit
                                @endisset
                                @empty($project)
                                Add
                                @endempty
                                Testimonial</h4>
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

                                    @isset($testimonial)
                                    <form method="POST" action="{{ route('testimonial.update',$testimonial->id) }}" enctype="multipart/form-data">
                                        @method('PUT')

                                        @endisset
                                        @empty($testimonial)
                                        <form method="POST" action="{{ route('testimonial.store') }}" enctype="multipart/form-data">
                                            @endempty
                                            @csrf
                                            <div class="mb-3">
                                                <div class="row">
                                                    <div class="col-12 mt-3">
                                                        <x-input-label for="image" :value="__('Client Image')" class="form-label" />
                                                        <div class="d-flex">
                                                            <input type="file" name="image" data-plugins="dropify" data-default-file="" data-height="100" />
                                                            @isset($testimonial->client_image)
                                                            <img src="{{ url('public/Image/'.$testimonial->client_image) }}" alt="{{$testimonial->client_image}}" class="d-inline mx-3" width="100" height="100" />
                                                            @endisset
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <x-input-label for="client" :value="__('client')" class="form-label" />
                                                        <x-text-input id="client" class="form-control" type="text" name="client" required autocomplete="client" value="{{@isset($testimonial->client)?$testimonial->client:''}}" />
                                                        <x-input-error :messages="$errors->get('client')" class="mt-2" />
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <x-input-label for="client_job" :value="__('client job')" class="form-label" />
                                                        <x-text-input id="client_job" class="form-control" type="text" name="client_job" required autocomplete="client_job" value="{{@isset($testimonial->client_job)?$testimonial->client_job:''}}" />
                                                        <x-input-error :messages="$errors->get('client_job')" class="mt-2" />
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <x-input-label :value="__('Text')" class="form-label" />
                                                        <div id="snow-editor" style="height: 300px;">
                                                            @isset($testimonial->text)
                                                            {!!$testimonial->text!!}
                                                            @endisset
                                                        </div> <!-- end Snow-editor-->
                                                        <textarea class="w-100 d-none" id="text-editor" name="text">
                                                            @isset($testimonial->text)
                                                            {!!$testimonial->text!!}
                                                            @endisset
                                                        </textarea>
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