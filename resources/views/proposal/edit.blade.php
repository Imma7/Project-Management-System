@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Update Proposal</h3>
      </div>
    </div>

    <form action="{{route('proposal.update',$proposal->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-12">
          <strong>Name :</strong>
          <input type="text" name="name" class="form-control" value="{{$proposal->name}}">
        </div>

        <div class="col-md-12">
          <strong>reference No :</strong>
          <input type="text" name="ref_no" class="form-control" value="{{$proposal->ref_no}}">
        </div>

        <div class="col-md-12">
          <strong>Client :</strong>
          <input type="text" name="client" class="form-control" value="{{$proposal->client}}">
        </div>

        <div class="col-md-12">
          <strong>Description :</strong>
          <textarea class="form-control" name="description" rows="4" cols="80">{{$proposal->description}}</textarea>

        </div>

        <div class="col-md-12">
          <strong>Date :</strong>
          <input type="text" name="date" class="form-control" value="{{$proposal->date}}">
        </div>

        <div class="col-md-12">
          <strong>Budget :</strong>
          <input type="text" name="budget" class="form-control" value="{{$proposal->budget}}">
        </div>

        <div class="col-md-12">
          <a href="{{route('proposal.index')}}" class="btn btn-sm btn-success">Back</a>

          <button type="submit" class="btn btn-sm btn-primary">Update Proposal</button>
        </div>
      </div>
    </form>
  </div>
@endsection