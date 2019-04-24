<form method="POST" action="{{ $class::route('destroy',$id) }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}


    <button type="submit" class="btn btn-danger delete-user"  onclick="return confirm('are you sure?');">Delete</button>
</form>
<a href="{{ $class::route('edit',$id) }}" ><button class="btn btn-warning">edit</button></a>
