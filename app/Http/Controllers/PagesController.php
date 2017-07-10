<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use Session;


class PagesController extends Controller
{
    //

	public function home(){
        $posts = Post::orderBy('created_at','desc')->limit(4)->get(); //seleccionamos los ultimos 4 posts

		return view('pages.home')->withPosts($posts);
	}

    public function about(){
    	return view('pages.about');
    }

    public function getContact(){
    	return view('pages.contact');
    }

    public function postContact(Request $request){
        $this->validate($request,[
            'email' => 'required|email',
            'subject' => 'min:3',
            'message' => 'min:10'
            ]);

        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
            );

        Mail::send('emails.contact', $data, function($message) use ($data){  //ṕodemos enviar una vista en blade
            $message->from($data['email']);
            $message->to('contacto@delgadopetrino.com');
            $message->subject($data['subject']);
        });

        Session::flash('success', 'Correo Enviado');

        return redirect()->route('home');
    }
}
