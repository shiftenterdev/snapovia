@extends('front.layouts.default')

@section('content')
    <section class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <livewire:front.customer.login/>
                </div>
                <div class="col-12 col-md-6">
                    <livewire:front.customer.registration/>
                </div>
            </div>
        </div>
    </section>
@endsection
