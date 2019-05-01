<form method="POST" action="{{ route('contactus.delete',$contactUs) }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}


    <button type="submit" class="btn btn-danger delete-user"  onclick="return confirm('are you sure?');">Delete</button>
</form>
<a href="{{ route('contactus.edit',$contactUs) }}" ><button class="btn btn-warning">reply</button></a>
