Edit view
<form action="{{ action('BookController@update', ['id' => $book->id]) }}" method="post">
{{ csrf_field() }}
<div class="form-group prl-5">
{!! Form::label('title', 'Book title') !!}
{!! Form::text('title', $book->title) !!}
</div>

<div class="form-group prl-5">
{!! Form::label('year', 'Year') !!}
{!! Form::text('year', $book->year) !!}
</div>

<div class="form-group prl-5">
{!! Form::submit('Save') !!}
</div>

</form>