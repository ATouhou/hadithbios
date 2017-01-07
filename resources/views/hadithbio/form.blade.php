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
        <div class="form-group">
            <label class="col-sm-2 control-label">Location:</label>

            <div class="col-sm-10"><input type="text" class="form-control" id="us2-address"/></div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Radius:</label>

            <div class="col-sm-10"><input type="text" class="form-control" id="us2-radius"/></div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="us2">Map</label>
            <div class="col-sm-10" id="us2" style="width: 500px; height: 400px;"></div>
        </div>           
        <div class="clearfix">&nbsp;</div>
        <div class="m-t-small">
            <label class="p-r-small col-sm-2 control-label">Lat.:</label>

            <div class="col-sm-2"><input type="text" class="form-control" style="width: 110px" id="us2-lat"/>
            </div>
            <label class="p-r-small col-sm-2 control-label">Long.:</label>

            <div class="col-sm-2"><input type="text" class="form-control" style="width: 110px" id="us2-lon"/>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="form-group" >
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="submit"/>Submit</button>
                <a href="{{ URL::to('home') }}" class="btn btn-default" role="button">Back To List</a>                   
            </div>
        </div>
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>        
    </form>
</div>
<script>
    $('#us2').locationpicker({
        location: {latitude: 46.15242437752303, longitude: 2.7470703125},
        radius: 300,
        inputBinding: {
            latitudeInput: $('#us2-lat'),
            longitudeInput: $('#us2-lon'),
            radiusInput: $('#us2-radius'),
            locationNameInput: $('#us2-address')
        },
        enableAutocomplete: true
    });
</script>
@stop