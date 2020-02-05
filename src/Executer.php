<?php
namespace Susano;
include_once('../src/config/config.php');

class Executer extends \PDO {

    private static $instance;
    
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Executer();
        }

        return self::$instance;
    }


    
    private function __construct(){
        $dns =  'mysql'.':host=' . HOST .';dbname=' . HOST_NAME.';charset=utf8;';
        parent::__construct($dns, HOST_USER,HOST_PASS);
    }


    public function exec($query,$exec=null){
        $executionStartTime = microtime(true);
        $sth = $this->prepare($query);
        if ($sth->errorInfo()[2] != null) $this->logError($sth);
        if($exec!=null){
            
            var_dump($sth);
            var_dump($exec);
            $sth->execute($exec);
            $executionEndTime = microtime(true);
        }else{
            $sth->execute();
            $executionEndTime = microtime(true);

        }
        $seconds = $executionEndTime - $executionStartTime;
        var_dump($sth->errorInfo());
		if ($sth->errorInfo()[2] != null) {
			$this->logError($sth);
		} else {
			$file = __DIR__."/logs/access.log";
			
            file_put_contents($file, date("\[d/m/y H:i:s\]")." : ".$query." took exactly ".$seconds." seconds to execute . \n", FILE_APPEND);
			
		}
		return $sth;

    }

    public function logError($sth){
        $file = __DIR__."/logs/error.log";
		file_put_contents($file, date("\[d/m/y H:i:s\]")." : ".$sth->errorInfo()[2]." \n", FILE_APPEND);

    }

    public function unexistant($sentence){
        $file = __DIR__."/logs/error.log";
		file_put_contents($file, date("\[d/m/y H:i:s\]")." : ".$sentence." \n", FILE_APPEND);
    }
}