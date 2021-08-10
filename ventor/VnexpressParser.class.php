<?php
	require_once 'Parser.class.php';

	class VnExpressParser extends Parser{
		public function getTitle(){		
			preg_match("/\<title.*\>(.*)\<\/title\>/isU", $this->content, $matches);
    		return $matches[1];
		}
		public function getContent(){		
			preg_match("/\<article.*\>(.*)\<\/article\>/isU", $this->content, $matches);
    		return $matches[0];
		}
		public function getDate(){		
			preg_match("/\<span class=\"date\"\>(.*)\<\/span\>/isU", $this->content, $matches);
			return $matches[0];	   		
		}
	}


?>