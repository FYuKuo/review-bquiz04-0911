<?php
date_default_timezone_set('Asia/Taipei');
session_start();

class DB
{
    protected $table;
    protected $pdo;
    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=db15-0911";

    public function __construct($table)
    {
        $this->table = $table;
        $this->pdo = new PDO($this->dsn,'root','');
    }

    public function all(...$arg)
    {
        $sql = "SELECT * FROM `$this->table` ";

        if(isset($arg[0])){
            if(is_array($arg[0])){
                foreach ($arg[0] as $key => $value) {
                    $tmp[] = " `$key` = '$value' ";
                }

                $sql .= " WHERE " . join("AND",$tmp);
            }else{
            $sql .= $arg[0];    
            }
        }

        if(isset($arg[1])){
            $sql .= $arg[1];    
        }

        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }



    public function find($id)
    {
        $sql = "SELECT * FROM `$this->table` ";
            if(is_array($id)){
                foreach ($id as $key => $value) {
                    $tmp[] = " `$key` = '$value' ";
                }

                $sql .= " WHERE " . join("AND",$tmp);
            }else{
            $sql .= " WHERE `id` = '$id' ";    
            }

        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }


    public function del($id)
    {
        $sql = "SELECT * FROM `$this->table` ";
            if(is_array($id)){
                foreach ($id as $key => $value) {
                    $tmp[] = " `$key` = '$value' ";
                }

                $sql .= " WHERE " . join("AND",$tmp);
            }else{
            $sql .= " WHERE `id` = '$id' ";    
            }

        return $this->pdo->exec($sql);
    }


    public function save($array)
    {
        if(isset($array['key'])){
            foreach ($array as $key => $value) {
                if($key != 'id'){
                    $tmp[] = " `$key` = '$value' ";
                }
            }

            $sql = "UPDATE `$this->table` SET " . join(",",$tmp) . " WHERE `id` = '{$array['key']}'";
        }else{
            $col = join("`,`",array_keys($array));
            $val = join("','",$array);

            $sql = "INSERT INTO `$this->table` (`$col`) VALUES ('$val')";
        }
        return $this->pdo->exec($sql);
    }


    public function math($math,$col,...$arg)
    {
        $sql = "SELECT $math($col) FROM `$this->table` ";

        if(isset($arg[0])){
            if(is_array($arg[0])){
                foreach ($arg[0] as $key => $value) {
                    $tmp[] = " `$key` = '$value' ";
                }

                $sql .= " WHERE " . join("AND",$tmp);
            }else{
            $sql .= $arg[0];    
            }
        }

        if(isset($arg[1])){
            $sql .= $arg[1];    
        }

        return $this->pdo->query($sql)->fetchColumn();
    }
}


function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function to($url)
{
    header("location:$url");
}

function jto($url)
{
    echo "onclick=\"location.href='$url'\"";
}

$today = date("Y-m-d");


$Admin = new DB('admin');
$Bot = new DB('bot');
$Goods = new DB('goods');
$Mem = new DB('mem');
$Ord = new DB('ord');
$Type = new DB('type');
?>