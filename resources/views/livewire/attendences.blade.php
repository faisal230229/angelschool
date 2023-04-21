<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                @foreach ($classes as $class)
                <div class="col-12 col-sm-6 col-lg-6">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <a href="./studentAttendence.html" class="text-decoration-none">
                                <h4>Class {{ $class->name }}</h4>
                            </a>
                            <div class="card-header-action">
                                <a data-collapse="#mycard-collapse8" class="btn btn-icon btn-outline-secondary"
                                    href="#"><i class="fas fa-minus"></i></a>
                            </div>
                        </div>
                        <div class="collapse show" id="mycard-collapse8">
                            <a href="{{ route('classAttendence', ['id'=> $class->id]) }}" class="text-decoration-none">
                                <div class="card-body">
                                    {{-- <div class="row">
                                        <div class="col-7 col-md-4">
                                            <h6 class="text-danger">Subject Name :</h6>
                                        </div>
                                        <div class="col-5 col-md-6">
                                            <h6 class="text-dark">Sir Mughees</h6>
                                        </div>
                                    </div> --}}
                                    <div class="row">
                                        <div class="col-7 col-md-4">
                                            <h6 class="text-danger">Total Students :</h6>
                                        </div>
                                        <div class="col-5 col-md-6">
                                            <h6 class="text-dark">{{ $class->students->count() }}</h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-7 col-md-4">
                                            <h6 class="text-danger">Present :</h6>
                                        </div>
                                        <div class="col-5 col-md-6">
                                            <h6 class="text-dark">{{ $class->attendence()->where('status',
                                                'PRESENT')->whereDate('created_at', \Carbon\Carbon::today())->count() }}
                                            </h6>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-7 col-md-4">
                                            <h6 class="text-danger">Absent :</h6>
                                        </div>
                                        <div class="col-5 col-md-6">
                                            <h6 class="text-dark">{{ $class->attendence()->where('status',
                                                'ABSENT')->whereDate('created_at', \Carbon\Carbon::today())->count() }}
                                            </h6>
                                        </div>
                                    </div>
                                    @php
                                    $percentage = ($class->attendence()->where('status',
                                    'PRESENT')->whereDate('created_at', \Carbon\Carbon::today())->count() /
                                    $class->students->count()) * 100;
                                    @endphp
                                    <div class="row">
                                        <div class="col-12 col-md-10">
                                            <div class="brown-progress-bar mt-2">
                                                <div class="green-progress-bar" style="width: {{ $percentage }}%;">
                                                    <div
                                                        class="text-white d-flex align-items-center justify-content-center">
                                                        {{ $percentage }}%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                @if ($loop->iteration % 2 == 0)
            </div>
            <div class="row">
                @endif
                @endforeach

            </div>
        </div>
    </section>
</div>