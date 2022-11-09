<?php

/*database connection*/
class Model{
    private $servername='127.0.0.1';
    private $username='loic';
    private $password='Abcd@2020';
    private $dbname='crud';
    private $conn;

    function __construct(){
        $this->conn=new mysqli($this->servername,$this->username,$this->password,$this->dbname);

        if($this->conn->connect_error){
            echo 'connection failed';
        }else{
            return $this->conn;
        }
    }// constructor close
    /* function definr=e for insert records*/  
    public function insertRecord($post){
        $name = $post['name'];
        $email=$post['email'];
        $sql="INSERT INTO Users(name,email)VALUES('$name','$email')";
        $result=$this->conn->query($sql);
        if($result){
            header('location:index.php?msg=ins');
        }else{
            echo 'Error '.$sql."<br>".$this->conn->error;
        }
    }// inserted function close
    public function updateRecord($post){
        $name = $post['name'];
        $email=$post['email'];
        $editid = $post['hid'];
        $sql="UPDATE Users SET name='$name',email='$email' WHERE id='$editid' ";
        $result=$this->conn->query($sql);
        if($result){
            header('location:index.php?msg=ups');
        }else{
            echo 'Error '.$sql."<br>".$this->conn->error;
        }
    }
    public function deleteRecord($delid){
        $sql = "DELETE FROM Users WHERE id='$delid'";
        $result = $this->conn->query($sql);
        if($result){
            header('location:index.php?msg=del');
        }else{
            echo "Error".$sql."<br>".$this->conn->error;
        }
    }
    public function displayRecord(){
        $sql = "SELECT * FROM Users";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $data[] =$row;
            }
            return $data;
        }
       
        }
        public function displayRecordById($editid){
            $sql = "SELECT * FROM Users WHERE id = '$editid'";
            $result = $this->conn->query($sql);
            if($result->num_rows==1){
                $row = $result->fetch_assoc();
                return $row;
            }
    }
}//class close
?>