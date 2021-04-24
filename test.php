<?php
	check
	
        function real_server_ip(){
	        static $serverip = NULL;
	        if ($serverip !== NULL){
	            return $serverip;
	        }
	        if (isset($_SERVER)){
	            if (isset($_SERVER['SERVER_ADDR'])){
	                $serverip = $_SERVER['SERVER_ADDR'];
	            }else{ss
	                $serverip = '0.0.0.0';
	            }
	        }
	        else{
	            $serverip = getenv('SERVER_ADDR');
	        }
	        return $serverip;
    	}

    	      function getIP(){
        global $ip;
        if (getenv("HTTP_CLIENT_IP"))
            $ip = getenv("HTTP_CLIENT_IP");
        else if(getenv("HTTP_X_FORWARDED_FOR"))
            $ip = getenv("HTTP_X_FORWARDED_FOR");
        else if(getenv("REMOTE_ADDR"))
            $ip = getenv("REMOTE_ADDR");
        else $ip = "Unknow";
        return $ip;
    }
     $a=getIP();
     echo $a;
?>