<?php

namespace KCSG\Database;

class DBfunctions
{
    private $host;
    private $dbname;
    private $user;
    private $password;
    private $conn;

    public function __construct(
        $host = 'localhost',
        $dbname = 'mano_baze',
        $user = 'simas',
        $password = '159951'
    )
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->password = $password;

        if (!$this->conn){
            $this->conn = new \PDO("mysql:host=$host; dbname=$dbname", $user, $password);
        }
    }

    public function updateProject_db(Project_db $project_db){
        $stmt = $this->conn->prepare("UPDATE project_db SET name = :name, email= :email, username= :username, password= :password WHERE id = :id;");
        $stmt->bindValue(':fname', $project_db->getName());
        $stmt->bindValue(':lname', $project_db->getUsername());
        $stmt->bindValue(':email', $project_db->getEmail());
        $stmt->bindValue(':phone', $project_db->getPassword());
        $stmt->bindValue(':id', $project_db->getId());
        $stmt->execute();
    }

    public function getDataById($id): Project_db
    {
        $stmt = $this->conn->prepare("SELECT * FROM project_db WHERE id = $id");
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_CLASS, Project_db::class);

        return $stmt->fetch();
    }

    public function insertProject_db(array $mas){
        $stmt = $this->conn->prepare("INSERT INTO project_db (name,email,username,password) VALUES ( :name, :email, :username, :password)");
        $stmt->bindValue(':name', $mas['name']);
        $stmt->bindValue(':email', $mas['email']);
        $stmt->bindValue(':username', $mas['username']);
        $stmt->bindValue(':password', $mas['password']);
        $stmt->execute();
    }
}