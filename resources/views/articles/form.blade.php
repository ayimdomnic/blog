<div class="form-group">

  {!! Form::label('title', 'Title:') !!}
  {!! Form::text('title', null , ['class' => 'form-control']) !!}

</div>

<div class="form-group">

  {!! Form::label('body', 'Body:') !!}
  {!! Form::textarea('body', null , ['class' => 'form-control']) !!}

</div>

<div class="form-group">

  {!! Form::label('published_at', 'Publish on:') !!}

<!--  {!!  Form::date('published_at', \Carbon\Carbon::now()) !!} -->
   {!! Form::input('date' , 'published_at', date('Y-m-d') , ['class' => 'form-control']) !!}

</div>

<div class="form-group">
  {!! form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}

</div>
