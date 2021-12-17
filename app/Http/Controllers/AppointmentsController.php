<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    public function ImapMailFetch()
	{
		
		
		try {
			$client = \Webklex\IMAP\Facades\Client::account('default');
			$client->connect();
		} catch (\Exception $e) {
			echo '<pre>';
			print_r($e->getMessage());
		}
		// die;

		
		$folder = $client->getFolderByName('INBOX');
		$messages = $folder->messages()->unseen()->get();
		
		// dd($client);
		
		$email_data = [];

		foreach($messages as $message){	
			if($message->hasAttachments()){
				foreach ($message->getAttachments() as $attachment) {
					$status = $attachment->save($path = public_path () . "/email_attachments/", $filename = null);
					dump($status);
                }
		}
			
			//Move the current Message to 'INBOX.read'
			// if($message->move('INBOX.read') == true){
			// 	echo 'Message has ben moved';
			// }else{
			// 	echo 'Message could not be moved';
			// }
		}
	}
}
