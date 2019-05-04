<form method="POST" action="{{ route('admin.profile.delete',compact('userProfile')) }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit" class="btn btn-danger delete-user"  onclick="return confirm('are you sure?');">Delete</button>
</form>
<a href="{{ route('admin.profile.edit',compact('userProfile')) }}">
    <button class="btn btn-warning">edit</button>
</a>
