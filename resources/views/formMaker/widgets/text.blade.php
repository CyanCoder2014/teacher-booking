<div class="col-sm-12 form-group {{ $fiels['name'] }}">
    <div class="md-form mb-0">
        @if(isset($fiels['slug']))
            <label for="{{ $fiels['name'] }}">{{ $fiels['slug'] }}</label>
        @endif
        <input type="text" name="{{ $fiels['name'] }}" id="{{ $fiels['name'] }}" value="{{ $value }}" class="form-control">
    </div>

</div>
@if(isset($fiels['showIF']))
    <?php
        $showif = explode(',',$fiels['showIF']);
        $field = $showif[0];
        $field_value = $showif[1];
    ?>
<script>
    if($('#{{ $field }}').val() != {{ $field_value }})
        $('.{{ $fiels['name'] }}').hide();
    $('#{{ $field }}').change(function () {
        if ($('#{{ $field }}').val() == {{ $field_value }})
            $('.{{ $fiels['name'] }}').show();
        else
            $('.{{ $fiels['name'] }}').hide();
    })
</script>
@endif