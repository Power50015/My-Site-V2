<x-app-layout>
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Portfolio Section</h4>
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
                                    <form method="POST" action="{{ route('dashboard.portfolio.update') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <x-input-label for="PortfolioTitle" :value="__('Portfolio Title')" class="form-label" />
                                            <x-text-input id="PortfolioTitle" class="form-control" type="text" name="PortfolioTitle" required autocomplete="PortfolioTitle" value="{{@isset($PortfolioTitle)?$PortfolioTitle:''}}" />
                                            <x-input-error :messages="$errors->get('PortfolioTitle')" class="mt-2" />
                                        </div>
                                        <div class="col-12 mt-3">
                                            <x-input-label :value="__('Portfolio Description')" class="form-label" />
                                            <div id="snow-editor" style="height: 300px;">
                                                @isset($PortfolioDescription)
                                                            {!!$PortfolioDescription!!}
                                                @endisset
                                            </div> <!-- end Snow-editor-->
                                            <textarea class="w-100 d-none" id="text-editor" name="PortfolioDescription">
                                                @isset($PortfolioDescription)
                                                            {!!$PortfolioDescription!!}
                                                @endisset
                                            </textarea>
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