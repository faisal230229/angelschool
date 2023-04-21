<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="py-3">Student Attendence</h4>
                        </div>
                        {{-- <div class="row d-flex justify-content-end mx-2 student-fee-info">
                            <div class="col-4 col-md-2">
                                <h6 class="fw-normal text-dark mt-md-4 mt-3">
                                    Teacher's Name:
                                </h6>
                            </div>
                            <div class="col-8 col-md-5">
                                <input type="text" class="form-control bg-white" />
                            </div>
                        </div>
                        <div class="row d-flex justify-content-end mx-2 student-fee-info mb-3">
                            <div class="col-4 col-md-2">
                                <h6 class="fw-normal text-dark mt-md-4 mt-3">Class:</h6>
                            </div>
                            <div class="col-8 col-md-5">
                                <input type="text" class="form-control bg-white" />
                            </div>
                        </div> --}}

                        <div class="search-box mt-3">
                            <div class="row mx-2">
                                <div class="col-12 d-flex justify-content-end align-items-center">
                                    <div class="form-group d-flex">
                                        <div>
                                            <h6 class="mt-2 mx-2">Search :</h6>
                                        </div>
                                        <div>
                                            <input type="text" wire:model='search' class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent='submitRecord'>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover" id="tableExport" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Father Name</th>
                                                <th>Attendence Percentage</th>
                                                <th></th>
                                                <th>Attendence Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($students as $student)
                                            <tr>
                                                <td>{{ $student->id }}</td>
                                                <td>{{ $student->name }}</td>
                                                <td>{{ $student->father_name }}</td>
                                                <td>75%</td>
                                                <td></td>
                                                <td>
                                                    <select class="form-control btn-primary" style="width: max-content"
                                                        wire:change="setRecord('{{ $student->id }}',$event.target.value)"
                                                        required>
                                                        <option value="" selected>Choose Status</option>
                                                        <option value="PRESENT">Present</option>
                                                        <option value="LEAVE">Leave</option>
                                                        <option value="ABSENT">Absent</option>
                                                    </select>
                                                    {{-- <div class="dropdown d-inline mr-2">
                                                        <button class="btn btn-success dropdown-toggle" type="button"
                                                            id="dropdownMenuButton" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            Present
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Leave</a>
                                                            <a class="dropdown-item" href="#">Absent</a>
                                                        </div>
                                                    </div> --}}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $students->links() }}
                                    {{-- <div class="d-flex justify-content-md-end">
                                        <nav aria-label="Page navigation example mx-3">
                                            <ul class="pagination">
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Previous</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">1</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">3</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div> --}}
                                    <!-- Print & Share Buttons -->

                                    {{-- <div class="d-flex justify-content-end my-2">
                                        <a href="#"
                                            class="btn btn-icon icon-left btn-outline-success mx-3 d-flex align-items-center gap-1">
                                            <ion-icon name="print-outline" class="share-icon"></ion-icon>
                                            Print
                                        </a>

                                        <button type="button" class="btn btn-outline-danger d-flex align-items-center"
                                            data-toggle="modal" data-target="#basicModal">
                                            <ion-icon name="arrow-redo-outline" class="share-icon"></ion-icon>
                                            Share
                                        </button>
                                    </div> --}}
                                    <div class="card-footer text-right">
                                        <button class="btn btn-primary mr-1" id="swal-2" type="submit">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>