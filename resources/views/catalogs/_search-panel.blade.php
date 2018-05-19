<div class="panel panel-default" style="background-color:powderblue;">
    <div class="panel-heading"style="background-color:powderblue;">
        <h3 class="panel-title">Cari Poduk</h3>
    </div>

    <div class="panel-body">
        {!! Form::open(['url'=> 'catalogs', 'method'=>'get']) !!}
            <div class="form-group {!! $errors->has('q') ? 'has-error' : '' !!}">
                {!! Form::label('q', 'Apa Yang Kamu Cari ?') !!}
                {!! Form::text('q', $q, ['class'=>'form-control']) !!}
                {!! $errors->first('q', '<p class="help-block">:message</p>') !!}
            </div>

            {!! Form::hidden('cat', $cat) !!}
            {!! Form::submit('Cari', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
