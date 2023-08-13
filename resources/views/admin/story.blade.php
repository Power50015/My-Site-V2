<x-app-layout>
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="header-title">Story Controller</h4>
                                <a href="{{route('story.create')}}" class="btn btn-outline-primary waves-effect waves-light">Add New</a>
                            </div>
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

                            </div>
                            <!-- end row-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div><!-- end col -->
                @forelse ($stories as $story)
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{$story->name}}</h4>
                            <h4 class="card-title">{{$story->title}}</h4>
                        </div>
                        <img class="img-fluid" src="{{ url('public/Image/'.$story->image) }}" alt="Card image cap">
                        <div class="card-body">
                            <div>{!! $story->description !!}</div>
                            <div class="d-flex justify-content-between">
                                <a href="{{route('story.edit',$story->id)}}" class="card-link text-success">Edit</a>
                                <a href="javascript:void(0);" class="card-link text-danger" type="button" data-bs-toggle="modal" data-bs-target="#standard-modal-{{$story->id}}">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Standard modal content -->
                <div id="standard-modal-{{$story->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="standard-modalLabel">Delete Story - {{$story->title}}</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="img-fluid w-100" src="{{ url('public/Image/'.$story->image) }}" alt="Card image cap">
                                {!!$story->description!!}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <form action="{{ route('story.destroy',$story->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                @empty
                <p>No Stories</p>
                @endforelse
            </div>
            <!-- end row -->
        </div> <!-- container -->
    </div> <!-- content -->
    <style>
        .ql-hidden {
            display: none !important;
        }
    </style>

</x-app-layout>