<x-app-layout>
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">{{$contact->name}}</h4>
                            <h4 class="header-title my-2">{{$contact->email}}</h4>
                            <h4 class="header-title my-2">{{$contact->phone}}</h4>
                            <h4 class="header-title">{{$contact->subject}}</h4>
                            <hr class="mb-2" />
                            <div class="row">
                                <div class="col-lg-12">
                                    {{$contact->message}}
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