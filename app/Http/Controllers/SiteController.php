<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Service;
use App\Slide,App\Page,App\Message,App\Category;
class SiteController extends Controller
{
    public function test(){
      $slides=Slide::orderBy('created_at','desc')->take(3)->get();
      return view('test',['slides'=>$slides]);
    }

    public function index(){
      $slides=Slide::orderBy('created_at','desc')->take(3)->get();
      $services=Service::orderBy('created_at','desc')->take(3)->get();
      $posts=Post::orderBy('created_at','desc')->take(4)->get();
      return  view('site.accueil',['slides'=>$slides,'services'=>$services,'posts'=>$posts]);
    }
    public function services(){
      $services=Service::all();
      return  view('site.services',['services'=>$services]);
    }
    public function service($id){
      $service=Service::find($id);
      return  view('site.service',['service'=>$service]);
    }
    public function blog(){
      $categories=Category::all();

      $posts=Post::paginate(2);
      return  view('site.blog',['posts'=>$posts,'categories'=>$categories,'categorie_slug'=>'all']);
    }
    public function about(){
      $page=Page::where('slug','about-page')->first();
      return  view('site.about',['page'=>$page]);
    }
    public function contact(){
      return  view('site.contact');
    }
    public function show($slug){
      $post=Post::where('slug',$slug)->first();
      return  view('site.show',['post'=>$post]);
    }

    public function storecontact(Request $request){
      $data=$request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required|min:3|max:30'
      ]);

      $message=new Message();
      $message->name    =$data['name'];
      $message->email   =$data['email'];
      $message->messages=$data['message'];
      $message->save();
      return redirect('/contact')->with('status','Salut '.$data['name'].'   votre demande sera traite dans quelque seconds');

    }

    public function getPostsById($slug){
      $category=Category::where('slug',$slug)->first();
      $categories=Category::all();

      $posts=$category->posts()->paginate(2);
     
      return  view('site.blog',['posts'=>$posts,'categories'=>$categories,'categorie_slug'=>$slug]);
    }
}
