<?php

namespace App\Http\Controllers;

use EasyPost\Address;
use EasyPost\Parcel;
use EasyPost\Shipment;
use Monarobase\CountryList\CountryListFacade as Countries;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Cache;

class ShipmentsController extends Controller
{
    public function index(Request $request)
    {
        $shipments = Cache::remember('shipments', 5, function() {
            return Shipment::all([
                // "purchased" => false,
                "page_size" => 100,
            ]);
        });
        return view('shipments.index', compact('shipments'));
    }

    public function create()
    {
        $countries = Countries::getList();
        return view('shipments.create', compact('countries'));
    }

    public function view(Request $request, $id)
    {
        $shipment = Cache::remember(`shipment_${id}`, 30, function() use ($id) {
            return Shipment::retrieve($id);
        });
        return view('shipments.view', compact('shipment'));
    }

    public function store(Request $request)
    {
        $to = Address::create(request('address'));
        $from = Address::retrieve(env('EASYPOST_ADDRESS_ID'));
        $parcel = Parcel::create(request('parcel'));
        $shipment = Shipment::create([
            "to_address" => $to,
            "from_address" => $from,
            "parcel" => $parcel,
        ]);

        return route('shipments.view', $shipment->id);
    }
}
