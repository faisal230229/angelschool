<div class="main-content">
    @if (Session::has('msg'))
    <p style="display:none" wire:init="showToast('{{ Session::get('msg') }}')"></p>
    @endif
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <h4 class="brand-name text-center py-3">
                            Welcome to the ANGELS School System Students List
                        </h4>
                        <div class="card-header">
                            <h4 class="py-3">All Classes</h4>
                        </div>

                        <div class="search-box">
                            <div class="row mx-2">
                                <div class="col-12 d-flex justify-content-end align-items-center">
                                    <div class="form-group d-flex">
                                        <div>
                                            <h6 class="mt-2 mx-2">Search :</h6>
                                        </div>
                                        <div>
                                            <input type="text" wire:model="search" class="form-control" />
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
                                            <th>Class ID</th>
                                            <th>Class Name</th>
                                            <th>Class Teacher Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($classes as $class)
                                        <tr>
                                            <td>{{ $class->id }}</td>
                                            <td>{{ $class->name }}</td>
                                            <td>{{ $class->classTeacher ? $class->classTeacher->name : 'NILL' }}
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.editClass', ['id'=>$class->id]) }}"
                                                    class="btn btn-icon btn-outline-primary"><i
                                                        class="far fa-edit"></i></a>
                                                <button type="button" wire:click.prevent="setClass({{$class->id}})"
                                                    class="btn btn-icon btn-outline-danger" data-toggle="modal"
                                                    data-target="#basicModal"><i class="fas fa-times"></i></button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $classes->links() }}
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
    <div class="modal fade" wire:ignore.self id="basicModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" style="display: none" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Delete Class
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this <b>Class</b>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-outline-dark d-flex align-items-center" data-dismiss="modal">
                        <ion-icon name="close-outline" class="share-icon"></ion-icon>
                        Close
                    </button>
                    <button type="button" wire:click.prevent="deleteClass" data-dismiss="modal"
                        class="btn btn-danger d-flex align-items-center">
                        <ion-icon name="trash-bin-outline" class="share-icon"></ion-icon>
                        Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>