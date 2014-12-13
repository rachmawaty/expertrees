<?php

class ClonController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$clons = Clon::all();

        // load the view and pass the nerds
        return View::make('clons.index')
            ->with('clons', $clons);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('clons.create');
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
            'description'=> 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('clons/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $clon = new Clon;
            $clon->name       = Input::get('name');
            $clon->description= Input::get('description');
            $clon->save();

            // redirect
            Session::flash('message', 'Successfully created clone!');
            return Redirect::to('clons');
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
		$clon = Clon::find($id);

        // show the view and pass the nerd to it
        return View::make('clons.show')
            ->with('clon', $clon);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$clon = Clon::find($id);

        // show the view and pass the nerd to it
        return View::make('clons.edit')
            ->with('clon', $clon);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
            'name'       => 'required',
            'description'=> 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('clons/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $clon = Clon::find($id);
            $clon->name       = Input::get('name');
            $clon->description= Input::get('description');
            $clon->save();

            // redirect
            Session::flash('message', 'Successfully updated clon!');
            return Redirect::to('clons');
        }
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
