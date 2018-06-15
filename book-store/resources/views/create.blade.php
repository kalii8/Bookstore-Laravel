Create view
<form action="{{ action('BookController@store') }}" method="post">
FORM

{{ csrf_field() }}
<div class="form-group prl-5">
{!! Form::label('title', 'Book title') !!}
{!! Form::text('title', '') !!}
</div>

<div class="form-group prl-5">
{!! Form::label('year', 'Year') !!}
{!! Form::text('year', '') !!}
</div>

<select name="categories[]">
    @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
</select>

<div class="form-group prl-5">
{!! Form::submit('Save') !!}
</div>



</form>