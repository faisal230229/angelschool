<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <h4 class="brand-name text-center py-3">
                            Welcome to the ANGEL School System Announcement
                            Form
                        </h4>
                        <div class="card-header">
                            <h4 class="pt-3">Make Announcement</h4>
                        </div>
                        <form wire:submit.prevent="makeAnnouncement">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="checkbox" value="true" wire:model='teachers' />
                                        <label>Teachers</label>
                                        @error('name') <span class="text-danger error">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="checkbox" value="true" wire:model='students' />
                                        <label>Studens</label>
                                        @error('name') <span class="text-danger error">{{ $message }}</span> @enderror
                                    </div>
                                    @if ($students)
                                    <div class="form-group col-md-6">
                                        <label>Select Classes</label>
                                        <select class="form-control" wire:model="class" multiple=""
                                            style="height: 40px">
                                            @foreach ($classes as $class)
                                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('class') <span class="text-danger error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    @endif
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label>Message</label>
                                        <textarea class="form-control w-full" rows="15" wire:model='message'></textarea>
                                        @error('name') <span class="text-danger error">{{ $message }}</span> @enderror
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
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>