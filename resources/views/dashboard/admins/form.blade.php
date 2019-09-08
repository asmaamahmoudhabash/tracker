@include('flash::message')
@include('partials.validation-errors')



<div class="form-group row">
    <label class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
        {{Form::text('name',null,[
        'class'=>'form-control',
        'id'=>'name',
        'placeholder'=>'Enter your name',

      ])}}
    </div>
</div>




<div class="form-group row">
    <label class="col-sm-2 col-form-label"></label>
    <div class="col-sm-10">
        <h5>contacts</h5>
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
        {{Form::text('address',null,[
     'class'=>'form-control',
     'id'=>'address',
     'placeholder'=>'Enter your Address',

   ])}}
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
        {{Form::text('email',null,[
      'class'=>'form-control',
      'id'=>'email',
      'placeholder'=>'Enter your email',

    ])}}
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Phone</label>
    <div class="col-sm-10">
    {{Form::text('phone',null,[
      'class'=>'form-control',
      'id'=>'phone',
      'placeholder'=>'Enter your phone',

    ])}}

    </div>
</div>




<div class="form-group row">
    <label class="col-sm-2 col-form-label">Upload   Main Image</label>
    <div class="col-sm-10">
        {{Form::file('image',[
               'class'=>'form-control',
              'id'=>'image',

              ])}}
        @if($model->image=='')
        @else
            <img class="user-img img-circle" src="{{asset($model->image)}}" alt="user-img" style="width: 20%">
        @endif
    </div>

</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">password</label>
    <div class="col-sm-10">
    {{Form::password('password',[
      'class'=>'form-control',
      'id'=>'password',
      'placeholder'=>'Enter your password',

    ])}}

</div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label"> Password Confirmation</label>
    <div class="col-sm-10">
    {{Form::password('password_confirmation',[
      'class'=>'form-control',
      'id'=>'password_confirmation',
      'placeholder'=>'Enter your password_confirmation',

    ])}}

</div>
</div>



<div class="form-group row">
    <label class="col-sm-2 col-form-label">Status</label>
    <div class="col-sm-10">
        {{

           Form::select('status',
            ['0' => 'unactive', '1' => 'active'], null,
            ['placeholder' => 'Select Status',
            'class'=>'form-control',
            'id'=>'status',


            ])
           }}

    </div>
</div>








