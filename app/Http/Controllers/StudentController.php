<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function googlePieChart()

    {

        $data = DB::table('students')

           ->select(

            DB::raw('course as course'),

            DB::raw('count(*) as number'))

           ->groupBy('course')

           ->get();

        $array[] = ['Course', 'Number'];

        foreach($data as $key => $value)

        {

          $array[++$key] = [$value->course, $value->number];

        }

        return view('google-pie-chart')->with('course', json_encode($array));

    }

}
