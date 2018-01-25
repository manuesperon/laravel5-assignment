<?php
  
namespace App\Http\Controllers;

use GuzzleHttp\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
  
class PostController extends Controller{
  
  public function list() {
    $client = new Client([
      'base_uri' => 'https://jsonplaceholder.typicode.com/',
      'timeout'  => 2.0,
    ]); 
    $posts = json_decode($client->request('GET', 'posts')->getBody()->getContents());
    return view('posts.list', compact('posts'));
  }

}

?>