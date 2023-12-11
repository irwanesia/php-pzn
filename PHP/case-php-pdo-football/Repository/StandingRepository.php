<?php

namespace Repository;

use Entity\Standings;

interface StandingRepository {
    
    // function save(standings $Standing): void;

    // function remove(int $number): bool;

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

    // function save(Standings $standing): void
    // {
    //     // ? prepere statment untuk menghindari sql injection
    //     $sql = "INSERT INTO Standing(todo) Value (?)";
    //     $statement = $this->connection->prepare($sql);
    //     $statement->execute([$standing->getIdTim(), $standing->getPlay(), $standing->getWin(), $standing->getDraw(), $standing->getLost()]);
    // }

    // function remove(int $number): bool
    // {
    //     // karena kembaliannya boolean maka terlabih dahulu dilakukan pengecekan
    //     // select dulu apakah ada id yg akan di hapus, 
    //     $sql = "SELECT id_standing FROM Standing WHERE id_standing = ?";
    //     $statement = $this->connection->prepare($sql);
    //     $statement->execute([$number]);

    //     // jika ada 
    //     if($statement->fetch()) {
    //         // Standing ada
    //         // lakukan delete dan kembalikan nilai true
    //         $sql = "DELETE FROM Standing WHERE id_standing = ?";
    //         $statement = $this->connection->prepare($sql);
    //         $statement->execute([$number]);

    //         return true;
    //     }else{
    //         // Standing tidak ada
    //         return false;
    //     }
    // }

    function findAll(): array
    {
        $sql = "SELECT * FROM standing JOIN team ON standing.id_tim = team.id_team";
        $statement = $this->connection->prepare($sql);
        $statement->execute();

        $result = [];

        foreach($statement as $row){
            $Standing = new Standings();
            $Standing->setIdTim($row['id_tim']);
            $Standing->setPlay($row['ma']);
            $Standing->setWin($row['me']);
            $Standing->setDraw($row['s']);
            $Standing->setLost($row['k']);
            $result[] = $Standing;
        }

        return $result;
    }
}