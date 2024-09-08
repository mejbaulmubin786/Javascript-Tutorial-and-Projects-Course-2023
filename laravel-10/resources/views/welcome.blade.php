
@php
$associativeArray = array(
   
);
@endphp

@include('pages.header', ['names'=>$associativeArray]) 
<h1>Home page</h1>
@include('pages.footer') 
@includeIf('pages.content') 
@includeWhen(Condition Value, 'viewfile', ['status'=>'Hello'])

