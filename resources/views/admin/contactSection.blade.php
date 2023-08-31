<x-app-layout>
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Contact Section</h4>
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
                                    <form method="POST" action="{{ route('dashboard.contactSection.update') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <x-input-label for="ContactTitle" :value="__('Contact Title')" class="form-label" />
                                            <x-text-input id="ContactTitle" class="form-control" type="text" name="ContactTitle" required autocomplete="ContactTitle" value="{{@isset($ContactTitle)?$ContactTitle:''}}" />
                                            <x-input-error :messages="$errors->get('ContactTitle')" class="mt-2" />
                                        </div>
                                        <div class="mb-3">
                                            <x-input-label for="ContactVideo" :value="__('Contact Video')" class="form-label" />
                                            <x-text-input id="ContactVideo" class="form-control" type="text" name="ContactVideo" autocomplete="ContactVideo" value="{{@isset($ContactVideo)?$ContactVideo:''}}" />
                                            <x-input-error :messages="$errors->get('ContactVideo')" class="mt-2" />
                                        </div>
                                        <div class="mb-3">
                                            <x-input-label for="ContactSubTitle" :value="__('Contact Sub Title')" class="form-label" />
                                            <x-text-input id="ContactSubTitle" class="form-control" type="text" name="ContactSubTitle" required autocomplete="ContactSubTitle" value="{{@isset($ContactSubTitle)?$ContactSubTitle:''}}" />
                                            <x-input-error :messages="$errors->get('ContactSubTitle')" class="mt-2" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Contact Text</label>
                                            <div id="snow-editor2" style="height: 300px;">
                                                @isset($ContactText)
                                                    {!!$ContactText!!}
                                                @endisset
                                            </div> <!-- end Snow-editor-->
                                            <textarea class="w-100 d-none" id="text-editor2" name="ContactText">
                                                @isset($ContactText)
                                                    {!!$ContactText!!}
                                                @endisset
                                            </textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Contact Address</label>
                                            <div id="snow-editor" style="height: 300px;">
                                                @isset($ContactAddress)
                                                    {!!$ContactAddress!!}
                                                @endisset
                                            </div> <!-- end Snow-editor-->
                                            <textarea class="w-100 d-none" id="text-editor" name="ContactAddress">
                                                @isset($ContactAddress)
                                                    {!!$ContactAddress!!}
                                                @endisset
                                            </textarea>
                                        </div>
                                        <div class="mb-3">
                                            <div class="row mt-3">
                                                <x-input-label for="image" :value="__('Contact Background')" class="form-label" />
                                                <div class="col-md-6 mt-3">
                                                    <input type="file" name="ContactBackground" data-plugins="dropify" data-default-file="" data-height="300" />
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <div class="form-check mb-2 form-check-danger">
                                                        <input class="form-check-input" type="checkbox" id="removebg" name="removebg" value="true">
                                                        <label class="form-check-label" for="removebg">Delete image</label>
                                                    </div>
                                                    @isset($ContactBackground)
                                                    <img src="{{ url('public/Image/'.$ContactBackground) }}" alt="{{ url('public/Image/'.$ContactBackground) }}" height="300">
                                                    @endisset
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