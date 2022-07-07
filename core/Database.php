<?php

class Database {

    public function __construct() {
	  	return $this->connection = new Mysql(Config::Database('mysql','host'),
                                      Config::Database('mysql','user'),
                                      Config::Database('mysql','pass'),
                                      Config::Database('mysql','db'));
    }

    function insert($table,$data) {        
        $fields = array_keys($data);
        $values = array_values($data);
        try {
            $query  = 'INSERT INTO '. $table . '(';
            $query .= implode(',',$fields);
            $query .= ') ';
            $query .= 'VALUES (';
            $query .= implode(',', array_fill(0, count($fields), '?'));
            $query .= ')';
            array_unshift($values , $query);
            $result = $this->connection->query(...$values);
        } catch (Exception $e) {
            return 'Database exception: ' . $e->getMessage() . PHP_EOL;
        }
        return $result;
    } 
    
    function truncate($table) {        
        try {
            $result = $this->connection->query('TRUNCATE ' . $table);
        } catch (Exception $e) {
            return 'Database exception: ' . $e->getMessage() . PHP_EOL;
        }
        return $result;
    }
}