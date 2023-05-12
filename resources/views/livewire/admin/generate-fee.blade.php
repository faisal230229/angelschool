<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <h4 class="brand-name text-center py-3">
                            Welcome to the ANGEL School System Student Registration
                            Form
                        </h4>
                        <div class="card-header">
                            <h4 class="pt-3">Generate Fee</h4>
                        </div>
                        <form wire:submit.prevent="generateFee">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Select Class(For Whole Class)</label>
                                        <select class="form-control" wire:model='class_id'>
                                            <option value="" selected>Select Class</option>
                                            @foreach ($classes as $class)
                                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('class_id') <span class="text-danger error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Student Id(For Specific Student)</label>
                                        <input type="text" class="form-control" wire:model='student_id' />
                                        @error('student_id') <span class="text-danger error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Previous Arrears</label>
                                        <input type="number" class="form-control" wire:model='arrears' />
                                        @error('arrears') <span class="text-danger error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Admission Fee</label>
                                        <input type="number" class="form-control" wire:model='admission_fee' />
                                        @error('admission_fee') <span class="text-danger error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Tution Fee</label>
                                        <input type="number" class="form-control" wire:model='tution_fee' />
                                        @error('tution_fee') <span class="text-danger error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Stationary Fee</label>
                                        <input type="number" class="form-control" wire:model='stationary_fee' />
                                        @error('stationary_fee') <span class="text-danger error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Paper Fund</label>
                                        <input type="number" class="form-control" wire:model='paper_fund' />
                                        @error('paper_fund') <span class="text-danger error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Others</label>
                                        <input type="number" class="form-control" wire:model='others' />
                                        @error('others') <span class="text-danger error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Select Month</label>
                                        <select class="form-control" wire:model='month' required>
                                            <option value="1">January</option>
                                            <option value="2">Feburary</option>
                                            <option value="3">March</option>
                                            <option value="4">Aprail</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">Novemeber</option>
                                            <option value="11">December</option>
                                        </select>
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