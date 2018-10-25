<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use App\movieDetails;
use App\Imdb;
use App\Awards;
use App\Tomato;
use Carbon\Carbon;
class MovieDetailController extends Controller
{
    private $client;
    public function __construct(){
        $this->client = new Client(['headers' => [
            'Accept'     => 'application/json',
        ]]);
    }

    public function index()
    {
        $res = $this->client->get('http://localhost:8080/movieDetails');
        $data = json_decode($res->getBody(),true);
        return view('movieDetails.index')->with(['data'=>$data]);
    }
    public function create(){
        return view('movieDetails.create');}
    public function store(Request $request)
    {
        dd(1);
        $movieDetails = new MovieDetails($request->all());
        dd($movieDetails);
    }
    public function show($id)
    {
        DD(3);
    }
    public function edit($id)
    {
        $res = $this->client->get('http://localhost:8080/movieDetails/'.$id);
        $data = json_decode($res->getBody(),true);
        $data['id']= $id;
        $data['released'] = Carbon::parse($data['released'])->format('Y-m-d');
        $data['amount_of_actors'] = count($data['actors']);
        return view('movieDetails.edit')->with($data);
    }
    public function update(Request $request, $id)
    {
        $input = $request->all();
        //dd($input);
        $awards = new Awards($input);
        $imdb = new Imdb($input);
        $tomato = new Tomato($input);
        $movieDetails = new MovieDetails($input);
        $movieDetails['awards'] = $awards;
        $movieDetails['imdb'] = $imdb;
        $movieDetails['tomato'] = $tomato;
        $json = $movieDetails->convertPossibleToIntegers()->toJson();
        $response = $this->client->put('http://localhost:8080/movieDetails/'.$id,[
            'body'=>$json,
        ]);

        dd($response);
    }
    public function destroy($id)
    {
        DD(1);
    }
}
