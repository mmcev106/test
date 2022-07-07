<?php
include_once('core/Database.php');

class Repositories extends Database{

    public function getAll() {
        try {
            $result = $this->connection->query('SELECT * FROM repositories')->fetchAll();
        } catch (Exception $e) {
            return 'Database exception: ' . $e->getMessage() . PHP_EOL;
        }
        return $result;
    }

    public function save($data) {
        return $this->insert('repositories',$data);
    }    

    function getById($id) {
        try {
            $result = $this->connection->query('SELECT * FROM repositories WHERE id = ?',$id)->fetchAll();
            $result = $result[0];
        } catch (Exception $e) {
            return 'Database exception: ' . $e->getMessage() . PHP_EOL;
        }
        return $result;
    }

    public function reset() {
        return $this->truncate('repositories');
    }

}