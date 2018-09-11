@extends('layouts.default')

@section('content')
    <div class="flex flex-wrap items-center justify-between px-6 mb-6">
        <div class="flex-1 py-6 text-grey-darkest border-b">
            <h1 class="text-grey-darker text-xl font-medium">Printers</h1>
        </div>
    </div>

    @include('printers.empty')
@endsection