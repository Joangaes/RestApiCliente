<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $client;
    public function __construct(){
        $this->client = new Client(['headers' => ['Accept' => 'application/json']]);
    }


    public function index()
    { 
        $res = $this->client->get('http://localhost:8080/movies');
        $data = json_decode($res->getBody(),true);
        return view('movies.index')->with(['data'=>$data]);
    }

    public function create(){return view('movies.create');}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movie = new Movie($request->all());
        $json = json_encode($movie->convertToTypes());
        //dd($json);
        $obj = $this->client->post('http://localhost:8080/movies',[
            'body'=>json_encode($movie->convertToTypes()),
            'headers' => [
            'Accept'     => 'application/json',
            'Content-Type'     => 'application/json',
            ]
        ]);

        return redirect()->route('movies.index');
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
        $res = $this->client->get('http://localhost:8080/movies/'.$id);
        $data = json_decode($res->getBody(),true);
        $data['id']= $id;
        return view('movies.edit')->with($data);
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
        $movie = new Movie($request->all());
        $json = json_encode($movie->convertToTypes());
        //dd($json);
        $obj = $this->client->put('http://localhost:8080/movies/'.$id,[
            'body'=>json_encode($movie->convertToTypes()),
            'headers' => [
            'Accept'     => 'application/json',
            'Content-Type'     => 'application/json',
            ]
        ]);

        return redirect()->route('movies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->client->delete('http://localhost:8080/movies/'.$id,[
            'headers' => [
            'Accept'     => 'application/json',
            'Content-Type'     => 'application/json',
            ]
        ]);

        return redirect()->route('reviews.index');
    }
}
