
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    <div class="form-group row">
        <label for="{{$name}}" class="col-md-2 col-form-label">
          <strong>  {{$label}} </strong>
        </label>
        <div class="col-sm-10">

        <select name="{{$name}}" id="{{$id}}"
        class="m-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm
        sm:text-sm border-gray-300 rounded-md">
        <option value="0">Silahkan Pilih</option>
        @foreach ($option as $item)
        <option value="{{ $item['reckey'] }}">{{ $item['text'] }}</option>
        @endforeach
        </select>
        </div>
    </div>

