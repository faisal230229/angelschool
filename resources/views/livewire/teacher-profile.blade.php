<div class="main-content">
    @if (Session::has('msg'))
    <p style="display:none" wire:init="showToast('{{ Session::get('msg') }}')"></p>
    @endif
    <section class="section">
        <div class="section-body">
            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card author-box">
                        <div class="card-body">
                            <div class="author-box-center">
                                <div class="profile-picture">
                                    <img alt="image" src="{{ asset(auth()->user()->image) }}"
                                        class="rounded-circle author-box-picture  " />
                                </div>
                                <div class="clearfix"></div>
                                <div class="author-box-name mt-2">
                                    <a href="#">{{ auth()->user()->name }}</a>
                                </div>
                                <div class="author-box-job">Teacher</div>
                            </div>
                            {{-- <div class="d-flex align-items-center justify-content-center">
                                <a href="{{ route('admin.teacherCardPdf', ['id'=> auth()->user()->id]) }}"
                                    class="btn btn-icon icon-left btn-outline-success d-flex align-items-center">
                                    <i class="material-icons mx-1">print</i>
                                    Employee Card
                                </a>
                            </div> --}}
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
                                        {{ auth()->user()->dob }}
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left"> Phone </span>
                                    <span class="float-right text-muted">
                                        {{ auth()->user()->phone }}
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left"> Email </span>
                                    <span class="float-right text-muted">
                                        {{ auth()->user()->email }}
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
                                <li class="nav-item">
                                    <a class="nav-link" id="home-tab2" data-toggle="tab" href="#about" role="tab"
                                        aria-selected="true">About</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#settings" role="tab"
                                        aria-selected="false">Setting</a>
                                </li>
                            </ul>
                            <div class="tab-content tab-bordered" id="myTab3Content">
                                <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="home-tab2">
                                    <div class="row">
                                        <div class="col-md-3 col-6 b-r">
                                            <strong>Full Name</strong>
                                            <br />
                                            <p class="text-muted">{{ auth()->user()->name }}</p>
                                        </div>
                                        <div class="col-md-3 col-6 b-r">
                                            <strong>Mobile</strong>
                                            <br />
                                            <p class="text-muted">{{ auth()->user()->phone }}</p>
                                        </div>
                                        <div class="col-md-3 col-6 b-r">
                                            <strong>Email</strong>
                                            <br />
                                            <p class="text-muted">{{ auth()->user()->email }}</p>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <strong>Location</strong>
                                            <br />
                                            <p class="text-muted">{{ auth()->user()->address }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 col-6 b-r">
                                            <strong>Cnic</strong>
                                            <br />
                                            <p class="text-muted">{{ auth()->user()->cnic }}</p>
                                        </div>
                                        <div class="col-md-3 col-6 b-r">
                                            <strong>Qualification</strong>
                                            <br />
                                            <p class="text-muted">{{ auth()->user()->qualification }}</p>
                                        </div>
                                        <div class="col-md-3 col-6 b-r">
                                            <strong>Nationality</strong>
                                            <br />
                                            <p class="text-muted">{{ auth()->user()->nationality }}</p>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <strong>Religion</strong>
                                            <br />
                                            <p class="text-muted">{{ auth()->user()->religion }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show active" id="settings" role="tabpanel"
                                    aria-labelledby="profile-tab2">
                                    <form wire:submit.prevent="changePassword({{ auth()->user()->id }})">
                                        @csrf
                                        <div class="card-header">
                                            <h4>Edit Password</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group col-12">
                                                <label>Current Password</label>
                                                <input type="password" class="form-control"
                                                    wire:model="currentPassword" />
                                                @error('currentPassword')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
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