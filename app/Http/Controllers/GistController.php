<?php

namespace App\Http\Controllers;

use App\Models\Gist;
use Exception;
use Illuminate\Http\Request;

class GistController extends Controller {
    /**
     * Display a listing of the gists.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return response()->json(Gist::all());
    }

    /**
     * Store a newly created gist in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        try {
            return response()->json(Gist::create($request->all()), 200);
        } catch (Exception $ex) {
            return response()->json([
                "error" => $ex->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified gist.
     *
     * @param  \App\Models\Book  $gist
     * @return \Illuminate\Http\Response
     */
    public function show(Gist $gist) {
        return response()->json($gist, 200);
    }

    /**
     * Update the specified gist in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gist  $gist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gist $gist) {
        try {
            $gist->update($request->all());
            return response()->json($gist, 200);
        } catch (Exception $ex) {
            return response()->json([
                "error" => $ex->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified gist from storage.
     *
     * @param  \App\Models\Gist  $gist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gist $gist) {
        try {
            $gist->delete();
            return response()->noContent();
        } catch (Exception $ex) {
            return response()->json([
                "error" => $ex->getMessage()
            ], 500);
        }
    }
}