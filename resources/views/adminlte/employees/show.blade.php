@extends('adminlte.layouts.main')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Employee info.</h5>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Employee name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter employee name" value="{{ $employee->name }}" required readonly>
                        @error('name')
                        <small class="form-text text-danger">Help text</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">Department</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter employee name" value="{{ $employee->department->name }}" required readonly>
                        @error('name')
                        <small class="form-text text-danger">Help text</small>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Department history.</h5>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-sm">
                        <thead class="thead-default">
                            <tr>
                                <th style="width: 25%; text-align:center">Department</th>
                                <th style="width: 25%; text-align:center">Date</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($employee->departments as $item)
                                <tr>
                                    <td style="text-align:center">{{ $item->name }}</td>
                                    <td style="text-align:center">{{ $item->pivot->date }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('title')
{{ $employee->name }}
@endsection

@section('styles')
    {{-- Styles Goes Here --}}
@endsection

@section('scripts')
    {{-- Scripts Goes Here --}}
@endsection