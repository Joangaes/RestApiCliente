<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Review;
use Carbon\Carbon;
class ReviewController extends Controller
{
    private $client;
    public function __construct(){
        $this->client = new Client();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res = $this->client->get('http://localhost:8080/reviews');
        $data = json_decode($res->getBody(),true);
        return view('reviews.index')->with(['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $review = new Review($request->all());
        $this->client->post('http://localhost:8080/reviews',[
            'body'=>json_encode($review->convertToTypes()),
            'headers' => [
            'Accept'     => 'application/json',
            'Content-Type'     => 'application/json',
            ]
        ]);

        return redirect()->route('reviews.index');
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
        $res = $this->client->get('http://localhost:8080/reviews/'.$id);
        $data = json_decode($res->getBody(),true);
        $data['id']= $id;
        $data['date'] = Carbon::parse($data['date'])->format('Y-m-d');
        return view('reviews.edit')->with($data);
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
        $review = new Review($request->all());
        $this->client->put('http://localhost:8080/reviews/'.$id,[
            'body'=>json_encode($review->convertToTypes()),
            'headers' => [
            'Accept'     => 'application/json',
            'Content-Type'     => 'application/json',
            ]
        ]);

        return redirect()->route('reviews.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
