<?php

class MonkeysController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /monkeys
	 *
	 * @return Response
	 */
	public function index()
	{
		$monkeys = Monkey::all();
		return Response::json($monkeys->toArray());
	}


	/**
	 * Store a newly created resource in storage.
	 * POST /monkeys
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 * PUT /monkeys/{id}
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
	 * DELETE /monkeys/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}