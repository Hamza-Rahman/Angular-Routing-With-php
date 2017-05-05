<?php include 'config.php'; ?>

<?php

    class DB
    {
        private static $conn;
        private $data = array();
        
        function __construct()
        {
            try{
                self::$conn = new PDO("mysql:host=localhost;dbname=tblstudent","root","");

            }catch(PDOEXception $e){
                die('connection Error '.$e->getmessage());
            }
            return self::$conn;
        }


        public function popData(){
            $qr = self::$conn->query("SELECT * FROM info");
            while ($row = $qr->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }
            $jsoneString = json_encode($data);
            return $jsoneString;
        }
    }



?>

