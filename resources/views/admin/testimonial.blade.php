<x-app-layout>
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="header-title">Testimonial Controller</h4>
                                <a href="{{route('testimonial.create')}}" class="btn btn-outline-primary waves-effect waves-light">Add New</a>
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
                @forelse ($testimonials as $testimonial)
                <div class="col-4">
                    <div class="card">
                        <div class="text-center card-body">
                            <div>
                                <img src="{{ url('public/Image/'.$testimonial->client_image) }}" class="rounded-circle avatar-xl img-thumbnail mb-2" alt="profile-image">
                                {!! $testimonial->text !!}
                                <div class="text-start">
                                    <p class="text-muted font-13">Name : {{$testimonial->client}}</p>
                                    <p class="text-muted font-13">Job : {{$testimonial->client_job}}</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <a href="{{route('testimonial.edit',$testimonial->id)}}" class="card-link text-success">Edit</a>
                                    <a href="javascript:void(0);" class="card-link text-danger" type="button" data-bs-toggle="modal" data-bs-target="#standard-modal-{{$testimonial->id}}">Delete</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Standard modal content -->
                <div id="standard-modal-{{$testimonial->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="standard-modalLabel">Delete Testimonial - {{$testimonial->client}}</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="img-fluid w-100" src="{{ url('public/Image/'.$testimonial->client_image) }}" alt="Card image cap">
                                {!! $testimonial->text !!}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <form action="{{ route('testimonial.destroy', $testimonial->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                @empty
                <p>No Testimonials</p>
                @endforelse


            </div>
            <!-- end row -->
        </div> <!-- container -->
    </div> <!-- content -->
</x-app-layout>