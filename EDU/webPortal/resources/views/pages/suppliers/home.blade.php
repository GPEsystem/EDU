@extends('layouts.default')

@section('content')


    <table class="table">
        <thead>
            <tr>
                <td>Supplier Name</td>
                <td>Added In</td>
                <td>Actions</td>
            </tr>
        </thead>

        <tr>
            <td>Supplier A</td>
            <td>1/1/2022</td>
            <td>
               <div class="dropdown">
                   <button class="btn btn-secondary dropdown-toggle" type ="button" id="actionbt1" data-bs-toggle="dropdown" aria-expanded="false">
                       Actions
                   </button>
                   <ul class="dropdown-menu" aria-labelledby="actionbt1">
                       <li><a class="dropdown-item" href="#">Edit</a></li>
                       <li><a class="dropdown-item" href="#">Delete</a></li>
                   </ul>
               </div>
            </td>
        </tr>
    </table>
<a href="/supplier/create" class="btn btn-primary">Add Supplier</a>
@endsection
