<?php

namespace App\Http\Controllers;
 
class PagesController extends Controller {
	
	public function getIndex(){
		return view('pages/welcome');//or use pages.welcome (dot notation)
	}
	
	public function getAbout(){
		$first = "Julio";
		$last = "Tejada";
		$fullname = $first." ".$last;
		
		$email = "jucet1@gmail.com";
		
		$data = []; // this can be passed and elements will be referenced from the view
		$data['email'] = $email;
		$data['fullname'] = $fullname;
		
		//return view('pages/about')->with("fullname",$fullname);
		//return view('pages/about')->withFullname($fullname)->withEmail($email);
		
		return view('pages/about')->withData($data);
	}
	
	public function getContact(){
		return view('pages/contact');
	}	
	
}
