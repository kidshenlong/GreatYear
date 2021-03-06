<?php namespace App\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: pattem92
 * Date: 22/05/2015
 * Time: 11:09
 */


use App\Artist;

class ArtistsController extends ApiController
{

    public function index()
    {
        return Artist::with('albums')->get();
    }

    public function show($id)
    {
        return Artist::find($id)->with('albums')->get();
    }
}