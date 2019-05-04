<form method="POST" action="{{ route('comment.delete',compact('id','type')) }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit" class="btn btn-danger delete-user"  onclick="return confirm('are you sure?');">Delete</button>
</form>
<form method="POST" action="{{ route('comment.update',compact('id','type')) }}">
    {{ csrf_field() }}
    <button class="btn btn-warning">Approve</button>
</form>
