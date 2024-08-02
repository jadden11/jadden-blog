@extends('layouts.app')
@section('title', 'User')

@section('content')
<h1>user</h1>
{{-- FEATURE SEARCH --}}
<div class="row">
 <div class="col-lg-12">
  <form class="d-flex float-right" method="GET" action="/pencarianuser"> 
   <input class="form-control me-2" type="search" name="cari" type="search" placeholder="Search" aria-label="Search">
   <button class="btn btn-outline-primary" type="submit">Search</button>
 </form>
 </div>
</div>
    {{-- tables --}}
<table class="table table-striped mt-4">
 <thead>
   <tr>
     <th scope="col">#</th>
     <th scope="col">Name User</th>
     <th scope="col">Email user</th>
   </tr>
 </thead>
 <tbody>
@foreach ($user as $no => $u)
<tr>
 <th scope="row">{{ $user->firstItem() + $no }}</th>
 <td>{{ $u->name }} </td>
 <td>{{ $u->email }}
  <a href="{{ url('/delete-user',$u->id) }}" class="btn btn-danger btn-sm float-right">Delete</a>
</td>
</tr>
@endforeach
 </tbody>
</table>
<span class="float-right">{{ $user->links('pagination::bootstrap-4') }}</span>

@endsection