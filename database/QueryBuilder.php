<?php
session_start();
class QueryBuilder
{
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll ($table)
    {
        $sql = "SELECT * FROM {$table}";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOne ($table, $id)
    {
        $sql = "SELECT * FROM {$table} WHERE id=:id";
        $statement = $this->pdo->prepare($sql);
        // $statement->bindParam (':id', $id);
        $statement->execute([
            'id'    => $id
        ]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function getOneUser ($table, $login)
    {
        $sql = "SELECT * FROM {$table} WHERE login=:login";
        $statement = $this->pdo->prepare($sql);
        // $statement->bindParam (':id', $id);
        $statement->execute([
            'login'    => $login
        ]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function create ($table, $data)
    {
        $keys = implode(',', array_keys($data));
        $tags = ":" . implode(', :', array_keys($data));

        $sql = "INSERT INTO {$table} ({$keys}) VALUES ({$tags})";

        $statement = $this->pdo->prepare($sql);
        $statement->execute($data);


    }

    public function update ($table, $data, $id)
    {
        $keys = array_keys($data);

        $string = '';
        foreach ($keys as $key)
        {
            $string .= $key.'=:'.$key.',';
        }
        $keys = rtrim($string, ',');

        $data['id']=$id;

        $sql = "UPDATE {$table} SET {$keys} WHERE id=:id";
        $statement = $this->pdo->prepare ($sql);
        $statement->execute ($data);

    }

    public function delete ($table, $id)
    {
        $sql = "DELETE FROM {$table} WHERE id=:id";
        $statement = $this->pdo->prepare($sql);
        // $statement->bindParam (':id', $id);
        $statement->execute([
            'id'    => $id
        ]);

    }

    public function getOneColumn ($column,$table)
    {
        $sql = "SELECT {$column} FROM {$table}";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_COLUMN);
    }


    public function unicRecord ($record, $column, $table)
    {
       $array = $this->getOneColumn($column,$table);
       $array [] = 'guest';

        if (is_bool(array_search($record,$array)) === FALSE)
        {
            return FALSE;
        }
        else return TRUE;

    }
}