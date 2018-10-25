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
        $input = $request->all();
        $awards = new Awards($input);
        $imdb = new Imdb($input);
        $tomato = new Tomato($input);
        $movieDetails = new MovieDetails($input);
        $movieDetails['awards'] = $awards;
        $movieDetails['imdb'] = $imdb;
        $movieDetails['tomato'] = $tomato;
        $this->client->post('http://localhost:8080/movieDetails',[
            'body'=>json_encode($movieDetails->convertPossibleToIntegers()),
            'headers' => [
            'Accept'     => 'application/json',
            'Content-Type'     => 'application/json',
            ]
        ]);

        return redirect()->route('movieDetails.index');
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
        $awards = new Awards($input);
        $imdb = new Imdb($input);
        $tomato = new Tomato($input);
        $movieDetails = new MovieDetails($input);
        $movieDetails['awards'] = $awards;
        $movieDetails['imdb'] = $imdb;
        $movieDetails['tomato'] = $tomato;
        $this->client->put('http://localhost:8080/movieDetails/'.$id,[
            'body'=>json_encode($movieDetails->convertPossibleToIntegers()),
            'headers' => [
            'Accept'     => 'application/json',
            'Content-Type'     => 'application/json',
            ]
        ]);

        return redirect()->route('movieDetails.index');
    }
    public function destroy($id)
    {
        $this->client->delete('http://localhost:8080/movieDetails/'.$id,[
            'headers' => [
            'Accept'     => 'application/json',
            'Content-Type'     => 'application/json',
            ]
        ]);

        return redirect()->route('movieDetails.index');
    }
}
