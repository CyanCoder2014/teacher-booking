<link rel="stylesheet" type="text/css" href="/widgets/DataTables/datatables.min.css"/>


<table class="table table-striped table-hover table-custom" id="{{ $id }}">
    <thead>
        <tr>
            @foreach($class::getdatatable() as $row)
                <th>{{ $row['slug'] }}</th>
            @endforeach
        </tr>
    </thead>

</table>
@section('script')
    <script type="text/javascript" src="/widgets/DataTables/datatables.min.js"></script>
    <script>
    $('#{{ $id }}').DataTable({
        serverSide: true,
        ajax: "{{ $class::route('data') }}",
        columns: [
            @foreach($class::getdatatable() as $row)
                { name: '{{ $row['name'] }}'
                @if(! $row['orderable'])
                , orderable: false
                @endif
                @if(! $row['searchable'])
                , searchable: false
                @endif
            },
            @endforeach
        ],
        buttons: [
            {   extend: "whatAButton", name: "myButton" }
        ]
    });
</script>
@endsection