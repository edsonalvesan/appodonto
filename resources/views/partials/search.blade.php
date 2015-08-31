{!! Form::open(['class' => 'well well-sm', 'method' => 'GET']) !!}
<div class="input-group">
    {!! Form::text('search', $search, ['class' => 'form-control input-sm pull-right','style'=>'width: 250px', 'placeholder' => 'Pesqusiar...']) !!} 
        <div class="input-group-btn">
            <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
    </div>
</div>
{!! Form::close() !!}