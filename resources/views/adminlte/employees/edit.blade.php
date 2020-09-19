@extends('adminlte.layouts.main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <form action="{{ route('employees.update', $employee->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="card-header">
                        <h5 class="card-title">Employees</h5>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Employee name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter employee name" value="{{ $employee->name }}" required>
                            @error('name')
                            <small class="form-text text-danger">Help text</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="department_id">Choose Department</label>
                            <select class="form-control" name="department_id" id="department_id" required>
                                @foreach ($departments as $dep)
                                <option value="{{ $dep->id }}" {{ $dep->id == $employee->department_id ? 'selected disabled' : null }}>{{ $dep->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
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