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
    public function apiindex()
    {
        $degreeprogramlists =  DB::table('degree_programs')->latest() ->get();
        return $degreeprogramlists;
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

        return redirect()->route('degreeprogramindex');

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
    public function update($id)
    {
        $degreeprogram = DB::table('degree_programs')->where('id', $id)->first();

        return view('degreeprogramviews/degreeprogramupdate', ['degreeprogram' => $degreeprogram]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DegreeProgram  $degreeProgram
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $delete_program = DegreeProgram::where('id',$id)->first();
        $delete_program->delete();
        return redirect()->route('degreeprogramindex');
    }
    public function addnewprogrampost_update(Request $request,$id)
    {
        $degree_program_result = DegreeProgram::where('id', $id)->first();

        $degree_program_result->degree_program_title= $request->input('degree_program_title');
        $degree_program_result->degree_qualification= $request->input('degree_qualification');
        $degree_program_result->ucas_code= $request->input('ucas_code');
        $degree_program_result->degree_program_description= $request->input('degree_program_description');
        $degree_program_result->keywords= $request->input('keywords');

        $degree_program_result->save();


        return redirect()->route('degreeprogramindex');
    }
}
