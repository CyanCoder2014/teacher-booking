<div class="col-sm-4 form-group">
    @if(isset($fiels['slug']))
        <label for="{{ $fiels['name'] }}">{{ $fiels['slug'] }}</label>
    @endif
            @if(is_array($fiels['values']))
                @foreach($fiels['values'] as $key => $val)
                    <div class="">
                        <input type="checkbox" name="{{ $fiels['name'] }}[]" value="{{$key}}" id="{{ $fiels['name'] }}[{{$key}}]"
                               @if(isset($value) && is_array($value) && in_array($key,$value)) checked="checked" @endif >
                        <label for="{{ $fiels['name'] }}[{{$key}}]"> {{ $val }}</label>
                    </div>
                @endforeach
            @endif

</div>
