<?php

namespace Repository;

use Entity\Todolist;

interface TodolistRepository {
    
    function save(Todolist $todolist): void;

    function remove(int $number): bool;

    function findAll(): array;

}

class TodolistRepositoryImpl implements TodolistRepository
{
    public array $todolist = array();

    private \PDO $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    function save(Todolist $todolist): void
    {
        // ? prepere statment untuk menghindari sql injection
        $sql = "INSERT INTO todolist(todo) Value (?)";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$todolist->getTodo()]);
    }

    function remove(int $number): bool
    {
        // karena kembaliannya boolean maka terlabih dahulu dilakukan pengecekan
        // select dulu apakah ada id yg akan di hapus, 
        $sql = "SELECT id FROM todolist WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$number]);

        // jika ada 
        if($statement->fetch()) {
            // todolist ada
            // lakukan delete dan kembalikan nilai truenya
            $sql = "DELETE FROM todolist WHERE id = ?";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$number]);

            return true;
        }else{
            // todolist tidak ada
            return false;
        }
    }

    function findAll(): array
    {
        // $sql = "SELECT * FROM todolist";
        // $statement = $this->connection->query($sql);

        // $array = [];

        // while ($row = $statement->fetch()) {
        //     $array[] = new Todolist(
        //         todo: $row["todo"],
        //     );
        // }
        // return $array;

        $sql = "SELECT id, todo FROM todolist";
        $statement = $this->connection->prepare($sql);
        $statement->execute();

        $result = [];

        foreach($statement as $row){
            $todolist = new Todolist();
            $todolist->setId($row['id']);
            $todolist->setTodo($row['todo']);
            $result[] = $todolist;
        }

        return $result;
    }
}