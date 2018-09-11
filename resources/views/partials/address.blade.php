<div class="flex flex-wrap -mx-3 mb-3">
    <div class="w-full px-3">
        <h2 class="block text-grey-darker text-xl font-semibold mb-2">
            {{ $name }}
        </h2>
    </div>
</div>
<div class="flex flex-wrap -mx-3 mb-3">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block text-grey-darker text-sm font-semibold mb-2" for="grid-first-name">
            First & last name
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darkest border border-grey-light rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" name="address[name]">
    </div>
    <div class="w-full md:w-1/2 px-3">
        <label class="block text-grey-darker text-sm font-semibold mb-2" for="grid-last-name">
            Company name <span class="text-grey font-normal">(optional)</span>
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-light rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" type="text" name="address[company]">
    </div>
</div>
<div class="flex flex-wrap -mx-3 mb-3">
    <div class="w-full px-3">
        <label class="block text-grey-darker text-sm font-semibold mb-2" for="grid-password">
            Street address 1
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-light rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey" type="text" name="address[street1]" required>
    </div>
</div>
<div class="flex flex-wrap -mx-3 mb-3">
    <div class="w-full px-3">
        <label class="block text-grey-darker text-sm font-semibold mb-2" for="grid-password">
            Street address 2 <span class="text-grey font-normal">(optional)</span>
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-light rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey" type="text" name="address[street2]">
    </div>
</div>
<div class="flex flex-wrap -mx-3 mb-3">
    <div class="w-full md:w-1/3 px-3 mb-2">
      <label class="block text-grey-darker text-sm font-semibold mb-2" for="grid-city">
        City
      </label>
      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-light rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" type="text" name="address[city]" required>
    </div>
    <div class="w-full md:w-1/5 px-3 mb-2">
      <label class="block text-grey-darker text-sm font-semibold mb-2" for="grid-city">
        State
      </label>
      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-light rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" type="text" name="address[state]" required>
    </div>
    <div class="w-full md:w-1/5 px-3 mb-2">
      <label class="block text-grey-darker text-sm font-semibold mb-2" for="grid-zip">
        Zipcode
      </label>
      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-light rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" type="text" name="address[zip]" required>
    </div>
    <div class="w-full md:w-1/4 px-3 mb-2">
      <label class="block text-grey-darker text-sm font-semibold mb-2" for="grid-state">
        Country
      </label>
      <div class="relative">
        <select class="block appearance-none w-full bg-grey-lighter border border-grey-light text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-state" name="address[country]">
        <option></option>
          @foreach($countries as $value => $name)
            <option value="{{ $value }}">{{ $name }}</option>
        @endforeach
        </select>
        <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>
  </div>
<div class="flex flex-wrap items-center -mx-3 mb-3">
    <div class="w-full md:w-1/2 px-3 mb-2">
        <label class="block text-grey-darker text-sm font-semibold mb-2" for="grid-city">
            Phone <span class="text-grey font-normal">(optional)</span>
        </label>
        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-light rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" type="text" name="address[city]">
    </div>
    <div class="w-full md:w-1/4 px-3 mb-2">
        <label class="inline-block text-grey-darker text-sm font-semibold mb-2">
            <input class="inline-block mr-2" type="checkbox" name="verify">
            Verify address?
        </label>
    </div>
    <div class="w-full md:w-1/4 px-3 mb-2">
        <label class="inline-block text-grey-darker text-sm font-semibold mb-2">
            <input class="inline-block mr-2" type="checkbox" name="address[residential]">
            Residential?
        </label>
    </div>
</div>