<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proposal;
use Illuminate\Support\Facades\DB;

class ProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Display all proposals
        // $proposals = Proposal::all()->paginate(5);
        // return view('proposal.index', compact('proposals'))
        //           ->with('i', (request()->input('page',1) -1)*5);

        // $user = DB::table('proposals')->get()->first;
        // return view('proposal.index', ['proposals' => $user]);

        $data = Proposal::all();
        return view('proposal.index', ['proposals' => $data]);
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Create proposals
        return view('proposal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'ref_no'=>'required',
            'client'=>'required',
            'description'=>'required',
            'date'=>'required',
            'budget'=>'required'
        ]);

        Proposal::create($request->all());
        return redirect()->route('proposal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $proposal = Proposal::find($id);
        return view('proposal.detail', compact('proposal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $proposal = Proposal::find($id);
        return view('proposal.edit', compact('proposal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Update proposal
        $request->validate([
            'name'=>'required',
            'ref_no'=>'required',
            'client'=>'required',
            'description'=>'required',
            'date'=>'required',
            'budget'=>'required'
        ]);

        $proposal = Proposal::find($id);
        $proposal->name = $request->get('name');
        $proposal->ref_no = $request->get('ref_no');
        $proposal->client = $request->get('client');
        $proposal->description = $request->get('description');
        $proposal->date = $request->get('date');
        $proposal->budget = $request->get('budget');
        $proposal->save();
        return redirect()-route('proposal.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete proposal
        $proposal = Proposal::find($id);
        $proposal->delete();
        return redirect()->route('proposal.index');
    }
}
