<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card author-box">
                        <div class="card-body">
                            <div class="author-box-center">
                                <div class="profile-picture">
                                    <img alt="image" src="{{ asset($teacher->image) }}"
                                        class="rounded-circle author-box-picture  " />
                                </div>
                                <div class="clearfix"></div>
                                <div class="author-box-name mt-2">
                                    <a href="#">{{ $teacher->name }}</a>
                                </div>
                                <div class="author-box-job">Teacher</div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <a href="{{ route('admin.teacherCardPdf', ['id'=> $teacher->id]) }}"
                                    class="btn btn-icon icon-left btn-outline-success d-flex align-items-center">
                                    <i class="material-icons mx-1">print</i>
                                    Employee Card
                                </a>
                            </div>
                            <div class="text-center">
                                <div class="author-box-description">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Pariatur voluptatum alias molestias minus quod
                                        dignissimos.
                                    </p>
                                </div>

                                <div class="w-100 d-sm-none"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="py-3">Personal Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <p class="clearfix">
                                    <span class="float-left"> Birthday </span>
                                    <span class="float-right text-muted">
                                        {{ $teacher->dob }}
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left"> Phone </span>
                                    <span class="float-right text-muted">
                                        {{ $teacher->phone }}
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left"> Email </span>
                                    <span class="float-right text-muted">
                                        {{ $teacher->email }}
                                    </span>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-8">
                    <div class="card">
                        <div class="padding-20">
                            <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                {{-- <li class="nav-item">
                                    <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about" role="tab"
                                        aria-selected="true">About</a>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link active" id="profile-tab2" data-toggle="tab" href="#settings"
                                        role="tab" aria-selected="false">Setting</a>
                                </li>
                            </ul>
                            <div class="tab-content tab-bordered" id="myTab3Content">
                                {{-- <div class="tab-pane fade show active" id="about" role="tabpanel"
                                    aria-labelledby="home-tab2">
                                    <div class="row">
                                        <div class="col-md-3 col-6 b-r">
                                            <strong>Full Name</strong>
                                            <br />
                                            <p class="text-muted">{{ $teacher->name }}</p>
                                        </div>
                                        <div class="col-md-3 col-6 b-r">
                                            <strong>Mobile</strong>
                                            <br />
                                            <p class="text-muted">{{ $teacher->phone }}</p>
                                        </div>
                                        <div class="col-md-3 col-6 b-r">
                                            <strong>Email</strong>
                                            <br />
                                            <p class="text-muted">{{ $teacher->email }}</p>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <strong>Location</strong>
                                            <br />
                                            <p class="text-muted">{{ $teacher->address }}</p>
                                        </div>
                                    </div>
                                    <p class="m-t-30">
                                        Completed my graduation in Arts from the well known
                                        and renowned institution of Lahore University of
                                        Management Sciences (LUMS) 2000-01, which was
                                        affiliated to M.S. University. I ranker in
                                        University exams from the same university from
                                        1996-01.
                                    </p>
                                    <p>
                                        Worked as Professor and Head of the department at
                                        Lahore College of Arts and Sciences (LACAS) from
                                        2003-2015
                                    </p>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book. It has
                                        survived not only five centuries, but also the leap
                                        into electronic typesetting, remaining essentially
                                        unchanged.
                                    </p>
                                    <div class="section-title">Education</div>
                                    <ul>
                                        <li>
                                            MA in English - University of the Punjab (UCP),
                                            Lahore, Pakistan.
                                        </li>
                                        <li>
                                            MA in Urdu - Government College University(GCU),
                                            Lahore, Pakistan.
                                        </li>
                                        <li>
                                            MA in Islamic Studies - Minhaj University, Lahore,
                                            Pakistan.
                                        </li>
                                    </ul>
                                    <div class="section-title">Experience</div>
                                    <ul>
                                        <li>
                                            One year experience as Jr. Professor from
                                            April-2009 to march-2010 at University of
                                            Management and Technology (UMT)
                                        </li>
                                        <li>
                                            Three year experience as Jr. Professor at
                                            University of Central Punjab (UCP) from April -
                                            2008 to April - 2011.
                                        </li>
                                        <li>
                                            Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry.
                                        </li>
                                        <li>
                                            Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry.
                                        </li>
                                        <li>
                                            Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry.
                                        </li>
                                        <li>
                                            Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry.
                                        </li>
                                    </ul>
                                </div> --}}
                                <div class="tab-pane fade show active" id="settings" role="tabpanel"
                                    aria-labelledby="profile-tab2">
                                    <form wire:submit.prevent="changePassword({{ $teacher->id }})">
                                        @csrf
                                        <div class="card-header">
                                            <h4>Edit Password</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group col-12">
                                                <label>New Password</label>
                                                <input type="password" class="form-control" wire:model="password" />
                                                @error('password')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group col-12">
                                                <label>Confirm New Password</label>
                                                <input type="password" class="form-control"
                                                    wire:model="confirmPassword" />
                                                @error('confirmPassword')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="card-footer text-right">
                                                <button type="submit" class="btn btn-primary">
                                                    Save
                                                </button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>