@extends('layouts.default')

@section('content')
    <div class="flex px-6 py-6 -mx-4">
        <div class="flex flex-col bg-white border border-grey-light rounded w-128 min-w-128 mx-2">
            <div class="flex px-4 -mb-px">
                <h3 class="text-grey-dark pt-3 font-normal text-base">Shipping to</h3>
            </div>
            <div class="flex-grow px-6 py-2 text-grey-darker -mx-2">
                <strong>{{ $shipment->to_address->name }}</strong><br/>
                @if(!empty($shipment->to_address->company))
                    {{ $shipment->to_address->company }}<br/>
                @endif
                {{ $shipment->to_address->street1 }}<br/>
                @if($shipment->to_address->street2)
                    {{ $shipment->to_address->street2 }}<br/>
                @endif
                {{ $shipment->to_address->city }}, {{ $shipment->to_address->state }}, {{ $shipment->to_address->zip }} {{ $shipment->to_address->country }}
            </div>
            <div class="flex-grow px-6 py-3 text-grey-darker -mx-2">
                @if($shipment->to_address->email)
                    {{ $shipment->to_address->email }}<br/>
                @endif
                @if($shipment->to_address->phone)
                    {{ $shipment->to_address->phone }}<br/>
                @endif
            </div>
        </div>
        <div class="flex flex-col bg-white border border-grey-light rounded w-128 min-w-128 mx-2">
            <div class="border-b px-4 -mb-px">
                <h3 class="text-grey-darkest py-3 font-medium text-base">Parcel</h3>
            </div>
            <div class="px-6 py-3 text-grey-darker -mx-2">
                {{ $shipment->parcel->width }} x {{ $shipment->parcel->length }} x {{ $shipment->parcel->height }}<br>
                {{ $shipment->parcel->weight }}
            </div>
        </div>
    </div>
    <div class="border-t border-b border-grey-light m-8">
        <table class="w-full text-left table-collapse">
            <thead>
                <tr>
                    <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lightest">Rate id</th>
                    <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lightest">Rate</th>
                    <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lightest">Currency</th>
                    <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lightest">Carrier</th>
                    <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lightest">Service</th>
                    <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lightest">Select Rate</th>
                </tr>
            </thead>
            <tbody>
                @forelse($shipment->rates as $rate)
                    <tr>
                        <td class="p-2 border-t border-grey-lighter font-mono text-xs text-blue-dark whitespace-pre">{{ $rate->id }}</td>
                        <td class="p-2 border-t border-grey-lighter font-mono text-xs text-blue-dark whitespace-pre">{{ $rate->rate }}</td>
                        <td class="p-2 border-t border-grey-lighter font-mono text-xs text-blue-dark whitespace-pre">{{ $rate->currency }} </td>
                        <td class="p-2 border-t border-grey-lighter font-mono text-xs text-blue-dark whitespace-pre">{{ $rate->carrier }}</td>
                        <td class="p-2 border-t border-grey-lighter font-mono text-xs text-blue-dark whitespace-pre">{{ $rate->service }}</td>
                        <td class="p-2 border-t border-grey-lighter font-mono text-xs text-blue-dark whitespace-pre">
                            <form action = "/shipments/{{ $rate->shipment_id }}/buy" method = "post">
                            <button type="submit" name="rate" value="{{ $rate->id }}" class="btn btn-primary">Buy</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="p-2 border-t border-grey-lighter text-center text-xs text-blue-dark whitespace-pre">No rates available.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection