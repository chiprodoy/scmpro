    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    @if($inline)
        <div class="form-group row">
            <label for="{{$name}}" class="col-md-2 col-form-label">
                <strong>{{$label}}</strong>
            </label>
            <div class="col-sm-10">
            <input type="text" name="{{$name}}" {{(isset($readonly)) ? "readonly" : ""}} id="{{$id}}" value="{{$value}}" autocomplete="given-name"
            class="form-control" />
            </div>
        </div>
    @else
    <div class="form-group">
        <label for="{{$name}}">
            <strong>{{$label}}</strong>
        </label>
        <input type="text" name="{{$name}}" {{(isset($readonly)) ? "readonly" : ""}} id="{{$id}}" value="{{$value}}" autocomplete="given-name"
        class="form-control form-control-sm" />
    </div>

    @endif

