<?php

namespace App\Http\Controllers;

use App\Models\MatchStr;
use App\Models\MatchString;
use Illuminate\Http\Request;
use App\Http\Requests\MatchRequest;
use App\Http\Services\MatchService;

class MatchStrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(MatchService $matchService)
    {
        $this->matchService = $matchService;   
    }

    public function index()
    {
        $response = $this->matchService->index();

        $data = [
            'data' => $response
        ];

        return view('match.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MatchRequest $request)
    {
        $response = $this->matchService->store($request->all());

        return redirect()->back()->with($response['status'], $response['message']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MatchStr  $matchStr
     * @return \Illuminate\Http\Response
     */
    public function edit(MatchString $matchStr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MatchStr  $matchStr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MatchString $matchStr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MatchStr  $matchStr
     * @return \Illuminate\Http\Response
     */
    public function destroy(MatchString $matchStr)
    {
        //
    }
}
