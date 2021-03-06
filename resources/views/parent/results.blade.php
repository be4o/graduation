@extends('layouts.app')

@section('title')
Student Results
@endsection

@section('content')
<div class="container">
	<div class="row">
	  <div class="col-lm-12">
	  	<div class="student-info">
	        <h3>Name: {{ucwords($student->name)}} {{ucwords($student->parent->name)}}</h3>
	        <h3>grade: {{ucwords($student->grade)}}</h>	        
	    </div>
	    <table class="table table-hover">
	      <thead>
	        <tr>
	          <th>Month</th>
	          <th>Arabic</th>
	          <th>English</th>
	          <th>Math</th>
	          <th>Science</th>
	          <th>History</th>
	          <th>Arts</th>
	          <th>Computer</th>
	          <th>Total</th>
	        </tr>
	      </thead>
	        <tbody>
	        @foreach($results as $result)
	        	<tr>
	            <td>{{$result->type}}</td>
	            <td>{{$result->arabic}}</td>
	            <td>{{$result->english}}</td>
	            <td>{{$result->math}}</td>
	            <td>{{$result->science}}</td>
	            <td>{{$result->history}}</td>
	            <td>{{$result->arts}}</td>
	            <td>{{$result->computer}}</td>
	            <td>{{$result->arabic+ $result->english + $result->math + $result->science + $result->history + $result->arts + $result->computer}}</td>	            
	          </tr>
	        @endforeach	          
	          
	        </tbody>
	      </table>	      
	      
	  </div>
	 </div>
</div>
@endsection
