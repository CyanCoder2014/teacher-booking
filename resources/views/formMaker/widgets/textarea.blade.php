<div class="col-sm-12 form-group md-form">
    @if(isset($fiels['slug']))
        <label for="{{ $fiels['name'] }}">{{ $fiels['slug'] }}</label>
    @endif
    <textarea  name="{{ $fiels['name'] }}" id="{{ $fiels['name'] }}" class="form-control md-textarea">{{ $value }}</textarea>
</div>