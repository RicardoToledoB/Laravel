@extends('layout')

@section('content')
<div class="container">
    

    <h1 class="page-header"> 
        {{ $title }}
    </h1>
    
    <table class="table table-hover table-striped">
        <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Biography</th>
            
        </thead>
        <tbody>
          @include('query.partials.list-users')
        </tbody>
    </table>
    </div>
@endsection
