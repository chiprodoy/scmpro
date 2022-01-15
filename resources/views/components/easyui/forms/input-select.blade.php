
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    <div class="form-group row">
        <label for="{{$name}}" class="col-md-2 col-form-label">
          <strong>  {{$label}} </strong>
        </label>
        <div class="col-sm-10">

        <select name="{{$name}}" id="{{$id}}"  class="form-control">
        <option value="0">Silahkan Pilih</option>
        @foreach ($option as $item)
        <option value="{{ $item['reckey'] }}">{{ $item['text'] }}</option>
        @endforeach
        </select>
        </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#{{$id}}').select2();
    });
    </script>

