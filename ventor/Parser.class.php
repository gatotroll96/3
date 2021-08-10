<?php
	
	
	class Parser
	{
	    protected 	$cUrl;
	    protected 	$url;
	    protected 	$content;

	    public function __construct($url){
	    	$this->cUrl = curl_init();
	    	$this->url  = $url;
	    	curl_setopt($this->cUrl, CURLOPT_URL, $this->url);
			curl_setopt($this->cUrl, CURLOPT_RETURNTRANSFER, 1);
			$this->content = curl_exec($this->cUrl);
	    }

	    public function __destruct(){
	    	curl_close( $this->cUrl );
	    }	   
	}


?>