@extends('layouts.master')

@section('title', '- Listing of Bios')

@section('content')
<div class="container text-left">        
    <a href="{{ URL::to('home/input') }}" class="btn btn-primary" role="button">Add New Bio</a>
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Action</th>
        <th>Name</th>
        <th>Date Of Birth</th>
        <th>Date Of Death</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($hadithBios as $bio)
      <tr>
        <td><a href="{{ URL::to('home/input/' . $bio['id']) }}"><span class="glyphicon glyphicon-pencil">Edit</span></a></td>
        <td>{{ $bio['name'] }}</td>
        <td>{{ $bio['date_of_birth'] }}</td>
        <td>{{ $bio['date_of_death'] }}</td>
      </tr>
      @endforeach          
    </tbody>
    </table>    
</div>
@stop


