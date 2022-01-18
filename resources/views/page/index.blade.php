@extends('layout.app')

@section('content')
  
 @include('page.accueil')
 @include('page.projet')
 @include('page.contact')
 
 @include('page.service')
 {{-- @include('page.ouvrage') --}} 

   

    {{-- modal --}}

 @include('page.login') 
 @include('page.register')


@endsection