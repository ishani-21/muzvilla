@extends('layouts.master')
@push('css')
   <style>
      .error {
         color: red;
      }
   </style>
@endpush
@section('content')
<div class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-8">
            <div class="card">
               <div class="card-header card-header-primary">
                  <h4 class="card-title">Update Package</h4>
                  <p class="card-category">Complete your Package</p>
               </div>
               <div class="card-body">
               <!-- <form> -->
                  {!! Form::open(['route'=> array('admin.premium.update',$pre->id), 'id' => 'package_form']) !!}
                  @csrf
                  @method('put')
                  <!-- ------------------------------------ Name --------------------------------- -->
                  <input type="hidden" name="id" value="{{$pre->id}}">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="form-group">
                           <label class="bmd-label-floating">{{ Form::label('name','Package Name')}}</label>
                           {{Form::text('name',$pre['name'],['class'=>'form-control'])}}
                           @error('name')
                           <span role="alert">
                              <strong style="color:red;">{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                     </div>
                     <!-- -------------------------------------- Save ------------------------------------ -->
                     <div class="col-md-4">
                        <div class="form-group">
                           <label class="bmd-label-floating">{{ Form::label('save','Save')}}</label>
                           {{Form::text('save',$pre['save'],['class'=>'form-control'])}}
                           @error('save')
                              <span role="alert">
                                 <strong style="color:red;">{{ $message }}</strong>
                              </span>
                           @enderror
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <!-- -------------------------------------- Six Month ------------------------------------ -->
                     <div class="col-md-4">
                        <div class="form-group">
                           <label class="bmd-label-floating">{{ Form::label('six_months','Six Month')}}</label>
                           {{Form::text('six_months',$pre['six_months'],['class'=>'form-control'])}}
                           @error('six_months')
                              <span role="alert">
                                 <strong style="color:red;">{{ $message }}</strong>
                              </span>
                           @enderror
                        </div>
                     </div>
                     <!-- ----------------------------------- Three Month ------------------------------------- -->
                     <div class="col-md-4">
                        <div class="form-group">
                           <label class="bmd-label-floating">{{ Form::label('three_months','Three Month')}}</label>
                           {{Form::text('three_months',$pre['three_months'],['class'=>'form-control'])}}
                           @error('three_months')
                              <span role="alert">
                                 <strong style="color:red;">{{ $message }}</strong>
                              </span>
                        @enderror
                        </div>
                     </div>
                     <!-- ----------------------------------- One Month ------------------------------------- -->
                     <div class="col-md-4">
                        <div class="form-group">
                           <label class="bmd-label-floating">{{ Form::label('one_months','One Month')}}</label>
                           {{Form::text('one_months',$pre['one_months'],['class'=>'form-control'])}}
                           @error('one_months')
                           <span role="alert">
                              <strong style="color:red;">{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <!-- ----------------------------------- Try Days ------------------------------------- -->
                     <div class="col-md-4">
                        <div class="form-group">
                           <label class="bmd-label-floating">{{ Form::label('try_days','Try Days')}}</label>
                           {{Form::text('try_days',$pre['try_days'],['class'=>'form-control'])}}
                           @error('try_days')
                              <span role="alert">
                                 <strong style="color:red;">{{ $message }}</strong>
                              </span>
                        @enderror
                        </div>
                     </div>
                  </div>
                  {{Form::submit('Update Package', ['class'=>'btn btn-primary pull-right'])}}
                  {!!Form::close()!!}
                  <div class="col-md-8">
                     <a href="{{ route('admin.premium.index')}}" class="btn btn-primary pull-left">Cancel</a>
                  </div>
                  <div class="clearfix"></div>
               <!-- </form> -->
               </div>
            </div>
            <!-- <div class="card">
               <div class="card-header card-header-primary">
                     <a href="{{ route('admin.premium.index')}}"><h4 class="card-title"><i class="fa fa-hand-o-left" aria-hidden="true"></i> {{ trans('Back')}}</h4></a>
               </div>
            </div> -->
         </div>
      </div>
   </div>
</div>
@endsection
@push('js')
<script>
   $(document).ready(function(){
      $('#package_form').validate({
         rules: {
            name: {
               required: true,
            },
            save: {
               required: true,
            },
            six_months: {
               required: true,
            },
            three_months: {
               required: true,
            },
            one_months: {
               required: true,
            },
            try_days: {
               required: true,
            }
         },
         errorElement: 'span',
         messages: {
            name: 'Please Enter Package Name !',
            save: 'Please Enter Persantage for save many !',
            six_months: 'Please Enter six Months Package Price !',
            three_months: 'Please Enter three Months Package Price !',
            one_months: 'Please Enter one Months Package Price !',
            try_days: 'Please Enter day for free trial !',
         }
      });
   });
</script>
@endpush