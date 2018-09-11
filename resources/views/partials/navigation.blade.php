<div class="bg-blue shadow pin-t sticky">
    <nav class="container mx-auto flex items-center justify-between flex-wrap p-4">
        <a href="{{ route('dashboard') }}" class="flex items-center flex-no-shrink text-white hover:text-blue-lightest mr-6">
            @include('partials.logo')
            {{-- <span class="px-2 font-medium text-2xl tracking-wide">Postly</span> --}}
        </a>
        <div class="w-full flex flex-grow items-center lg:w-auto">
            <div class="text-base flex-grow">
                <a href="{{ route('shipments.index') }}" class="inline-block font-medium text-blue-lighter hover:text-white mr-6">
                    Shipments
                </a>
                <a href="{{ route('printers.index') }}" class="inline-block font-medium text-blue-lighter hover:text-white mr-6">
                    Printers
                </a>
            </div>
            <div>
                <a href="https://github.com/stallninja/postly" class="text-sm font-normal leading-none text-white hover:text-blue-lightest mt-4">Github</a>
            </div>
        </div>
    </nav>
</div>