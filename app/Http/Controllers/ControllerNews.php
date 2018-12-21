<?php

namespace App\Http\Controllers;

use PhpParser\Unserializer\XML;
use Jenssegers\Date\Date;


class ControllerNews extends Controller
{
   	public function getPosts($page = 1) {
         return response()->json($this->getItems($page));
   	}

   	/**
   	* Store the new task
   	*
   	* @return json
   	*/
   	public function getItems($page) {
         
         $rss = $this->getRss();

         $itens = [];
         if ( $rss->channel->item ) {
            foreach ( $rss->channel->item as $item ) {
               $itens[] = $this->getInfo($item);
            }   
         }
         
         return collect($itens)
                  ->chunk(10)
                  ->values()
                  ->get($page);      
   	}
   	
   	/**
   	* Store the new task
   	*
   	* @return json
   	*/
   	public function getPost($slug) {
   		$rss = $this->getRss();
   		foreach ($rss->channel->item as $item ) {
   			$info = $this->getInfo($item);
   			if ( $info->slug == $slug )
   				return response()->json($info); 
   		}
   	}


   	public function getInfo($info) {
   		Date::setLocale('pt_BR');
   		$date = new Date ($info->pubDate);
   		$date = $date->format('d \d\e F \d\e Y');
   		$info->slug = str_slug($info->title);
   		$info->pubDate = $date;
   		return $info;
   	}

   	public function getRss() {
   		$rss = simplexml_load_file('http://pox.globo.com/rss/g1/economia');
   		return $rss;
   	}




}
