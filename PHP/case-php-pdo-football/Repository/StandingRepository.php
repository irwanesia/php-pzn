<?php

namespace Repository;

use Entity\Standings;

interface StandingRepository {
    
    function save(standings $Standing): void;

    function remove(int $number): bool;

    function findAll(): array;

}

class StandingRepositoryImpl implements StandingRepository
{
    public array $Standing = array();

    private \PDO $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    function save(Standings $Standing): void
    {
        // ? prepere statment untuk menghindari sql injection
        $sql = "INSERT INTO Standing(todo) Value (?)";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$Standing->getTodo()]);
    }

    function remove(int $number): bool
    {
        // karena kembaliannya boolean maka terlabih dahulu dilakukan pengecekan
        // select dulu apakah ada id yg akan di hapus, 
        $sql = "SELECT id FROM Standing WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$number]);

        // jika ada 
        if($statement->fetch()) {
            // Standing ada
            // lakukan delete dan kembalikan nilai truenya
            $sql = "DELETE FROM Standing WHERE id = ?";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$number]);

            return true;
        }else{
            // Standing tidak ada
            return false;
        }
    }

    function findAll(): array
    {
        // $sql = "SELECT * FROM Standing";
        // $statement = $this->connection->query($sql);

        // $array = [];

        // while ($row = $statement->fetch()) {
        //     $array[] = new Standing(
        //         todo: $row["todo"],
        //     );
        // }
        // return $array;

        $sql = "SELECT id, todo FROM Standing";
        $statement = $this->connection->prepare($sql);
        $statement->execute();

        $result = [];

        foreach($statement as $row){
            $Standing = new Standing();
            $Standing->setId($row['id']);
            $Standing->setTodo($row['todo']);
            $result[] = $Standing;
        }

        return $result;
    }
}