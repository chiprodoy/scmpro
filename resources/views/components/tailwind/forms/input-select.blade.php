
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    <div class="col-span-6 sm:col-span-3 my-2">
        <label for="{{$name}}" class="block text-sm font-medium text-gray-700">
          <strong>  {{$label}} </strong>
        </label>
        <select name="{{$name}}" id="{{$id}}"
        class="m-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm
        sm:text-sm border-gray-300 rounded-md">
        <option value="0">Silahkan Pilih</option>
        @foreach ($option as $item)
        <option value="{{ $item['reckey'] }}">{{ $item['text'] }}</option>
        @endforeach
        </select>
    </div>

