<?php

class OptController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$opts = Opt::all();

        // load the view and pass the nerds
        return View::make('opts.index')
            ->with('opts', $opts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('opts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
            'name'       => 'required',
            'type'		 => 'required',
            'cause'		 => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('opts/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $opt = new Opt;
            $opt->name       = Input::get('name');
            $opt->type       = Input::get('type');
            $opt->cause      = Input::get('cause');
            $opt->save();

            // redirect
            Session::flash('message', 'Successfully created opt!');
            return Redirect::to('opts');
        }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
