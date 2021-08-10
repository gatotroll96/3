<?php
	require_once 'Parser.class.php';

	class DantriParser extends Parser{
		public function getTitle(){		
			preg_match("/\<h1 class=\"dt\-news\_\_title\"\>(.*)\<\/h1\>/isU", $this->content, $matches);
    		return $matches[1];
		}
		public function getContent(){		
			preg_match("/\<div class=\"dt\-news\_\_content\"\>(.*)\<\/div\>/isU", $this->content, $matches);
    		return $matches[0];
		}
		public function getDate(){		
			preg_match("/\<span class=\"dt\-news\_\_time\"\>(.*)\<\/span\>/isU", $this->content, $matches);
			return $matches[0];	   		
		}
	}

?>