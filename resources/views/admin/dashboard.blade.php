@extends('admin.master')
@section('content')

    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-4">
        <div class="col">
            <div class="card overflow-hidden radius-10">
                <div class="card-body p-2">
                    <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                        <div class="w-50 p-3 bg-light-primary">
                            <p>Total Clients</p>
                            <h4 class="text-primary">{{ $user }}</h4>
                        </div>
                        <div class="w-50 bg-primary p-3">
                            <p class="mb-3 text-white">+ 16% <i class="bi bi-arrow-up"></i></p>
                            <div id="chart1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card overflow-hidden radius-10">
                <div class="card-body p-2">
                    <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                        <div class="w-50 p-3 bg-light-primary">
                            <p>Total Partner</p>
                            <h4 class="text-primary">{{ $partner }}</h4>
                        </div>
                        <div class="w-50 bg-primary p-3">
                            <p class="mb-3 text-white">- 3.4% <i class="bi bi-arrow-down"></i></p>
                            <div id="chart2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card overflow-hidden radius-10">
                <div class="card-body p-2">
                    <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                        <div class="w-50 p-3 bg-light-primary">
                            <p>Service</p>
                            <h4 class="text-primary">{{ $service }}</h4>
                        </div>
                        <div class="w-50 bg-primary p-3">
                            <p class="mb-3 text-white">+ 24% <i class="bi bi-arrow-up"></i></p>
                            <div id="chart3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card overflow-hidden radius-10">
                <div class="card-body p-2">
                    <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                        <div class="w-50 p-3 bg-light-primary">
                            <p>Solution</p>
                            <h4 class="text-primary">{{ $solution }}</h4>
                        </div>
                        <div class="w-50 bg-primary p-3">
                            <p class="mb-3 text-white">+ 8.2% <i class="bi bi-arrow-up"></i></p>
                            <div id="chart4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end row-->
   {{-- ----------------------------------------------------------------------- --}}
    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-4">
        <div class="col">
            <div class="card overflow-hidden radius-10">
                <div class="card-body p-2">
                    <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                        <div class="w-50 p-3 bg-light-primary">
                            <p>Total News</p>
                            <h4 class="text-primary">{{ $news }}</h4>
                        </div>
                        <div class="w-50 bg-primary p-3">
                            <p class="mb-3 text-white">+ 16% <i class="bi bi-arrow-up"></i></p>
                            <div id="chart1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card overflow-hidden radius-10">
                <div class="card-body p-2">
                    <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                        <div class="w-50 p-3 bg-light-primary">
                            <p>Total Stores</p>
                            <h4 class="text-primary">{{ $store }}</h4>
                        </div>
                        <div class="w-50 bg-primary p-3">
                            <p class="mb-3 text-white">- 3.4% <i class="bi bi-arrow-down"></i></p>
                            <div id="chart2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card overflow-hidden radius-10">
                <div class="card-body p-2">
                    <div class="d-flex align-items-stretch justify-content-between radius-10 overflow-hidden">
                        <div class="w-50 p-3 bg-light-primary">
                            <p>Contact</p>
                            <h4 class="text-primary">{{ $contact }}</h4>
                        </div>
                        <div class="w-50 bg-primary p-3">
                            <p class="mb-3 text-white">+ 24% <i class="bi bi-arrow-up"></i></p>
                            <div id="chart3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




@stop
