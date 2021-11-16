<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $code = 190313015;
    private $name = Gifahri;
    private $course, $task, $quiz, $mid_term, $final, $grade;

    public function myCourse($course, $task, $quiz, $mid_term, $final){

        $this->course = $course;
        $this->task = $task;
        $this->quiz = $quiz;
        $this->mid_term = $mid_term;
        $this->final = $final;
        $this->grade = $this->calculateGrade();
        return view('student/my_view',['code'=>$this->code,'name'=>$this->name,'course'=>$this->course,'task'=>$this->task
        ,'quiz'=>$this->quiz,'mid_term'=>$this->mid_term,'final'=>$this->final,'grade'=>$this->grade]);
    }
        public function calculateGrade()
            $nilaiakhir = ($this->task*0,1)+($this->quiz*0,1)+($this->mid_term*0,3)+($this->final*0,5);
            return $nilaiakhir;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
