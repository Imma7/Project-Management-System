@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
    	<div class="col-md-12">
    		<h3> New Proposal </h3>
    	</div>
    </div>

    <form action="{{route('proposal.store')}}" method="post">
      @csrf
      <div class="row">
        <div class="col-md-12">
          <strong>Name :</strong>
          <input type="text" name="name" class="form-control" placeholder="Name">
        </div>

        <div class="col-md-12">
          <strong>Reference Number :</strong>
          <textarea class="form-control" placeholder="Reference No" name="ref_no" rows="8" cols="80"></textarea>
        </div>

        <div class="col-md-12">
          <strong>Client :</strong>
          <input type="text" name="client" class="form-control" placeholder="Client">
        </div>

        <div class="col-md-12">
          <strong>Description :</strong>
          <textarea class="form-control" name="description" rows="8" cols="80"></textarea>
        </div>

        <div class="col-md-12">
          <strong>Date :</strong>
          <input type="text" name="date" class="form-control" placeholder="YY-MM-DD">
        </div>

        <div class="col-md-12">
          <strong>Budget :</strong>
          <textarea class="form-control" placeholder="Budget" name="budget" rows="8" cols="80"></textarea>
        </div>

        <br><br>
        <div class="col-md-12">
          <a href="{{route('proposal.index')}}" class="btn btn-sm btn-primary">Back</a>
          <button type="submit" class="btn btn-sm btn-danger">Submit Proposal</button>
        </div>

      </div>
    </form>


  </div>