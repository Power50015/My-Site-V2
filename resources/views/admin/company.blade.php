<x-app-layout>
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Company Controller</h4>
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

                                    @isset($MyCompany)
                                    <form method="POST" action="{{ route('company.update',$MyCompany->id) }}" enctype="multipart/form-data">
                                        @method('PUT')
                                        @endisset
                                        @empty($MyCompany)
                                        <form method="POST" action="{{ route('company.store') }}" enctype="multipart/form-data">
                                            @endempty
                                            @csrf
                                            <div class="mb-3">
                                                <div class="row">
                                                    <div class="col-md-6 mt-3">
                                                        <x-input-label for="name" :value="__('Name')" class="form-label" />
                                                        <x-text-input id="name" class="form-control" type="text" name="name" autocomplete="name" value="{{@isset($MyCompany->name)?$MyCompany->name:''}}" />
                                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                                    </div>

                                                    <div class="col-md-6 mt-3">
                                                        <x-input-label for="link" :value="__('link')" class="form-label" />
                                                        <x-text-input id="link" class="form-control" type="text" name="link" autocomplete="link" value="{{@isset($MyCompany->link)?$MyCompany->link:''}}" />
                                                        <x-input-error :messages="$errors->get('link')" class="mt-2" />
                                                    </div>

                                                    <div class="col-md-6 mt-3">
                                                        <div class="d-flex">
                                                            @isset($MyCompany->image)
                                                            <img src="{{ url('public/Image/'.$MyCompany->image) }}" alt="{{$MyCompany->name}}" class="d-inline mx-3" width="150" height="50" />
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
                            <h4 class="header-title">Company Controller</h4>
                            <hr class="mb-2" />
                            <div class="row">
                                <div class="col-lg-12">
                                    <table class="tablesaw table mb-0 tablesaw-stack" data-tablesaw-mode="stack" id="tablesaw-1627">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-priority="persist">
                                                    Name
                                                </th>
                                                <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="3">
                                                    Image
                                                </th>
                                                <th scope="col" data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="" data-tablesaw-priority="3">
                                                    Edit
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($companies as $company)
                                            <tr>
                                                <td>
                                                    <b class=" tablesaw-cell-label">
                                                        {{ $company->name }}
                                                    </b>
                                                </td>
                                                <td>
                                                    <img src="{{ url('public/Image/'.$company->image) }}" alt="{{ $company->name }}" width="150" height="50" />
                                                </td>
                                                <td>
                                                    @isset($company->link)
                                                    <a href="{{ $company->link }}" target="_blank" class="text-success">View</a>
                                                    @endisset
                                                    <a href="{{ route('company.edit', $company->id ) }}" class="mx-3">Edit</a>
                                                    <a href="javascript:void(0);" class="card-link text-danger" type="button" data-bs-toggle="modal" data-bs-target="#standard-modal-{{$company->id}}">Delete</a>

                                                </td>
                                            </tr>

                                            <!-- Standard modal content -->
                                            <div id="standard-modal-{{$company->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="standard-modalLabel">Delete award - {{$company->name}}</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img class="img-fluid w-100" src="{{ url('public/Image/'.$company->image) }}" alt="Card image cap">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                            <form action="{{ route('company.destroy',$company->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                            @empty
                                            <p>No Companies</p>
                                            @endforelse

                                        </tbody>
                                    </table>
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