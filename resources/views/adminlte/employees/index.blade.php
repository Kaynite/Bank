@extends('adminlte.layouts.main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Employees</h5>
                </div>

                <div class="card-body">
                    <div class="row justify-content-center mb-3">
                        <a class="btn btn-primary" href="{{ route('employees.create') }}"><i class="fa fa-plus"></i> Add new employee</a>
                    </div>

                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <th style="width: 5%; text-align:center">ID</th>
                                <th>Name</th>
                                <th style="width: 15%; text-align:center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                            <tr>
                                <td>{{ $employee->id }}</td>
                                <td>{{ $employee->name }}</td>
                                <td style="text-align:center">
                                    <a class="btn btn-success btn-sm" href="{{ route('employees.show', $employee->id) }}"><i class="fas fa-eye"></i></a>
                                    <a class="btn btn-primary btn-sm" href="{{ route('employees.edit', $employee->id) }}"><i class="fas fa-edit"></i></a>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal{{ $employee->id }}">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modal{{ $employee->id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Delete employee</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete {{ $employee->name }} ?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <form action="{{ route('employees.destroy', $employee->id) }}" method="post" class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="card-footer p-0 pt-3 d-flex justify-content-center">
                    {{ $employees->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('title', 'Employees')

@section('styles')
    {{-- Styles Goes Here --}}
@endsection

@section('scripts')
    {{-- Scripts Goes Here --}}
@endsection