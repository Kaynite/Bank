@extends('adminlte.layouts.main')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Department info.</h5>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Employee name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter department name" value="{{ $department->name }}" required readonly>
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
                    <h5 class="card-title">Employees</h5>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-sm text-center">
                        <thead class="thead-default">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                            </tr>
                            </thead>
                            <tbody>
                                @if ($department->employees->count() > 0)
                                @foreach ($department->employees as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="2">No Employees in this department.</td>
                                </tr>
                                @endif

                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('title', 'Add new employee')

@section('styles')
    {{-- Styles Goes Here --}}
@endsection

@section('scripts')
    {{-- Scripts Goes Here --}}
@endsection