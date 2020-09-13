@extends('admin.layouts.app')
@section('title','Product | ')
@section('content')

    <x-admin.header title="Products">
        <a href="{{route('admin.product.create')}}" class="btn btn-dark">
            <i class="fas fa-plus"></i> Add New Product
        </a>
    </x-admin.header>

    <livewire:admin.product />

@endsection

@section('style')
    <livewire:styles/>
@endsection

@section('script')
    <livewire:scripts/>
@endsection
