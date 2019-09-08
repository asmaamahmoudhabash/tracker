@include('flash::message')
@include('partials.validation-errors')
@php
    $projects = App\Models\Project::pluck('name', 'id');


@endphp

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-10">
        {{Form::text('title',null,[
        'class'=>'form-control',
        'id'=>'title',

    ])}}
    </div>
</div>


<div class="form-group row">
    <label class="col-sm-2 col-form-label">Body</label>
    <div class="col-sm-10">
        {{Form::textarea('body',null,[
        'class'=>'form-control',
        'id'=>'body',

    ])}}
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Project</label>
    <div class="col-sm-10">
        {{Form::select('project_id',$projects,null,[
        'class'=>'form-control',
        'id'=>'project_id',
        'placeholder'=>'Select  Project',
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
    <img class="user-img img-circle" src="{{url($model->image)}}" alt="user-img" style="width: 20%">
    @endif
</div>

</div>






<div class="form-group row">
    <label class="col-sm-2 col-form-label">Published At</label>
    <div class="col-sm-10">
        {{Form::date('published_at',null,[
        'class'=>'form-control',


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