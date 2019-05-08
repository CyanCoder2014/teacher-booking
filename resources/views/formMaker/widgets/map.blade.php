<style>
    #{{ $fiels['name'] }} {
        height: 300px;
        width: 600px;
    }
</style>
<div class="col-sm-12 form-group" style="height: 400px">
    @if(isset($fiels['slug']))
        <label for="{{ $fiels['name'] }}">{{ $fiels['slug'] }}</label>
    @endif

    <div id="{{ $fiels['name'] }}" style="width: 100%"></div>

        <input type="hidden" id="{{ $fiels['name'] }}lat" name="{{ $fiels['name'] }}[lat]" @if(isset($value['lat'])) value="$value['lat']" @endif>
        <input type="hidden" id="{{ $fiels['name'] }}lng" name="{{ $fiels['name'] }}[lng]" @if(isset($value['lat'])) value="$value['lat']" @endif>
</div>

<script type="text/javascript">
var map;

function initMap{{ $fiels['name'] }}() {
    var {{ $fiels['name'] }}latitude = {{$fiels['values']['lat']}}; // YOUR LATITUDE VALUE
    var {{ $fiels['name'] }}longitude = {{$fiels['values']['lng']}}; // YOUR LONGITUDE VALUE

    var {{ $fiels['name'] }}myLatLng = {lat: {{ $fiels['name'] }}latitude, lng: {{ $fiels['name'] }}longitude};


    {{ $fiels['name'] }}map = new google.maps.Map(document.getElementById('{{ $fiels['name'] }}'), {
        center: {{ $fiels['name'] }}myLatLng,
        zoom: 14,
        disableDoubleClickZoom: true, // disable the default map zoom on double click
    });
    var {{ $fiels['name'] }}marker = new google.maps.Marker(@if ($value)
        {
            position: {lat: {{ $value['lat'] }}, lng: {{ $value['lng'] }} },
            map: {{ $fiels['name'] }}map,
            title: 'pin'
        }
            @endif);
    // Update lat/long value of div when anywhere in the map is clicked
    google.maps.event.addListener({{ $fiels['name'] }}map,'click',function(event) {
        document.getElementById('{{ $fiels['name'] }}lat').value = event.latLng.lat();
        document.getElementById('{{ $fiels['name'] }}lng').value =  event.latLng.lng();
        {{ $fiels['name'] }}marker.setMap(null);
        {{ $fiels['name'] }}marker = new google.maps.Marker({
            position: event.latLng,
            map: {{ $fiels['name'] }}map,
            title: 'pin'
        });
        {{ $fiels['name'] }}marker.addListener('click', function() {
            {{ $fiels['name'] }}marker.setMap(null);
        });
    });



}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFSYJ_OsdkmQWzRM8XYtbs3TllwYdHE1Y&callback=initMap{{ $fiels['name'] }}"
        async defer></script>
