<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <h4 class="brand-name text-center py-3">
              Welcome to the ANGEL School System Teacher Registration
              Form
            </h4>
            <div class="card-header">
              <h4 class="py-3">Teacher Registration</h4>
            </div>
            <div class="card-body">
              <form wire:submit.prevent="addTeacher" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label> Name</label>
                  <input type="text" class="form-control" wire:model="name" required />
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>Date Of Birth</label>
                    <input type="date" class="form-control" required wire:model="dob" />
                  </div>
                  <div class="form-group col-md-6">
                    <label>Contact Number</label>
                    <input type="text" class="form-control" required wire:model="phone" />
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>Email</label>
                    <input type="email" class="form-control" required wire:model="email" />
                  </div>
                  <div class="form-group col-md-6">
                    <label>Education Qualification</label>
                    <input type="text" class="form-control" required wire:model="qualification" />
                  </div>
                </div>

                <div class="form-group">
                  <label>Cnic</label>
                  <input type="number" class="form-control" required wire:model="cnic" />
                </div>

                <div class="form-group">
                  <label>Address</label>
                  <textarea class="form-control" required wire:model="address"></textarea>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>Select Nationality</label>
                    <select class="form-control" required wire:model="nationality">
                      <option value="Pakistani" selected>Pakistani</option>
                      <option value="Non Pakistani">Non Pakistani</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Select Religion</label>
                    <select class="form-control">
                      <option value="Islam" selected>Islam</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Christian">Christian</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>Password</label>
                    <input type="password" class="form-control" required wire:model="password" />
                  </div>
                  <div class="form-group col-md-6">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" required wire:model="password_confirmation" />
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-10">
                    <label>Profile</label>
                    <input type="file" class="form-control" required wire:model="image" />
                  </div>
                  <div class="form-group col-md-2">
                    <span class="">
                      @if ($image)
                      <img src="{{ $image->temporaryUrl() }}" width="100%" height="100">
                      @else
                      @endif
                    </span>
                  </div>
                </div>

                <div class="card-footer text-right">
                  <button class="btn btn-primary mr-1" id="swal-4" type="submit">
                    Submit
                  </button>
                  <button class="btn btn-secondary" type="reset" wire:click.prevent="clear">
                    Reset
                  </button>
                </div>
                <!-- Print & Share Buttons -->

                {{-- <div class="d-flex justify-content-end mb-3">
                  <div class="btn-student-id-card">
                    <a href="./teacherProfileCard.html"
                      class="btn btn-icon icon-left btn-light d-flex align-items-center gap-1"><i
                        class="fas fa-address-card"></i> Teacher ID
                      Card</a>
                  </div>
                  <a href="#" class="btn btn-icon icon-left btn-outline-success mx-4 d-flex align-items-center gap-1">
                    <ion-icon name="print-outline" class="share-icon"></ion-icon>
                    Print
                  </a>
                </div> --}}
              </form>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- <div class="settingSidebar">
      <a href="javascript:void(0)" class="settingPanelToggle">
        <i class="fa fa-spin fa-cog"></i>
      </a>
      <div class="settingSidebar-body ps-container ps-theme-default">
        <div class="fade show active">
          <div class="setting-panel-header">Setting Panel</div>
          <div class="p-15 border-bottom">
            <h6 class="font-medium m-b-10">Select Layout</h6>
            <div class="selectgroup layout-color w-50">
              <label class="selectgroup-item">
                <input
                  type="radio"
                  name="value"
                  value="1"
                  class="selectgroup-input-radio select-layout"
                  checked
                />
                <span class="selectgroup-button">Light</span>
              </label>
              <label class="selectgroup-item">
                <input
                  type="radio"
                  name="value"
                  value="2"
                  class="selectgroup-input-radio select-layout"
                />
                <span class="selectgroup-button">Dark</span>
              </label>
            </div>
          </div>
          <div class="p-15 border-bottom">
            <h6 class="font-medium m-b-10">Sidebar Color</h6>
            <div class="selectgroup selectgroup-pills sidebar-color">
              <label class="selectgroup-item">
                <input
                  type="radio"
                  name="icon-input"
                  value="1"
                  class="selectgroup-input select-sidebar"
                />
                <span
                  class="selectgroup-button selectgroup-button-icon"
                  data-toggle="tooltip"
                  data-original-title="Light Sidebar"
                  ><i class="fas fa-sun"></i
                ></span>
              </label>
              <label class="selectgroup-item">
                <input
                  type="radio"
                  name="icon-input"
                  value="2"
                  class="selectgroup-input select-sidebar"
                  checked
                />
                <span
                  class="selectgroup-button selectgroup-button-icon"
                  data-toggle="tooltip"
                  data-original-title="Dark Sidebar"
                  ><i class="fas fa-moon"></i
                ></span>
              </label>
            </div>
          </div>
          <div class="p-15 border-bottom">
            <h6 class="font-medium m-b-10">Color Theme</h6>
            <div class="theme-setting-options">
              <ul class="choose-theme list-unstyled mb-0">
                <li title="white" class="active">
                  <div class="white"></div>
                </li>
                <li title="cyan">
                  <div class="cyan"></div>
                </li>
                <li title="black">
                  <div class="black"></div>
                </li>
                <li title="purple">
                  <div class="purple"></div>
                </li>
                <li title="orange">
                  <div class="orange"></div>
                </li>
                <li title="green">
                  <div class="green"></div>
                </li>
                <li title="red">
                  <div class="red"></div>
                </li>
              </ul>
            </div>
          </div>
          <div class="p-15 border-bottom">
            <div class="theme-setting-options">
              <label class="m-b-0">
                <input
                  type="checkbox"
                  name="custom-switch-checkbox"
                  class="custom-switch-input"
                  id="mini_sidebar_setting"
                />
                <span class="custom-switch-indicator"></span>
                <span class="control-label p-l-10">Mini Sidebar</span>
              </label>
            </div>
          </div>
          <div class="p-15 border-bottom">
            <div class="theme-setting-options">
              <label class="m-b-0">
                <input
                  type="checkbox"
                  name="custom-switch-checkbox"
                  class="custom-switch-input"
                  id="sticky_header_setting"
                />
                <span class="custom-switch-indicator"></span>
                <span class="control-label p-l-10">Sticky Header</span>
              </label>
            </div>
          </div>
          <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
            <a
              href="#"
              class="btn btn-icon icon-left btn-primary btn-restore-theme"
            >
              <i class="fas fa-undo"></i> Restore Default
            </a>
          </div>
        </div>
      </div>
    </div> -->
</div>