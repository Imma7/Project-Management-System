@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"style=text-align:center><strong>PROPOSALS</strong></div>
                <a class="btn btn-md btn-primary" href="{{ route('proposal.create') }}"> Create Proposal </a>

                <div class="card-body">
                    <table class="table table-hover table-sm">
                        <tr> 
        
                            <th> Name </th>
                            <th> Reference No. </th>
                            <th> Client </th>
                            <th> Description </th>
                            <th> Date </th>
                            <th> Budget </th>
                        </tr>

                        @foreach ($proposals as $proposal)
                        <tr>
                            <td> {{$proposal->name}}</td>
                            <td> {{$proposal->ref_no}}</td>
                            <td> {{$proposal->client}}</td>
                            <td> {{$proposal->description}}</td>
                            <td> {{$proposal->date}}</td>
                            <td> {{$proposal->budget}}</td>
                            <td> <a class="btn btn-sm btn-primary" href=""> View </a> </td>
                            <td> <a class="btn btn-sm btn-success" href=""> Update </a> </td>
                            <td> <button type='submit' class="btn btn-sm btn-danger" > Delete </button> </td>

                            
                            
                        </tr>
                        @endforeach
                        
                    </table>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
