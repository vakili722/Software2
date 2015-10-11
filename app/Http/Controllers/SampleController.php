<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class SampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        return view('blank');
    }

    public function getFile()
    {
        return view('samples.file');
    }

    public function postFile(Request $request)
    {
        $this->validate($request, [
            'file1' => 'required',
        ]);
        if ($request->ajax()) {

        } else {
            Storage::put(time().'.jpg', file_get_contents($request->file('file1')));
        }
        Session::flash('success', ['Task was successful!']);
        return redirect()->action('SampleController@getFile');
    }
}
