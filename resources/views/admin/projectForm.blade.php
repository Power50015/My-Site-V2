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
                                Project</h4>
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

                                    @isset($project)
                                    <form method="POST" action="{{ route('project.update',$project->id) }}" enctype="multipart/form-data">
                                        @method('PUT')

                                        @endisset
                                        @empty($project)
                                        <form method="POST" action="{{ route('project.store') }}" enctype="multipart/form-data">
                                            @endempty
                                            @csrf
                                            <div class="mb-3">
                                                <div class="row">
                                                    <div class="col-12 mt-3">
                                                        <x-input-label for="title" :value="__('Title')" class="form-label" />
                                                        <x-text-input id="title" class="form-control" type="text" name="title" required autocomplete="title" value="{{@isset($project->name)?$project->name:''}}" />
                                                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <x-input-label for="sub_title" :value="__('Sub Title')" class="form-label" />
                                                        <x-text-input id="sub_title" class="form-control" type="text" name="sub_title" autocomplete="sub_title" value="{{@isset($project->sub_title)?$project->sub_title:''}}" />
                                                        <x-input-error :messages="$errors->get('sub_title')" class="mt-2" />
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <x-input-label for="link" :value="__('Link')" class="form-label" />
                                                        <x-text-input id="link" class="form-control" type="text" name="link" autocomplete="link" value="{{@isset($project->link)?$project->link:''}}" />
                                                        <x-input-error :messages="$errors->get('link')" class="mt-2" />
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <x-input-label for="example-month" :value="__('Date')" class="form-label" />
                                                        <x-text-input class="form-control" id="example-month" type="date" name="date" value="{{@isset($project->date)? \Illuminate\Support\Carbon::parse($project->date)->format('Y-m-d') :''}}" />
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <label class="form-label">Skills</label>
                                                        <select value="1" class="form-control select2-multiple" name="skills[]" data-toggle="select2" data-width="100%" multiple="multiple" data-placeholder="Select Skills...">
                                                            <option value="">Select Skills...</option>
                                                            @forelse ($skills as $skill)
                                                            <option value="{{$skill->id}}" {{in_array($skill->id, $projectSkills) ?'selected':''}}>
                                                                {{$skill->name}}
                                                            </option>
                                                            @empty
                                                            @endforelse
                                                        </select>
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <x-input-label for="image" :value="__('Image')" class="form-label" />
                                                        <div class="d-flex">
                                                            <input type="file" name="image" data-plugins="dropify" data-default-file="" data-height="300" />
                                                            @isset($project->image)
                                                            <img src="{{ url('public/Image/'.$project->image) }}" alt="{{$project->name}}" class="d-inline mx-3" width="300" height="300" />
                                                            @endisset
                                                        </div>
                                                    </div>

                                                    <div class="col-12 mt-3">
                                                        <x-input-label :value="__('Short Description')" class="form-label" />
                                                        <div id="snow-editor" style="height: 300px;">
                                                            @isset($project->small_description)
                                                            {!!$project->small_description!!}
                                                            @endisset
                                                        </div> <!-- end Snow-editor-->
                                                        <textarea class="w-100 d-none" id="text-editor" name="ShortDescription">
                                                            @isset($project->small_description)
                                                            {!!$project->small_description!!}
                                                            @endisset</textarea>
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <x-input-label :value="__('Description')" class="form-label" />
                                                        <div id="snow-editor2" style="height: 1000px;">
                                                            @isset($project->description)
                                                            {!!$project->description!!}
                                                            @endisset
                                                        </div> <!-- end Snow-editor-->
                                                        <textarea class="w-100 d-none" id="text-editor2" name="Description">@isset($project->description)
                                                            {!!$project->description!!}
                                                            @endisset</textarea>
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
                            console.log("An API call triggered this change.2");
                        } else if (source == 'user') {
                            document.getElementById('text-editor2').innerHTML = document.querySelector('#snow-editor2 .ql-editor').innerHTML;
                        }
                    });
                </script>
                </x-slot>

</x-app-layout>