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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (empty($dayRecord[0]))
                                        <tr>
                                            <td colspan="7">No Class</td>
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (empty($dayRecord[1]))
                                        <tr>
                                            <td colspan="7">No Class</td>
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (empty($dayRecord[2]))
                                        <tr>
                                            <td colspan="7">No Class</td>
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (empty($dayRecord[3]))
                                        <tr>
                                            <td colspan="7">No Class</td>
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (empty($dayRecord[4]))
                                        <tr>
                                            <td colspan="7">No Class</td>
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (empty($dayRecord[5]))
                                        <tr>
                                            <td colspan="7">No Class</td>
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
</div>