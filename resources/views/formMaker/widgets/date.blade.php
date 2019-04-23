<div class="col-sm-4 form-group">
    @if(isset($fiels['slug']))
        <label for="{{ $fiels['name'] }}">{{ $fiels['slug'] }}</label>
    @endif
    <input type="text" name="{{ $fiels['name'] }}" id="{{ $fiels['name'] }}" value="{{ $value }}" class="form-control">
</div>
<link rel="stylesheet" href="/widgets/datepicker/en/jquery-ui.css">
<script src="/widgets/datepicker/en/jquery-ui.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        {{--$("#{{ $fiels['name'] }}").persiandatetime({--}}
            {{--formatDate: "YYYY/MM/DD hh:mm:ss"--}}
        {{--});--}}
        $("#{{ $fiels['name'] }}").datepicker({
            appendText: "(yyyy-mm-dd)",
            dateFormat: "yy-mm-dd"

        });

    });
</script>