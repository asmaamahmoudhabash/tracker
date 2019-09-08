@include('flash::message')
@include('partials.validation-errors')
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
        {{Form::text('name',null,[
        'class'=>'form-control',
        'id'=>'name',

    ])}}
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
        {{Form::textarea('description',null,[
        'class'=>'form-control',
        'id'=>'description',

    ])}}
    </div>
</div>

