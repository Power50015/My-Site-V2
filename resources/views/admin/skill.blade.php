<x-app-layout>
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Skill Controller</h4>
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

                                    @isset($MySkill)
                                    <form method="POST" action="{{ route('dashboard.skill.update') }}" enctype="multipart/form-data">
                                        @method('PUT')
                                        <input type="hidden" value="{{$MySkill->id}}" name="id" />
                                        @endisset
                                        @empty($MySkill)
                                        <form method="POST" action="{{ route('dashboard.skill') }}" enctype="multipart/form-data">
                                            @endempty
                                            @csrf
                                            <div class="mb-3">
                                                <div class="row">
                                                    <div class="col-md-6 mt-3">
                                                        <x-input-label for="name" :value="__('Name')" class="form-label" />
                                                        <x-text-input id="name" class="form-control" type="text" name="name" required autocomplete="name" value="{{@isset($MySkill->name)?$MySkill->name:''}}" />
                                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                                    </div>

                                                    <div class="col-md-6 mt-3">
                                                        <div class="d-flex">
                                                        @isset($MySkill->image)
                                                        <img src="{{ url('public/Image/'.$MySkill->image) }}" alt="{{$MySkill->name}}" class="d-inline mx-3" width="50" height="50"/>
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
                            <h4 class="header-title">Skill Controller</h4>
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
                                            @forelse ($skills as $skill)
                                            <tr>
                                                <td>
                                                    <b class=" tablesaw-cell-label">
                                                        {{ $skill->name }}
                                                    </b>
                                                </td>
                                                <td>
                                                    <img src="{{ url('public/Image/'.$skill->image) }}" alt="{{ $skill->name }}" width="50" height="50" />
                                                </td>
                                                <td>
                                                    <a href="{{ route('dashboard.skill.edit', $skill->id ) }}">Edit</a>
                                                </td>
                                            </tr>
                                            @empty
                                            <p>No Skills</p>
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