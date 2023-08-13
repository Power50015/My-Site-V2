<x-app-layout>
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Statistic Section</h4>
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
                                    <form method="POST" action="{{ route('dashboard.statistic.update') }}" enctype="multipart/form-data">
                                        @csrf
                                        <!-- Item 1 -->
                                        <div>
                                            <div class="mb-3">
                                                <x-input-label for="StatisticItem1Number" :value="__('Statistic Item 1 Number')" class="form-label" />
                                                <x-text-input id="StatisticItem1Number" class="form-control" type="text" name="StatisticItem1Number" required autocomplete="StatisticItem1Number" value="{{@isset($StatisticItem1Number)?$StatisticItem1Number:''}}" />
                                                <x-input-error :messages="$errors->get('StatisticItem1Number')" class="mt-2" />
                                            </div>
                                            <div class="mb-3">
                                                <x-input-label for="StatisticItem1Title" :value="__('Statistic Item 1 Title')" class="form-label" />
                                                <x-text-input id="StatisticItem1Title" class="form-control" type="text" name="StatisticItem1Title" required autocomplete="StatisticItem1Title" value="{{@isset($StatisticItem1Title)?$StatisticItem1Title:''}}" />
                                                <x-input-error :messages="$errors->get('StatisticItem1Title')" class="mt-2" />
                                            </div>
                                            <hr class="mb-2" />
                                        </div>
                                        <!-- Item 2 -->
                                        <div>
                                            <div class="mb-3">
                                                <x-input-label for="StatisticItem2Number" :value="__('Statistic Item 2 Number')" class="form-label" />
                                                <x-text-input id="StatisticItem2Number" class="form-control" type="text" name="StatisticItem2Number" required autocomplete="StatisticItem2Number" value="{{@isset($StatisticItem2Number)?$StatisticItem2Number:''}}" />
                                                <x-input-error :messages="$errors->get('StatisticItem2Number')" class="mt-2" />
                                            </div>
                                            <div class="mb-3">
                                                <x-input-label for="StatisticItem2Title" :value="__('Statistic Item 2 Title')" class="form-label" />
                                                <x-text-input id="StatisticItem2Title" class="form-control" type="text" name="StatisticItem2Title" required autocomplete="StatisticItem2Title" value="{{@isset($StatisticItem2Title)?$StatisticItem2Title:''}}" />
                                                <x-input-error :messages="$errors->get('StatisticItem2Title')" class="mt-2" />
                                            </div>
                                            <hr class="mb-2" />
                                        </div>
                                        <!-- Item 3 -->
                                        <div>
                                            <div class="mb-3">
                                                <x-input-label for="StatisticItem3Number" :value="__('Statistic Item 3 Number')" class="form-label" />
                                                <x-text-input id="StatisticItem3Number" class="form-control" type="text" name="StatisticItem3Number" required autocomplete="StatisticItem3Number" value="{{@isset($StatisticItem3Number)?$StatisticItem3Number:''}}" />
                                                <x-input-error :messages="$errors->get('StatisticItem3Number')" class="mt-2" />
                                            </div>
                                            <div class="mb-3">
                                                <x-input-label for="StatisticItem3Title" :value="__('Statistic Item 3 Title')" class="form-label" />
                                                <x-text-input id="StatisticItem3Title" class="form-control" type="text" name="StatisticItem3Title" required autocomplete="StatisticItem3Title" value="{{@isset($StatisticItem3Title)?$StatisticItem3Title:''}}" />
                                                <x-input-error :messages="$errors->get('StatisticItem3Title')" class="mt-2" />
                                            </div>
                                            <hr class="mb-2" />
                                        </div>
                                        <!-- Item 4 -->
                                        <div>
                                            <div class="mb-3">
                                                <x-input-label for="StatisticItem4Number" :value="__('Statistic Item 4 Number')" class="form-label" />
                                                <x-text-input id="StatisticItem4Number" class="form-control" type="text" name="StatisticItem4Number" required autocomplete="StatisticItem4Number" value="{{@isset($StatisticItem4Number)?$StatisticItem4Number:''}}" />
                                                <x-input-error :messages="$errors->get('StatisticItem4Number')" class="mt-2" />
                                            </div>
                                            <div class="mb-3">
                                                <x-input-label for="StatisticItem4Title" :value="__('Statistic Item 4 Title')" class="form-label" />
                                                <x-text-input id="StatisticItem4Title" class="form-control" type="text" name="StatisticItem4Title" required autocomplete="StatisticItem4Title" value="{{@isset($StatisticItem4Title)?$StatisticItem4Title:''}}" />
                                                <x-input-error :messages="$errors->get('StatisticItem4Title')" class="mt-2" />
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