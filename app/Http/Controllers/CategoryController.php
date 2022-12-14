<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $data = Category::all();
        return view('admin.post.category.index',[
            'all_data' => $data,
        ]);
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
        // return $request->all();
        $this-> validate($request, [
            'name'=> 'required'
        ]);

        Category::create([
            'name' => $request->name,
            'slug' => str::slug($request->name),
        ]);
        return redirect()->route('category.index')->with('success', 'Category added successfully');
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
        // echo $id;
        $delete_date = Category::find($id);
        $delete_date-> delete();
        return redirect()->back()->with('confirm', 'Delete Data successfully.');
    }
    

    public function StatusUpdateInActive($id){

        // echo  $id;
        $status_update = Category::find($id);
        $status_update ->status = false;
        $status_update-> update();
    }


    public function StatusUpdateActive($id){

        // echo  $id;
        $status_update = Category::find($id);
        $status_update ->status = true;
        $status_update-> update();
    }
}

