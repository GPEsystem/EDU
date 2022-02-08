@extends('layouts.default')

@section('content')

    <a href="/supplier/create" class="btn btn-primary">Add Supplier</a>
    <table class="table">
        <thead>
            <tr>
                <td>Supplier Name</td>
                <td>Added In</td>
                <td>Actions</td>
            </tr>
        </thead>

        @foreach ($Suppliers as $Supplier)
            <tr>
                <td>{{ $Supplier->Name }}</td>
                <td>{{ $Supplier->created_at }}</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="actionbt_{{ $Supplier->Name }}"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Actions
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="actionbt1">
                            <li><a class="dropdown-item" href="/supplier/edit/?id={{ $Supplier->id }}">Edit</a></li>
                            <li><a class="dropdown-item" href="/supplier/delete/?id={{ $Supplier->id }}">Delete</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
        @endforeach

    </table>
    <a href="/supplier/create" class="btn btn-primary">Add Supplier</a>
@endsection
