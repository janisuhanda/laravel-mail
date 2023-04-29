<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function basic_email()
    {
        $data = array('name'=>"Jani Suhanda");
        Mail::send(['text'=>'mail'], $data, function($message) {
            $message->to('janisuhanda@gmail.com', 'testing basic kirim email')->subject
               ('Laravel Basic Testing Mail');
            $message->from('jajavanjava@gmail.com','Jaja van java');
         });
         echo "Basic Email Sent. Check your inbox.";
    }

    public function html_email()
    {
        $data = array('name'=>"Jani Suhanda");
      Mail::send('mail', $data, function($message) {
         $message->to('janisuhanda@gmail.com', 'Testing kirim html email')->subject
            ('Laravel HTML Testing Mail');
         $message->from('jajavanjava@gmail.com','jajavanjava');
      });
      echo "HTML Email Sent. Check your inbox.";
    }
    public function attachment_email() {
        $data = array('name'=>"Jani Suhanda");
        Mail::send('mail', $data, function($message) {
           $message->to('janisuhanda@gmail.com', 'Testing kirim attch emaill')->subject
              ('Laravel Testing Mail with Attachment');
        //    $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
        //    $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
           $message->attach('C:\latihan\laravel-mail\public\avatar.png');
           $message->from('jajavanjava@gmail.com','Jaja van java');
        });
        echo "Email Sent with attachment. Check your inbox.";
     }
}
