
    <div id="update" class="content">
        <div class="container-fluid">
            <div class="row">

              <div class="col-md-12">
                  <div class="card card-outline card-tabs">
                      <div class="card-header p-0 pt-1">
                          <div class="card-tools">
                              <button class="btn btn-primary btn_back"  type="button">Back</button>
                              <button class="btn btn-success btn_save" type="button">Save</button>

                          </div>
                      </div>
                      <div class="card-body">

    <form name="frmcreate" id="frmcreate" action="{{ url($controllerName) }}" method="POST" class="col-span-12 form-horizontal">
        @method('PUT')

        @foreach ($formfields as $field => &$fieldVal)
            @if(View::exists($controllerName.'.fields.'.$fieldVal->type))
                @include($controllerName.'.fields.'.$fieldVal->type)
                @yield($fieldVal->type)
            @else

                @if ($fieldVal->type=="hidden")
                    <x-easyui-forms::hidden
                    :id="$field"
                    :name="$field" />
                @elseif ($fieldVal->type=="select")
                    <x-easyui-forms::input-select
                    :id="$field"
                    :name="$field"
                    :label="$fieldVal->label"
                    :option="$fieldVal->list" />
                @else
                    <x-easyui-forms::input
                    :type="$fieldVal->type"
                    :id="$field"
                    :name="$field"
                    :label="$fieldVal->label" />
                @endif
            @endif

          {{-- @if ((count($formfields) - ($x+1)) % 3 > 0 && $x > 3)
              </div>  <div class="col-md-3">
          @endif --}}

          @endforeach

{{--           <div class="col-span-6 sm:col-span-3">
            <label for="first_name" class="block text-sm font-medium text-gray-700">First name</label>
            <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
          </div>

          <div class="col-span-6 sm:col-span-3">
            <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
            <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
          </div>

          <div class="col-span-6 sm:col-span-4">
            <label for="email_address" class="block text-sm font-medium text-gray-700">Email address</label>
            <input type="text" name="email_address" id="email_address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
          </div>

          <div class="col-span-6 sm:col-span-3">
            <label for="country" class="block text-sm font-medium text-gray-700">Country / Region</label>
            <select id="country" name="country" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              <option>United States</option>
              <option>Canada</option>
              <option>Mexico</option>
            </select>
          </div>

          <div class="col-span-6">
            <label for="street_address" class="block text-sm font-medium text-gray-700">Street address</label>
            <input type="text" name="street_address" id="street_address" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
          </div>

          <div class="col-span-6 sm:col-span-6 lg:col-span-2">
            <label for="city" class="block text-sm font-medium text-gray-700">City</label>
            <input type="text" name="city" id="city" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
          </div>

          <div class="col-span-6 sm:col-span-3 lg:col-span-2">
            <label for="state" class="block text-sm font-medium text-gray-700">State / Province</label>
            <input type="text" name="state" id="state" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
          </div>

          <div class="col-span-6 sm:col-span-3 lg:col-span-2">
            <label for="postal_code" class="block text-sm font-medium text-gray-700">ZIP / Postal</label>
            <input type="text" name="postal_code" id="postal_code" autocomplete="postal-code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
          </div>
 --}}
    </form>
                      </div>
                      <div class="card-footer">
                        <button class="btn btn-success float-right btn_save" type="button">Save</button>
                        <button class="btn btn-primary float-right mx-1 btn_back" type="button">Back</button>

                      </div>
                  </div> <!-- end card -->
              </div>
            </div>
        </div>
</div>
@section('css')

<link
rel="stylesheet"
href="{{ asset('assets/tailwind/css/components-v2.css') }}"
/>
@append
