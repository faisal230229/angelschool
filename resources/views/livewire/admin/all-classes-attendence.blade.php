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
                                <a data-collapse="#mycard-collapse{{ $class->id }}"
                                    class="btn btn-icon btn-outline-secondary" href="#"><i class="fas fa-minus"></i></a>
                            </div>
                        </div>
                        <div class="collapse show" id="mycard-collapse{{ $class->id }}">
                            <a class="text-decoration-none">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-7 col-md-4">
                                            <h6 class="text-danger">Teacher Name :</h6>
                                        </div>
                                        <div class="col-5 col-md-6">
                                            <h6 class="text-dark">{{ $class->classTeacher ? $class->classTeacher->name :
                                                "No Class Teacher" }}</h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-7 col-md-4">
                                            <h6 class="text-danger">Total Students :</h6>
                                        </div>
                                        <div class="col-5 col-md-6">
                                            <h6 class="text-dark">{{ $class->students ? $class->students->count() : 0 }}
                                            </h6>
                                        </div>
                                    </div>
                                    @if ($class->attendence()->whereDate('created_at', \Carbon\Carbon::today())->count()
                                    > 0)
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
                                    @else
                                    <div class="row">
                                        <div class="col-7 col-md-4">
                                            <h6 class="text-danger">Status :</h6>
                                        </div>
                                        <div class="col-5 col-md-6">
                                            <h6 class="text-dark">
                                                Today's Attendence not marked yet.
                                            </h6>
                                        </div>
                                    </div>
                                    @endif
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