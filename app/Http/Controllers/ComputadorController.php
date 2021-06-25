<?php

namespace App\Http\Controllers;

use App\Models\Computador;
use Illuminate\Http\Request;

/**
 * Class ComputadorController
 * @package App\Http\Controllers
 */
class ComputadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $computadors = Computador::paginate();

        return view('computador.index', compact('computadors'))
            ->with('i', (request()->input('page', 1) - 1) * $computadors->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $computador = new Computador();
        return view('computador.create', compact('computador'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Computador::$rules);

        $computador = Computador::create($request->all());

        return redirect()->route('computadors.index')
            ->with('success', 'Computador created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $computador = Computador::find($id);

        return view('computador.show', compact('computador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $computador = Computador::find($id);

        return view('computador.edit', compact('computador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Computador $computador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Computador $computador)
    {
        request()->validate(Computador::$rules);

        $computador->update($request->all());

        return redirect()->route('computadors.index')
            ->with('success', 'Computador updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $computador = Computador::find($id)->delete();

        return redirect()->route('computadors.index')
            ->with('success', 'Computador deleted successfully');
    }
}
