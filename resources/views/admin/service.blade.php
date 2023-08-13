<x-app-layout>
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Service Section</h4>
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
                                    <form method="POST" action="{{ route('dashboard.service.update',$id) }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <x-input-label for="ServiceTitle" :value="__('Service Title')" class="form-label" />
                                            <x-text-input id="title" class="form-control" type="text" name="ServiceTitle" required autocomplete="title" value="{{@isset($ServiceTitle)?$ServiceTitle:''}}" />
                                            <x-input-error :messages="$errors->get('ServiceTitle')" class="mt-2" />
                                        </div>
                                        <div class="mb-3">
                                            <label  class="form-label">Service Short Description</label>
                                            <div id="snow-editor2" style="height: 300px;">
                                                @isset($ServiceShortDescription)
                                                {!!$ServiceShortDescription!!}
                                                @endisset
                                            </div> <!-- end Snow-editor-->
                                            <textarea class="w-100 d-none" id="text-editor2" name="ServiceShortDescription">{!!$ServiceShortDescription!!}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <x-input-label for="ServiceBtn" :value="__('Service Btn')" class="form-label" />
                                            <x-text-input id="title" class="form-control" type="text" name="ServiceBtn" required autocomplete="title" value="{{@isset($ServiceBtn)?$ServiceBtn:''}}" />
                                            <x-input-error :messages="$errors->get('ServiceBtn')" class="mt-2" />
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-md-6 mt-3">
                                                    <input type="file" name="image" data-plugins="dropify" data-default-file="" data-height="300" />
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <div class="form-check mb-2 form-check-danger">
                                                        <input class="form-check-input" type="checkbox" id="remove" name="remove" value="true">
                                                        <label class="form-check-label" for="remove">Delete image</label>
                                                    </div>
                                                    @isset($ServiceImage)
                                                    <img src="{{ url('public/Image/'.$ServiceImage) }}" alt="{{ url('public/Image/'.$ServiceImage) }}" height="300">
                                                    @endisset
                                                </div>
                                            </div>

                                        </div>
                                        <div class="mb-3">
                                        <label  class="form-label">Service Description</label>
                                            <div id="snow-editor" style="height: 300px;">
                                                @isset($ServiceShortDescription)
                                                {!!$ServiceDescription!!}
                                                @endisset
                                            </div> <!-- end Snow-editor-->
                                            <textarea class="w-100 d-none" id="text-editor" name="ServiceDescription">{!!$ServiceDescription!!}</textarea>
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


                    var quill = new Quill('#snow-editor2', {
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
                            document.getElementById('text-editor2').innerHTML = document.querySelector('#snow-editor2 .ql-editor').innerHTML;
                        }
                    });

                    
                </script>
            </x-slot>

</x-app-layout>