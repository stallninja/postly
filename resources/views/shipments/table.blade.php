<div class="border-t border-b border-grey-light m-8">
    <table class="w-full text-left table-collapse">
        <thead>
            <tr>
                <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lightest">Address</th>
                <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lightest">Mode</th>
                <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lightest">Created</th>
                <th class="text-sm font-semibold text-grey-darker p-2 bg-grey-lightest">ZPL</th>
            </tr>
        </thead>
        <tbody class="align-baseline">
            @foreach($shipments as $shipment)
                <tr>
                    <td class="p-2 border-t border-grey-lighter font-mono text-xs text-blue-dark whitespace-pre">
                        <strong>{{ $shipment->to_address->name }}</strong><br/>
                        {{ $shipment->to_address->street1 }}<br/>
                        @if($shipment->to_address->street2)
                        {{ $shipment->to_address->street2 }}<br/>
                        @endif
                        {{ $shipment->to_address->city }}, {{ $shipment->to_address->state }}, {{ $shipment->to_address->zip }}
                    </td>
                    <td class="p-2 border-t border-grey-lighter font-mono text-xs text-blue-dark whitespace-pre">{{ $shipment->mode }}</td>
                    <td class="p-2 border-t border-grey-lighter font-mono text-xs text-blue-dark whitespace-pre">{{ optional($shipment->postage_label)->created_at || "Nothing" }}</td>
                    <td class="p-2 border-t border-grey-lighter font-mono text-xs text-blue-dark whitespace-pre">
                        @if(optional($shipment->postage_label)->label_zpl_url)
                            <a class="button" href="/shipments/{{ $shipment->id }}/print">print</a>
                            <a class="button" href="{{ $shipment->postage_label->label_zpl_url }}">download</a>
                        @else
                            <a class="button" href="/shipments/{{ $shipment->id }}/generate">generate</a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>