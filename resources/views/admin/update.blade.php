          @if(Auth::user())
         @else

<?php
    return view('layouts/home');

    ?>

    @endif

 @extends('admin.layouts.app')

@section('main-content')



{!! Form::model($lensas,['method'=>'PATCH','action'=>['lensaController@updateLensa',$lensas->id]]) !!}
<div class="form-group">
{{-- 	{!! form:label('id','ID buku')!!} --}}
{{-- 	{!! form:text('ID',null,array('class' => 'form-control','placeholder'=>'ID Buku'))!!} --}}
	

</div>
@endsection
