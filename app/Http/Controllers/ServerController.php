<?php

namespace App\Http\Controllers;

use App\Models\Server;
use Illuminate\Http\Request;

class ServerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return "selam";
        $query = Server::query();

        // Zorluk seviyesine göre filtreleme
        if ($request->has('zorluk')) {
            $query->where('zorluk', $request->zorluk);

            $servers = $query->paginate(12);
            return view('servers.index', compact('servers'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Server $server)
    {
        return view('servers.show', compact('server'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
