@extends('layouts.default')

@section('content')
    <div class="flex flex-wrap items-center justify-between px-6 mb-6">
        <div class="flex-1 py-6 text-grey-darkest border-b">
            <h1 class="text-grey-darker text-xl font-medium">Shipments</h1>
        </div>
        <div class="border-b self-stretch flex items-center">
            <a href="{{ route('shipments.create') }}" class="bg-grey-light hover:bg-grey-lighter text-grey-darker text-sm font-medium py-2 px-3 rounded">Create shipment</a>
        </div>
    </div>

    @includeWhen(!empty($shipments->shipments), 'shipments.table', ['shipments' => $shipments->shipments])
    @includeWhen(empty($shipments->shipments), 'shipments.empty')
    
@endsection