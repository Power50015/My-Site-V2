<x-app-layout>
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Home Section</h4>
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
                                    <form method="POST" action="{{ route('dashboard.home.update') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <x-input-label for="job" :value="__('Job Text')" class="form-label" />
                                            <x-text-input id="job" class="form-control" type="text" name="job" required autocomplete="job" value="{{@isset($HomeJob)?$HomeJob:''}}" />
                                            <x-input-error :messages="$errors->get('job')" class="mt-2" />
                                        </div>
                                        <div class="mb-3">
                                            <x-input-label for="title" :value="__('Title Text')" class="form-label" />
                                            <x-text-input id="title" class="form-control" type="text" name="title" required autocomplete="title" value="{{@isset($HomeTitle)?$HomeTitle:''}}" />
                                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                                        </div>
                                        <div class="mb-3">

                                            <div class="row">
                                                <x-input-label for="image" :value="__('Home Image')" class="form-label" />
                                                <div class="col-md-6 mt-3">

                                                    <input type="file" name="image" data-plugins="dropify" data-default-file="" data-height="300" />
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <div class="form-check mb-2 form-check-danger">
                                                        <input class="form-check-input" type="checkbox" id="remove" name="remove" value="true">
                                                        <label class="form-check-label" for="remove">Delete image</label>
                                                    </div>
                                                    @isset($HomeImage)
                                                    <img src="{{ url('public/Image/'.$HomeImage) }}" alt="{{ url('public/Image/'.$HomeImage) }}" height="300">
                                                    @endisset
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <x-input-label for="image" :value="__('Home Background')" class="form-label" />
                                                <div class="col-md-6 mt-3">
                                                    <input type="file" name="HomeBackground" data-plugins="dropify" data-default-file="" data-height="300" />
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <div class="form-check mb-2 form-check-danger">
                                                        <input class="form-check-input" type="checkbox" id="removebg" name="removebg" value="true">
                                                        <label class="form-check-label" for="removebg">Delete image</label>
                                                    </div>
                                                    @isset($HomeBackground)
                                                    <img src="{{ url('public/Image/'.$HomeBackground) }}" alt="{{ url('public/Image/'.$HomeBackground) }}" height="300">
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

</x-app-layout>