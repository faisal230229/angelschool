<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="py-3">All Students</h4>
                        </div>
                        <div class="row mx-4 py-3">
                            <div class="col-12 col-md-3 bg-indigo pt-4 rounded">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <img src="{{ asset('assets/img/bill.png')}}" alt="" class=" img-fluid" />
                                    </div>
                                    <div>
                                        <h4 class=" ">RS: {{ $all->sum('total') }}</h4>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h6 class="py-2">All Invoices</h6>
                                    </div>
                                    <div class="mx-auto mt-2">
                                        <p>{{ $all->count() }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 bg-indigo pt-4 rounded mx-md-4 my-md-0 my-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <img src="{{ asset('assets/img/paid.png')}}" alt="" class=" img-fluid" />
                                    </div>
                                    <div>
                                        <h4 class=" ">RS: {{ $paid->sum('total') }}</h4>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h6 class="py-2">Paid</h6>
                                    </div>
                                    <div class="mx-auto mt-2">
                                        <p>{{ $paid->count() }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 bg-indigo pt-4 rounded">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <img src="{{ asset('assets/img/paper.png')}}" alt="" class=" img-fluid" />
                                    </div>
                                    <div>
                                        <h4 class=" ">RS: {{ $unpaid->sum('total') }}</h4>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h6 class="py-2">Unpaid</h6>
                                    </div>
                                    <div class="mx-auto mt-2">
                                        <p>{{ $unpaid->count() }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="search-box mt-3">
                            <div class="row mx-2">
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <div>
                                        <select wire:model="filter" class="form-control">
                                            <option value="unpaid">Unpaid</option>
                                            <option value="paid">Paid</option>
                                        </select>
                                    </div>
                                    <div class="d-flex">
                                        <div>
                                            <h6 class="mt-2 mx-2">Search :</h6>
                                        </div>
                                        <div>
                                            <input type="text" class="form-control" wire:model="search" />
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
                                            <th>Student Id</th>
                                            <th>Name</th>
                                            <th>Previous Arrears</th>
                                            <th class="text-center">Admission Fee</th>
                                            <th>Tution Fee</th>
                                            <th>Stationary</th>
                                            <th>Paper Fund</th>
                                            <th>Others</th>
                                            <th>Total</th>
                                            @if ($filter == 'paid')
                                            <th>Received</th>
                                            <th>Arrears</th>
                                            @else
                                            <th>Status</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($fees as $fee)
                                        <tr>
                                            <td>{{ $fee->student->id }}</td>
                                            <td>{{ $fee->student->name }}</td>
                                            <td>{{ $fee->prev_arrears }}</td>
                                            <td>{{ $fee->admission_fee }}</td>
                                            <td>{{ $fee->tution_fee }}</td>
                                            <td>{{ $fee->stationary_fee }}</td>
                                            <td>{{ $fee->paper_fund }}</td>
                                            <td>{{ $fee->others }}</td>
                                            <td>{{ $fee->total }}</td>
                                            @if ($filter == 'paid')
                                            <td>{{ $fee->received }}</td>
                                            <td>{{ $fee->arrears }}</td>
                                            @else
                                            <td>
                                                <form wire:submit.prevent="payFee({{ $fee->id }})" class="d-flex">
                                                    <input type="number" class="form-control"
                                                        wire:model="receive.{{ $fee->id }}">
                                                    <button class="btn btn-success">Paid</button>
                                                </form>
                                            </td>
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
                                        class="btn btn-icon icon-left btn-outline-success d-flex align-items-center gap-1">
                                        <ion-icon name="print-outline" class="share-icon"></ion-icon>
                                        Print
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>