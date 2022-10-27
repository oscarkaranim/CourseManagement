<?php

namespace App\Http\Controllers;

use App\Models\DegreeProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DegreeProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $degreeprogramlists =  DB::table('degree_programs')->latest() ->get();

         return view('degreeprogramviews/degreeprogramlistview', ['degreeprogramlists'=>$degreeprogramlists]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('degreeprogramviews/addnewprogram');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $prog_title_exist = DegreeProgram::where('degree_program_title', '=', $request->Input('degree_program_title'))->first();
        $ucas_code_exist = DegreeProgram::where('ucas_code', '=', $request->Input('ucas_code'))->first();

        if ($prog_title_exist != null or $ucas_code_exist != null) {

            return back()
                ->withInput()
                ->with('msg','A Similar Degree Program Exist');
        }

        $degreeprogramcreate = DegreeProgram::create($request->all());

        return view('degreeprogramlistview');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DegreeProgram  $degreeProgram
     * @return \Illuminate\Http\Response
     */
    public function show(DegreeProgram $degreeProgram)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DegreeProgram  $degreeProgram
     * @return \Illuminate\Http\Response
     */
    public function edit(DegreeProgram $degreeProgram)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DegreeProgram  $degreeProgram
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DegreeProgram $degreeProgram)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DegreeProgram  $degreeProgram
     * @return \Illuminate\Http\Response
     */
    public function destroy(DegreeProgram $degreeProgram)
    {
        //
    }
}
