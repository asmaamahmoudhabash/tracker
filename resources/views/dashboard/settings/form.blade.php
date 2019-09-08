 @include('flash::message')
@include('partials.validation-errors')


<style>
    .error {
        color: #ff2055;
        margin-left: 5px;
        font-size: 16px;
    }
    label.error {
        display: inline;
    }

</style>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Site Name</label>
    <div class="col-sm-10">
        {{Form::text('site_name',null,[
        'class'=>'form-control',
        'id'=>'site_name_form',

    ])}}
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Site copy Right</label>
    <div class="col-sm-10">
        {{Form::text('copy_right',null,[
        'class'=>'form-control',
        'id'=>'copy_right',

    ])}}
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Site Description</label>
    <div class="col-sm-10">
        {{Form::textarea('site_description',null,[
        'class'=>'form-control',
        'id'=>'site_description_form',

    ])}}
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Site Email</label>
    <div class="col-sm-10">
        {{Form::text('email',null,[
        'class'=>'form-control',
        'id'=>'email',

    ])}}
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Site  Address</label>
    <div class="col-sm-10">
        {{Form::text('address',null,[
        'class'=>'form-control',
        'id'=>'address_form',

    ])}}
    </div>
</div>
