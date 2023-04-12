<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="py-3">All Students</h4>
                        </div>

                        <h4 class="brand-name text-center py-3">
                            Welcome to the ANGELS School System Students List
                        </h4>
                        <div class="search-box">
                            <div class="row mx-2">
                                <div class="col-12 d-flex justify-content-end align-items-center">
                                    <div class="form-group d-flex">
                                        <div>
                                            <h6 class="mt-2 mx-2">Search :</h6>
                                        </div>
                                        <div>
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="tableExport" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>Student ID</th>
                                            <th>Name</th>
                                            <th>Father's Name</th>
                                            <th>Class</th>
                                            <th>Contact Number</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($students as $student)
                                        <tr>
                                            <td>{{ $student->id }}</td>
                                            <td>{{ $student->name }}</td>
                                            <td>{{ $student->father_name }}</td>
                                            <td>{{ $student->class_id }}</td>
                                            <td>{{ $student->phone }}</td>
                                            <td>
                                                <a href="./studentProfile.html"
                                                    class="btn btn-icon btn-outline-success"><i class="far fa-eye"></i>
                                                </a>

                                                <a href="./editStudent.html" class="btn btn-icon btn-outline-primary"><i
                                                        class="far fa-edit"></i></a>
                                                <!-- Delete Button -->

                                                <a href="#" class="btn btn-icon btn-outline-danger" data-toggle="modal"
                                                    data-target="#basicModal"><i class="fas fa-times"></i></a>
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
                                <div class="d-flex justify-content-end my-2">
                                    <a href="#"
                                        class="btn btn-icon icon-left btn-outline-success d-flex align-items-center">
                                        <ion-icon name="print-outline" class="share-icon"></ion-icon>
                                        Print
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>