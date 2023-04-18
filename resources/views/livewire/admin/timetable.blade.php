<div class="main-content">
    @if (Session::has('msg'))
    <p style="display:none" wire:init="showToast('{{ Session::get('msg') }}')"></p>
    @endif
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="pt-3">Timetable ( Monday to Saturday )</h4>
                        </div>
                        <h4 class="brand-name text-center py-3">
                            Welcome to the ANGEL School System Timetable
                        </h4>
                        <div class="search-box">
                            <div class="row mx-2">
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <a href="{{ route('admin.addTimetable') }}" class="btn btn-primary" id="swal-2">
                                        Add Timetable
                                    </a>
                                    <div>
                                        <select wire:model="search" class="form-control">
                                            <option value="">Select Class</option>
                                            @foreach ($classes as $class)
                                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @if (!empty($dayRecord))
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="tableExport" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>Monday</th>
                                            <th></th>
                                            <th></th>
                                            <th>Subject Name</th>
                                            <th>Subject Teacher</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (empty($dayRecord[0]))
                                        <tr>
                                            <td colspan="7">No Timetable Record</td>
                                        </tr>
                                        @else
                                        @foreach ($dayRecord[0] as $record)

                                        <tr>
                                            <td class="d-flex align-items-center">
                                                {{ date_format(DateTime::createFromFormat('H:i:s',
                                                $record['start_time']), 'g:i a') }} - {{
                                                date_format(DateTime::createFromFormat('H:i:s',
                                                $record['end_time']), 'g:i a') }}
                                                <div class="green mx-2"></div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td>{{ $record['subject_Name'] }}</td>
                                            <td>{{ $record['teacher']['name'] }}</td>
                                            <td>
                                                <a href="{{ route('admin.editTimetable', ['id'=>$record['id']]) }}"
                                                    class="btn btn-icon btn-outline-primary"><i
                                                        class="far fa-edit"></i></a>
                                            <td>
                                                <button type="button"
                                                    wire:click.prevent="setTimetable({{$record['id']}})"
                                                    class="btn btn-icon btn-outline-danger" data-toggle="modal"
                                                    data-target="#basicModal"><i class="fas fa-times"></i></button>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>

                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="tableExport" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>TUESDAY</th>
                                            <th></th>
                                            <th></th>
                                            <th>Subject Name</th>
                                            <th>Subject Teacher</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (empty($dayRecord[1]))
                                        <tr>
                                            <td colspan="7">No Timetable Record</td>
                                        </tr>
                                        @else
                                        @foreach ($dayRecord[1] as $record)

                                        <tr>
                                            <td class="d-flex align-items-center">
                                                {{ date_format(DateTime::createFromFormat('H:i:s',
                                                $record['start_time']), 'g:i a') }} - {{
                                                date_format(DateTime::createFromFormat('H:i:s',
                                                $record['end_time']), 'g:i a') }}
                                                <div class="green mx-2"></div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td>{{ $record['subject_Name'] }}</td>
                                            <td>{{ $record['teacher']['name'] }}</td>
                                            <td>
                                                <a href="{{ route('admin.editTimetable', ['id'=>$record['id']]) }}"
                                                    class="btn btn-icon btn-outline-primary"><i
                                                        class="far fa-edit"></i></a>
                                            <td>
                                                <button type="button"
                                                    wire:click.prevent="setTimetable({{$record['id']}})"
                                                    class="btn btn-icon btn-outline-danger" data-toggle="modal"
                                                    data-target="#basicModal"><i class="fas fa-times"></i></button>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="tableExport" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>WEDNESDAY</th>
                                            <th></th>
                                            <th></th>
                                            <th>Subject Name</th>
                                            <th>Subject Teacher</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (empty($dayRecord[2]))
                                        <tr>
                                            <td colspan="7">No Timetable Record</td>
                                        </tr>
                                        @else
                                        @foreach ($dayRecord[2] as $record)

                                        <tr>
                                            <td class="d-flex align-items-center">
                                                {{ date_format(DateTime::createFromFormat('H:i:s',
                                                $record['start_time']), 'g:i a') }} - {{
                                                date_format(DateTime::createFromFormat('H:i:s',
                                                $record['end_time']), 'g:i a') }}
                                                <div class="green mx-2"></div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td>{{ $record['subject_Name'] }}</td>
                                            <td>{{ $record['teacher']['name'] }}</td>
                                            <td>
                                                <a href="{{ route('admin.editTimetable', ['id'=>$record['id']]) }}"
                                                    class="btn btn-icon btn-outline-primary"><i
                                                        class="far fa-edit"></i></a>
                                            <td>
                                                <button type="button"
                                                    wire:click.prevent="setTimetable({{$record['id']}})"
                                                    class="btn btn-icon btn-outline-danger" data-toggle="modal"
                                                    data-target="#basicModal"><i class="fas fa-times"></i></button>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="tableExport" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>THURSDAY</th>
                                            <th></th>
                                            <th></th>
                                            <th>Subject Name</th>
                                            <th>Subject Teacher</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (empty($dayRecord[3]))
                                        <tr>
                                            <td colspan="7">No Timetable Record</td>
                                        </tr>
                                        @else
                                        @foreach ($dayRecord[3] as $record)

                                        <tr>
                                            <td class="d-flex align-items-center">
                                                {{ date_format(DateTime::createFromFormat('H:i:s',
                                                $record['start_time']), 'g:i a') }} - {{
                                                date_format(DateTime::createFromFormat('H:i:s',
                                                $record['end_time']), 'g:i a') }}
                                                <div class="green mx-2"></div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td>{{ $record['subject_Name'] }}</td>
                                            <td>{{ $record['teacher']['name'] }}</td>
                                            <td>
                                                <a href="{{ route('admin.editTimetable', ['id'=>$record['id']]) }}"
                                                    class="btn btn-icon btn-outline-primary"><i
                                                        class="far fa-edit"></i></a>
                                            <td>
                                                <button type="button"
                                                    wire:click.prevent="setTimetable({{$record['id']}})"
                                                    class="btn btn-icon btn-outline-danger" data-toggle="modal"
                                                    data-target="#basicModal"><i class="fas fa-times"></i></button>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="tableExport" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>FRIDAY</th>
                                            <th></th>
                                            <th></th>
                                            <th>Subject Name</th>
                                            <th>Subject Teacher</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (empty($dayRecord[4]))
                                        <tr>
                                            <td colspan="7">No Timetable Record</td>
                                        </tr>
                                        @else
                                        @foreach ($dayRecord[4] as $record)

                                        <tr>
                                            <td class="d-flex align-items-center">
                                                {{ date_format(DateTime::createFromFormat('H:i:s',
                                                $record['start_time']), 'g:i a') }} - {{
                                                date_format(DateTime::createFromFormat('H:i:s',
                                                $record['end_time']), 'g:i a') }}
                                                <div class="green mx-2"></div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td>{{ $record['subject_Name'] }}</td>
                                            <td>{{ $record['teacher']['name'] }}</td>
                                            <td>
                                                <a href="{{ route('admin.editTimetable', ['id'=>$record['id']]) }}"
                                                    class="btn btn-icon btn-outline-primary"><i
                                                        class="far fa-edit"></i></a>
                                            <td>
                                                <button type="button"
                                                    wire:click.prevent="setTimetable({{$record['id']}})"
                                                    class="btn btn-icon btn-outline-danger" data-toggle="modal"
                                                    data-target="#basicModal"><i class="fas fa-times"></i></button>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="tableExport" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>SATURDAY</th>
                                            <th></th>
                                            <th></th>
                                            <th>Subject Name</th>
                                            <th>Subject Teacher</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (empty($dayRecord[5]))
                                        <tr>
                                            <td colspan="7">No Timetable Record</td>
                                        </tr>
                                        @else
                                        @foreach ($dayRecord[5] as $record)

                                        <tr>
                                            <td class="d-flex align-items-center">
                                                {{ date_format(DateTime::createFromFormat('H:i:s',
                                                $record['start_time']), 'g:i a') }} - {{
                                                date_format(DateTime::createFromFormat('H:i:s',
                                                $record['end_time']), 'g:i a') }}
                                                <div class="green mx-2"></div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td>{{ $record['subject_Name'] }}</td>
                                            <td>{{ $record['teacher']['name'] }}</td>
                                            <td>
                                                <a href="{{ route('admin.editTimetable', ['id'=>$record['id']]) }}"
                                                    class="btn btn-icon btn-outline-primary"><i
                                                        class="far fa-edit"></i></a>
                                            <td>
                                                <button type="button"
                                                    wire:click.prevent="setTimetable({{$record['id']}})"
                                                    class="btn btn-icon btn-outline-danger" data-toggle="modal"
                                                    data-target="#basicModal"><i class="fas fa-times"></i></button>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            @endif
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
                        Delete Timetable Record
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this <b>Timetable Record</b>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-outline-dark d-flex align-items-center" data-dismiss="modal">
                        <ion-icon name="close-outline" class="share-icon"></ion-icon>
                        Close
                    </button>
                    <button type="button" wire:click.prevent="deleteTimetable" data-dismiss="modal"
                        class="btn btn-danger d-flex align-items-center">
                        <ion-icon name="trash-bin-outline" class="share-icon"></ion-icon>
                        Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>