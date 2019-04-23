<div class="col-sm-4 form-group">
    @if(isset($fiels['slug']))
        <label for="{{ $fiels['name'] }}">{{ $fiels['slug'] }}</label>
    @endif
    <input type="text" name="{{ $fiels['name'] }}" id="{{ $fiels['name'] }}" value="{{ $value }}" class="form-control">
</div>
{{--<link rel="stylesheet" href="/widgets/datetime/css/persiandatetime-default.css"/>--}}
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/flick/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="/widgets/datetime/en/jquery-ui-sliderAccess.js"></script>

<link rel="stylesheet" href="/widgets/datetime/en/jquery-ui-timepicker-addon.css">
<script src="/widgets/datetime/en/jquery-ui-timepicker-addon.js"></script>
<script src="/widgets/datetime/en/i18n/jquery-ui-timepicker-addon-i18n.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        {{--$("#{{ $fiels['name'] }}").persiandatetime({--}}
        {{--formatDate: "YYYY/MM/DD hh:mm:ss"--}}
        {{--});--}}
        $("#{{ $fiels['name'] }}").datetimepicker({
            timeOnly: false
        });

    });
</script>