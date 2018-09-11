@extends('layouts.default')

@section('content')
    <div class="flex flex-wrap items-center justify-between px-6 mb-6">
        <div class="flex-1 py-6 text-grey-darkest border-b">
            <h1 class="text-grey-darker text-xl font-medium tracking-normal">New shipment</h1>
        </div>
    </div>
    <div class="px-6">
        <form class="flex flex-wrap" autocomplete="off" method="post" action="{{ route('shipments.store') }}">
            <div class="w-full md:w-1/2 lg:w-2/3 px-3 mb-3">
                @include('partials.address', ['name' => 'To address', 'countries' => $countries])
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-3 mb-3">
                <div class="w-full rounded border px-3">
                    @include('partials.parcel')
                </div>
            </div>
            <div class="w-full md:w-2/3 px-3 mb-3">
                <button type="submit" class="block shadow w-full px-8 py-6 rounded text-2xl tracking-wide font-medium bg-green text-white">Get rates</button>
            </div>
        </form>
    </div>
@endsection