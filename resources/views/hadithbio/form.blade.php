@extends('layouts.master')

@section('title', '- Add a Bio')

@section('content')
<div class="container text-center">
    <form class="form-horizontal" role="form" action="{{ action('HomeController@postSave') }}" method="post">
        <div class="form-group" >
            <label class="control-label col-sm-2" for="name">Name of narrator / transmitter</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="name" value="{{ $row['name'] }}" />
            </div>                  
        </div>
        <div class="form-group" >
            <label class="control-label col-sm-2" for="date_of_birth">Date Of Birth</label>
            <div class="col-sm-10">
                <input class="form-control" type="date" name="date_of_birth" value="{{ $row['date_of_birth'] }}" />
            </div>                
        </div>
        <div class="form-group" >
            <label class="control-label col-sm-2" for="date_of_death">Date Of Death</label>
            <div class="col-sm-10">            
                <input class="form-control" type="date" name="date_of_death" value="{{ $row['date_of_death'] }}" />
            </div>                  
        </div>
        <div class="form-group" >
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="submit"/>Submit</button>
                <a href="{{ URL::to('home') }}" class="btn btn-default" role="button">Back To List</a>                   
            </div>
        </div>
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>        
    </form>
</div>
<div id="somecomponent" style="width: 500px; height: 400px;"></div>
<script>
$('#somecomponent').locationpicker();
</script>

@stop