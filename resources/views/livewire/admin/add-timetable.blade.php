<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <h4 class="brand-name text-center py-3">
              Welcome to the ANGEL School System
            </h4>
            <div class="card-header">
              <h4 class="pt-3">Add TimeTable</h4>
            </div>
            <form wire:submit.prevent="addTimetable">
              <div class="card-body">

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>Class</label>
                    <select wire:model="class_id" class="form-control">
                      <option value="" selected>Select Class</option>
                      @foreach ($classes as $class)
                      <option value="{{ $class->id }}">{{ $class->name }}</option>
                      @endforeach
                    </select>
                    @error('class_id') <span class="text-danger error">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group col-md-6">
                    <label>Subject Teacher</label>
                    <select wire:model="subject_teacher" class="form-control">
                      <option value="" selected>Select Subject Teacher</option>
                      @foreach ($teachers as $teacher)
                      <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                      @endforeach
                    </select>
                    @error('subject_teacher') <span class="text-danger error">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>Subject Name</label>
                    <input type="text" class="form-control" wire:model='subject_name' />
                    @error('subject_name') <span class="text-danger error">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group col-md-6">
                    <label>Day</label>
                    <select wire:model="day" class="form-control">
                      <option value="" selected>Select Day</option>
                      <option value="MONDAY">MONDAY</option>
                      <option value="TUESDAY">TUESDAY</option>
                      <option value="WEDNESDAY">WEDNESDAY</option>
                      <option value="THURSDAY">THURSDAY</option>
                      <option value="FRIDAY">FRIDAY</option>
                      <option value="SATURDAY">SATURDAY</option>
                    </select>
                    @error('subject_teacher') <span class="text-danger error">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>Class Start Time</label>
                    <input type="time" class="form-control" wire:model='start_time' />
                    @error('start_time') <span class="text-danger error">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group col-md-6">
                    <label>Class End Time</label>
                    <input type="time" class="form-control" wire:model='end_time' />
                    @error('end_time') <span class="text-danger error">{{ $message }}</span>
                    @enderror
                  </div>
                </div>

              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary mr-1" id="swal-2" type="submit">
                  Submit
                </button>
                <button class="btn btn-secondary" type="button" wire:click.prevent="clear">
                  Reset
                </button>
              </div>
            </form>

            <!-- Print & Share Buttons -->

            {{-- <div class="d-flex justify-content-end mx-4 mb-3">
              <div class="btn-student-id-card">
                <a href="./StudentIDCard.html"
                  class="btn btn-icon icon-left btn-light d-flex align-items-center gap-1"><i
                    class="fas fa-address-card"></i> Student ID
                  Card</a>
              </div>
              <a href="#" class="btn btn-icon icon-left btn-outline-success mx-3 d-flex align-items-center gap-1">
                <ion-icon name="print-outline" class="share-icon"></ion-icon>
                Print
              </a>

              <button type="button" class="btn btn-outline-danger d-flex align-items-center" data-toggle="modal"
                data-target="#basicModal">
                <ion-icon name="arrow-redo-outline" class="share-icon"></ion-icon>
                Share
              </button>
            </div> --}}
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