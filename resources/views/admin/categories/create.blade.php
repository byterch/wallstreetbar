<form method="post" action="/categories/save">
    {!! csrf_field() !!}
    Code <input type="text" name="code">
    Name <input type="text" name="name">
    <input type="submit" value="Create">
</form>