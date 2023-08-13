<x-app-layout>
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Testimonial Section</h4>
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
                                    <form method="POST" action="{{ route('dashboard.testimonialSection.update') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <x-input-label for="TestimonialTitle" :value="__('Testimonial Title')" class="form-label" />
                                            <x-text-input id="TestimonialTitle" class="form-control" type="text" name="TestimonialTitle" required autocomplete="TestimonialTitle" value="{{@isset($TestimonialTitle)?$TestimonialTitle:''}}" />
                                            <x-input-error :messages="$errors->get('TestimonialTitle')" class="mt-2" />
                                        </div>
                                        <div class="mb-3">
                                            <x-input-label for="TestimonialSubTitle" :value="__('Testimonial Sub-Title')" class="form-label" />
                                            <x-text-input id="TestimonialSubTitle" class="form-control" type="text" name="TestimonialSubTitle" required autocomplete="TestimonialSubTitle" value="{{@isset($TestimonialSubTitle)?$TestimonialSubTitle:''}}" />
                                            <x-input-error :messages="$errors->get('TestimonialSubTitle')" class="mt-2" />
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
                        console.log("An API call triggered this change.2");
                    } else if (source == 'user') {
                        document.getElementById('text-editor').innerHTML = document.querySelector('#snow-editor .ql-editor').innerHTML;
                    }
                });
            </script>
            </x-slot>
</x-app-layout>