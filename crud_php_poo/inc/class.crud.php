<?php
require 'class.db.php';
class crud extends db
{
    public function create($table, $fields)
    {
        $campos = implode(',', array_keys($fields));
        $valores = implode("','", array_values($fields));

        mysqli_query($this->con, "INSERT INTO $table ($campos) VALUES ('$valores')");
        return mysqli_affected_rows($this->con);
    }
    public function read($table,$where=null){
        if(!empty($where)){
            $where = ' WHERE '.$where;
        }
        $query = mysqli_query($this->con,"SELECT * FROM $table $where");
        $result = [];
        while($row = mysqli_fetch_object($query)){
            $result[] = $row;
        }
        return $result;
    }

    public function update($table, $fields, $where)
    {
        $set = [];
        foreach ($fields as $field => $value) {
            $set[] = $field . '="' . $value . '"';
        }
        $fields = implode(',', $set);
        $update = 'UPDATE ' . $table . ' SET ' . $fields . ' WHERE ' . $where;
        mysqli_query($this->con, $update);
        return mysqli_affected_rows($this->con);
    }

    public function delete($table, $where)
    {
        if (!empty($table) && !empty($where)) {
            mysqli_query($this->con, "DELETE FROM  $table WHERE $where ");
            return mysqli_affected_rows($this->con);
        } else {
            return false;
        }
    }
}
