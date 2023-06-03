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
                            <h4 class="pt-3">Student Certificate</h4>
                        </div>
                        <form wire:submit.prevent="generateCertificate">
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Content</label>
                                        <textarea wire:model="content" class="form-control" cols="30"></textarea>
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