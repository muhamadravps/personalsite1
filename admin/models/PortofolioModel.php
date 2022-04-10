<?php

class PortofolioModel{
    private$host =DB_HOST;
    private$user =DB_USER;
    private$pass =DB_PASS;
    private$db_name =DB_NAME;

    private$dbh;
    private$stmt;
    function __construct()
    {
        //data source name
        $dsn ='mysql:host='.$this->host.';dbname='.$this->db_name;
        $option =[
            PDO::ATTR_PERSISTENT => true,//menjaga koneksinya terjaga
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        try{
            $this->dbh = new PDO($dsn,$this->user,$this->pass,$option);
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }
    public function getProfile()
        {
            $this->stmt = $this->dbh->prepare('SELECT * FROM user');
            $this->stmt->execute();
            return $this->stmt->fetchALL(PDO::FETCH_ASSOC);
        }
        public function getAbout()
        {
            $this->stmt = $this->dbh->prepare('SELECT * FROM about');
            $this->stmt->execute();
            return $this->stmt->fetchALL(PDO::FETCH_ASSOC);
        }
        public function getProject()
        {
            $this->stmt = $this->dbh->prepare('SELECT * FROM project');
            $this->stmt->execute();
            return $this->stmt->fetchALL(PDO::FETCH_ASSOC);
        }
        public function tampungPesan($data_pesan)
        {
            $email = $data_pesan["email"];
            $nama = $data_pesan["nama_k"];
            $pesan = $data_pesan["pesan"];

            $query = "INSERT INTO contact
                VALUES
                ('','$email','$nama','$pesan')";
            $this->stmt = $this->dbh->prepare($query);
            $this->stmt->execute();
            return $this->stmt->rowCount();

        }
}
