<?php 

date_default_timezone_set("Asia/Bangkok");
 
class DB {
     
    public $connect;
    public $result;
    public $recode = array();
     
    public $type      = 'mysql';
    public $server    = 'localhost';
    public $username  = 'u560510635';
    public $password  = '560510635';
    public $dbname    = 'u560510635';
    public $port      = 3306;
    public $charset   = 'utf8';
     
    public function __construct() {
        $this->connect = mysqli_connect( $this->server, $this->username, $this->password )
            or die( "Error Connect to Database" );
        mysqli_select_db( $this->connect, $this->dbname) or die( "Error Connect to Table" );
        mysqli_query( $this->connect, "SET NAMES UTF8" );
    }
     
    // ประมวลผลคำสั่ง SQL
    public function query($txtSQL = ''){
        if(!empty($txtSQL)){
            $this->result = mysqli_query(  $this->connect, $txtSQL);
            return $this;
        }else{
            return false;
        }
    }
    public function getStatus(){
        if(!empty($this->result)){
            return true;
        }else{
            return false;
        }
    }
     
    /* ==========================================================
     * ดึงข้อมูล SELECT
     ============================================================ */
     
    // รายการเดียว
    public function find(){
        if(!empty($this->result)){
            $this->recode   = mysqli_fetch_object( $this->result );
            return $this->recode;
        }else{
            return false;
        }
    }

    // รายการทั้งหมด
    public function findAll(){
        if(!empty($this->result)){
            $record = array();
            while ($row = mysqli_fetch_array( $this->result , MYSQLI_ASSOC)) {
                $record[] = (object) $row;
            }
            return $record;
        }else{
            return false;
        }
    }
    
    // จำนวน Record
    public function count(){
        if(!empty($this->result)){
            return mysqli_num_rows( $this->result );
        }else{
            return false;
        }
    }

    public function testGet(){
    if(!empty($this->result)){
            
           
            return $this->result_array();
        }else{
            return false;
        }
    }
     
}
