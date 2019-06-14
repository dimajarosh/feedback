<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback as F;

class Feedback extends Controller
{
    public function index() {
    	// return F::all();
    	$param = [F::paginate(3), F::sum_rating(), F::counts(), F::arr_statist()];
    	// $feedbacks = F::paginate(2);
    	return view('feedback', compact('param'));
    }

    public function post(Request $request) {
    	// echo 123;
    	// return;
    	$request->validate([
    		'name' => 'required|string',
    		'email' => 'required|email',
    		'message' => 'required',
    		'rating' => 'required|integer|max:5|min:1',
    		'file' => 'max:10000|mimes:jpeg,jpg,png'

    	]);
    	if($request->hasFile('file')) {
    		$name_file = time().'_'.$request->file('file')->getClientOriginalName();
    		$file = $request->file('file');
			$file->move(public_path('photo'), $name_file);	

    	} else {
    		$name_file = '';
    	}

    	F::create([
				'name' => $request->input('name'),
				'email' => $request->input('email'),
				'description' => $request->input('message'),
				'rating' => $request->input('rating'),
				'photo' => $name_file]);

    	$param = [F::paginate(3), F::sum_rating(), F::counts(), F::arr_statist()];
    	// $feedbacks = F::paginate(2);
    	return view('feedback', compact('param'));

    	// $request->move(storage_path('photo'), time().'_'.$request->file('file')->getClientOriginalName());
    	// dd($request->file('file'));
    }
}
