<x-app-layout>
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Award Controller</h4>
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

                                    @isset($MyAward)
                                    <form method="POST" action="{{ route('award.update',$MyAward->id) }}" enctype="multipart/form-data">
                                        @method('PUT')
                                        @endisset
                                        @empty($MyAward)
                                        <form method="POST" action="{{ route('award.store') }}" enctype="multipart/form-data">
                                            @endempty
                                            @csrf
                                            <div class="mb-3">
                                                <div class="row">
                                                    <div class="col-md-12 mt-3">
                                                        <x-input-label for="title" :value="__('Title')" class="form-label" />
                                                        <x-text-input id="title" class="form-control" type="text" name="title" required autocomplete="title" value="{{@isset($MyAward->title)?$MyAward->title:''}}" />
                                                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                                                    </div>

                                                    <div class="col-md-12 mt-3">
                                                        <x-input-label for="sub_title" :value="__('Sub Title')" class="form-label" />
                                                        <x-text-input id="sub_title" class="form-control" type="text" name="sub_title" required autocomplete="sub_title" value="{{@isset($MyAward->title)?$MyAward->sub_title:''}}" />
                                                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                                                    </div>

                                                    <div class="col-12 mt-3">
                                                        <x-input-label for="example-month" :value="__('Date')" class="form-label" />
                                                        <x-text-input class="form-control" id="example-month" type="date" name="date" value="{{@isset($MyAward->date)? \Illuminate\Support\Carbon::parse($MyAward->date)->format('Y-m-d') :''}}" />
                                                    </div>

                                                    <div class="col-md-12 mt-3">
                                                        <div class="d-flex">
                                                            @isset($MyAward->image)
                                                            <img src="{{ url('public/Image/'.$MyAward->image) }}" alt="{{$MyAward->name}}" class="d-inline mx-3" width="150" height="50" />
                                                            @endisset
                                                            <input type="file" name="image" data-plugins="dropify" data-default-file="" data-height="100" />
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Awards Controller</h4>
                            <hr class="mb-2" />
                            <div class="row">
                                @forelse ($awards as $award)
                                <div class="col-md-6 col-xl-3">
                                    <div class="card">
                                        
                                        <img class="img-fluid" src="{{ url('public/Image/'.$award->image) }}" alt="Card image cap">
                                        <div class="card-body">
                                            <h6 class="card-title">{{$award->title}}</h6>
                                            <h6 class="card-title">{{$award->sub_title}}</h6>
                                            <h6 class="card-title">{{$award->date}}</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <a href="{{route('award.edit',$award->id)}}" class="card-link text-success">Edit</a>
                                                <a href="javascript:void(0);" class="card-link text-danger" type="button" data-bs-toggle="modal" data-bs-target="#standard-modal-{{$award->id}}">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Standard modal content -->
                                <div id="standard-modal-{{$award->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="standard-modalLabel">Delete award - {{$award->title}}</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-fluid w-100" src="{{ url('public/Image/'.$award->image) }}" alt="Card image cap">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                <form action="{{ route('award.destroy',$award->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                @empty
                                <p>No Awards</p>
                                @endforelse
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