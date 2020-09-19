@extends('adminlte.layouts.main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <form action="{{ route('departments.store') }}" method="post">
                    @csrf
                    <div class="card-header">
                        <h5 class="card-title">Departments</h5>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Department name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter department name" value="{{ old('name') }}" required>
                            @error('name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
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

@section('title', 'Add new department')

@section('styles')
    {{-- Styles Goes Here --}}
@endsection

@section('scripts')
    {{-- Scripts Goes Here --}}
@endsection