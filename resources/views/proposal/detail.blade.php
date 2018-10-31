@extends('layouts.app')
@section('content')
 	<div class="container">
	    <div class="row">
	      <div class="col-md-12">
	        <h3>View Proposal</h3>
	        <hr>
	      </div>
	    </div>

	    <div class="row">
	    	<div class="col-md-12">
	    		<div class="form-group"> 
	    			NAME : {{$proposal->name}}
	    		</div>
	    	</div>

	    	<div class="col-md-12">
	    		<div class="form-group"> 
	    			REFERENCE NO : {{$proposal->ref_no}}
	    		</div>
	    	</div>

	    	<div class="col-md-12">
	    		<div class="form-group"> 
	    			CLIENT : {{$proposal->client}}
	    		</div>
	    	</div>

	    	<div class="col-md-12">
	    		<div class="form-group"> 
	    			DESCRIPTION : {{$proposal->description}}
	    		</div>
	    	</div>

	    	<div class="col-md-12">
	    		<div class="form-group"> 
	    			DATE : {{$proposal->date}}
	    		</div>
	    	</div>

	    	<div class="col-md-12">
	    		<div class="form-group"> 
	    			BUDGET : {{$proposal->budget}}
	    		</div>
	    	</div>

	    	<div class="col-md-12">
	        <a href="{{route('proposal.index')}}" class="btn btn-sm btn-success">Back</a>
	      	</div>

	    </div>
	</div>
@endsection



