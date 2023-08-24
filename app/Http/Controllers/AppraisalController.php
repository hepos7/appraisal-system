<?php

namespace App\Http\Controllers;

use App\Models\Appraisal;
use App\Http\Requests\StoreAppraisalRequest;
use App\Http\Requests\UpdateAppraisalRequest;

class AppraisalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $appraisals=Appraisal::where('user_id',$id)->get();
        return view('appraisal.index')->with([
            'appraisals' =>$appraisals,
            'user_id' =>$id
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $appraisal=Appraisal::where('user_id',$id)
        ->where('year',date("Y"))
        ->first();
        return view('appraisal.create')->with(['user_id' =>$id,'appraisal'=>$appraisal]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAppraisalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAppraisalRequest $request,$id)
    {
        $credentials = $request->validated();

        $check=Appraisal::where('user_id',$id)
        ->where('year',date("Y"))
        ->first();

        if($check==null){
            $appraisal =Appraisal::create([
                'user_id' =>$id,
                'year' => date("Y"),
                'h1' => $request->get('h1'),
                'h2' => $request->get('h2'),               
            ]);
            $msg='appraisal created successfully';
        }else{
            $appraisal =$check->update([
                'h1' => $request->get('h1') ?? $check->h1,
                'h2' => $request->get('h2') ?? $check->h2,
            ]);
            $msg='appraisal updaed successfully';
        }
        
        return redirect()->route('appraisal',['id' =>$id])
                        ->with([
                            'success'=>$msg
                        ]);
    }


}
