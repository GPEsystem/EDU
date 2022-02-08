@extends('layouts.default')

@section('content')
<div class="row">
    <form method="POST" action="/supplier/edit">
        @csrf
        <input type="hidden" value="{{$Supplier->id}}" class="form-control" id="id" name="id" aria-describedby="emailHelp">
        <div class="mb-3">
            <label for="SupplierName" class="form-label">Supplier Name</label>
            <input type="text" value="{{$Supplier->Name}}" class="form-control" name="Name" id="SupplierName" aria-describedby="emailHelp">
            <div id="SupplierNameHelp" class="form-text">Please Provide the Supplier Name</div>
        </div>
        <div class="mb-3">
            <label for="Address" class="form-label">Address</label>
            <input type="text" class="form-control" name="Address" id="Address" value="{{$Supplier->Address}}">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="/supplier/home" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
