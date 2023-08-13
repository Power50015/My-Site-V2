<x-app-layout>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-4">Total Messages</h4>
                            <div class="widget-chart-1">
                                <div class="widget-detail-1 text-end">
                                    <h2 class="fw-normal pt-2 mb-1"> {{$Messages}} </h2>
                                    <p class="text-muted mb-1">Contact Messages</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-4">Total Projects</h4>
                            <div class="widget-chart-1">
                                <div class="widget-detail-1 text-end">
                                    <h2 class="fw-normal pt-2 mb-1"> {{$Projects}} </h2>
                                    <p class="text-muted mb-1">Projects</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-4">Total Awards</h4>
                            <div class="widget-chart-1">
                                <div class="widget-detail-1 text-end">
                                    <h2 class="fw-normal pt-2 mb-1"> {{$Awards}} </h2>
                                    <p class="text-muted mb-1">Awards</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-4">Total Skills</h4>
                            <div class="widget-chart-1">
                                <div class="widget-detail-1 text-end">
                                    <h2 class="fw-normal pt-2 mb-1"> {{$Skills}} </h2>
                                    <p class="text-muted mb-1">Skills</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
            </div>
            <!-- end row -->
        </div>

        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Site Controller</h4>
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
                                    <form method="POST" action="{{ route('dashboard.update') }}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="mb-3">
                                            <div class="row">
                                                <x-input-label for="LogoImage" :value="__('Logo Image')" class="form-label" />
                                                <div class="col-md-6 mt-3">

                                                    <input type="file" name="LogoImage" data-plugins="dropify" data-default-file="" data-height="100" />
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <div class="form-check mb-2 form-check-danger">
                                                        <input class="form-check-input" type="checkbox" id="RemoveLogoImage" name="RemoveLogoImage" value="true">
                                                        <label class="form-check-label" for="RemoveLogoImage">Delete Logo</label>
                                                    </div>
                                                    @isset($LogoImage)
                                                    <img src="{{ url('public/Image/'.$LogoImage) }}" alt="{{ url('public/Image/'.$LogoImage) }}" height="100">
                                                    @endisset
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="row">
                                                <x-input-label for="SpinnerLogo" :value="__('Logo Image')" class="form-label" />
                                                <div class="col-md-6 mt-3">

                                                    <input type="file" name="SpinnerLogo" data-plugins="dropify" data-default-file="" data-height="100" />
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <div class="form-check mb-2 form-check-danger">
                                                        <input class="form-check-input" type="checkbox" id="RemoveSpinnerLogo" name="RemoveSpinnerLogo" value="true">
                                                        <label class="form-check-label" for="RemoveSpinnerLogo">Delete Spinner Logo</label>
                                                    </div>
                                                    @isset($SpinnerLogo)
                                                    <img src="{{ url('public/Image/'.$SpinnerLogo) }}" alt="{{ url('public/Image/'.$SpinnerLogo) }}" height="100">
                                                    @endisset
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <x-input-label for="CV" :value="__('CV File')" class="form-label" />
                                                <div class="col-md-6 mt-3">

                                                    <input type="file" name="CV" data-plugins="dropify" data-default-file="" data-height="100" />
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <div class="form-check mb-2 form-check-danger">
                                                        <input class="form-check-input" type="checkbox" id="RemoveCV" name="RemoveCV" value="true">
                                                        <label class="form-check-label" for="RemoveCV">Delete CV</label>
                                                    </div>
                                                    @isset($CV)
                                                    There Is A CV
                                                    @endisset
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Footer Text</label>
                                            <div id="snow-editor" style="height: 300px;">
                                                @isset($FooterText)
                                                {!!$FooterText!!}
                                                @endisset
                                            </div> <!-- end Snow-editor-->
                                            <textarea class="w-100 d-none" id="text-editor" name="FooterText">{!!$FooterText!!}</textarea>
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
                </script>
                </x-slot>

                <!-- Start Content-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Links Controller</h4>
                                    <hr class="mb-2" />
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <form method="POST" action="{{ route('dashboard.linksUpdate') }}">
                                                @csrf
                                                <div class="mb-3">
                                                    <x-input-label for="LinkedIn" :value="__('LinkedIn Link')" class="form-label" />
                                                    <x-text-input id="LinkedIn" class="form-control" type="text" name="LinkedIn" required autocomplete="LinkedIn" value="{{@isset($LinkedIn)?$LinkedIn:''}}" />
                                                    <x-input-error :messages="$errors->get('LinkedIn')" class="mt-2" />
                                                </div>

                                                <div class="mb-3">
                                                    <x-input-label for="GitHub" :value="__('GitHub Link')" class="form-label" />
                                                    <x-text-input id="GitHub" class="form-control" type="text" name="GitHub" required autocomplete="GitHub" value="{{@isset($GitHub)?$GitHub:''}}" />
                                                    <x-input-error :messages="$errors->get('GitHub')" class="mt-2" />
                                                </div>

                                                <div class="mb-3">
                                                    <x-input-label for="Bitbucket" :value="__('Bitbucket Link')" class="form-label" />
                                                    <x-text-input id="Bitbucket" class="form-control" type="text" name="Bitbucket" required autocomplete="Bitbucket" value="{{@isset($Bitbucket)?$Bitbucket:''}}" />
                                                    <x-input-error :messages="$errors->get('Bitbucket')" class="mt-2" />
                                                </div>

                                                <div class="mb-3">
                                                    <x-input-label for="CodePen" :value="__('CodePen Link')" class="form-label" />
                                                    <x-text-input id="CodePen" class="form-control" type="text" name="CodePen" required autocomplete="CodePen" value="{{@isset($CodePen)?$CodePen:''}}" />
                                                    <x-input-error :messages="$errors->get('CodePen')" class="mt-2" />
                                                </div>
                                                
                                                <div class="mb-3">
                                                    <x-input-label for="Blog" :value="__('Blog Link')" class="form-label" />
                                                    <x-text-input id="Blog" class="form-control" type="text" name="Blog" required autocomplete="Blog" value="{{@isset($Blog)?$Blog:''}}" />
                                                    <x-input-error :messages="$errors->get('Blog')" class="mt-2" />
                                                </div>
                                                
                                                <div class="mb-3">
                                                    <x-input-label for="YouTube" :value="__('YouTube Link')" class="form-label" />
                                                    <x-text-input id="YouTube" class="form-control" type="text" name="YouTube" required autocomplete="YouTube" value="{{@isset($YouTube)?$YouTube:''}}" />
                                                    <x-input-error :messages="$errors->get('YouTube')" class="mt-2" />
                                                </div>

                                                <div class="mb-3">
                                                    <x-input-label for="WhatsApp" :value="__('WhatsApp Link')" class="form-label" />
                                                    <x-text-input id="WhatsApp" class="form-control" type="text" name="WhatsApp" required autocomplete="WhatsApp" value="{{@isset($WhatsApp)?$WhatsApp:''}}" />
                                                    <x-input-error :messages="$errors->get('WhatsApp')" class="mt-2" />
                                                </div>

                                                <div class="mb-3">
                                                    <x-input-label for="Telegram" :value="__('Telegram Link')" class="form-label" />
                                                    <x-text-input id="Telegram" class="form-control" type="text" name="Telegram" required autocomplete="Telegram" value="{{@isset($Telegram)?$Telegram:''}}" />
                                                    <x-input-error :messages="$errors->get('Telegram')" class="mt-2" />
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


    </div>
</x-app-layout>