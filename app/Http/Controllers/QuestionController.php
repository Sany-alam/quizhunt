<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\question;

class QuestionController extends Controller
{
    public function index()
    {
        return view('question');
    }

    public function add_Question(Request $req)
    {
        // file_put_contents("txt.txt",$req->all());
        question::create([
            'question'=>$req->question,
            'option_1'=>$req->option1,
            'option_2'=>$req->option2,
            'option_3'=>$req->option3,
            'option_4'=>$req->option4,
            'correct_option'=>$req->coption,
        ]);
    }

    public function show_Question()
    {
        $query = question::get();
        $data = "";
        $no = 1;
        foreach ($query as $row) {
            $data .='
            <tr>
                <td>'.$no.'</td>
                <td>'.$row->question.'</td>
                <td>'.$row->option_1.'</td>
                <td>'.$row->option_2.'</td>
                <td>'.$row->option_3.'</td>
                <td>'.$row->option_4.'</td>
                <td>Option '.$row->correct_option.'</td>
                <td><button onclick="delQue('.$row->id.')" class="btn btn-icon btn-hover btn-sm btn-rounded">
                    <i class="anticon anticon-delete"></i>
                </button></td>
            </tr>';
            $no++;
        }
        echo $data;
    }

    public function delete_Question(Request $req)
    {
        question::where('id',$req->queid)->delete();
    }
}
