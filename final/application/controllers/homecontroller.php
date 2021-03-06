<?php

class HomeController extends Controller{

	public function index(){

        $feed = "http://fox59.com/feed";
        $rss = new RssDisplay($feed);

				$html = "";
         $data = $rss->getFeedItems(8);
         $channel = $rss->getChannelInfo();
         $feed_title = $channel->title;
         $this->set('rss_title',$feed_title);
         foreach($data as $value) {
             $read_date = strtotime($value->pubDate);
             date_default_timezone_set('America/New_York');
             $read_date =  date("F j, Y, g:i a",$read_date);
             $html.= '<div><h3><a href="'.$value->link.'">'.$value -> title.'</a> ('.$read_date.')</h3><p>'.$value->description.'</p></div><hr/>';
         }
         $this->set('data',$html);
 	}

 }
 ?>
