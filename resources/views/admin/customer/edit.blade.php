@extends('admin.layouts.app')

@section('content')
    <x-admin-header title="Edit Customer">
        <button type="submit" class="btn btn-dark"><i class="fas fa-save"></i> Update</button>
        <button type="button" class="btn btn-default" onclick="history.back()">Go Back</button>
    </x-admin-header>

    <x-admin-content>
    </x-admin-content>
@endsection
