<?php

namespace Repository;

use Entity\Matchs;

interface MatchRepository {
    
    function save(Matchs $Match): void;

    function remove(int $number): bool;

    function findAll(): array;

}

class MatchRepositoryImpl implements MatchRepository
{
    public array $match = array();

    private \PDO $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    function save(Matchs $match): void
    {
        // ? prepere statment untuk menghindari sql injection
        $sql = "INSERT INTO match(id_team_home, id_team_away, skor_team_home, id_team_away) Value (?,?,?,?)";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$match->getTimHome(), $match->getTimAway(), $match->getSkorTimHome(), $match->getSkorTimAway()]);
    }

    function remove(int $number): bool
    {
        // karena kembaliannya boolean maka terlabih dahulu dilakukan pengecekan
        // select dulu apakah ada id yg akan di hapus, 
        $sql = "SELECT id_match FROM match WHERE id_match = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$number]);

        // jika ada 
        if($statement->fetch()) {
            // match ada ada
            // lakukan delete dan kembalikan nilai truenya
            $sql = "DELETE FROM match WHERE id_match = ?";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$number]);

            return true;
        }else{
            // match tidak ada
            return false;
        }
    }

    function findAll(): array
    {

        $sql = "SELECT id_match, id_team_home, id_team_away, skor_team_home, skor_team_away FROM match";
        $statement = $this->connection->prepare($sql);
        $statement->execute();

        $result = [];

        foreach($statement as $row){
            $match = new Matchs();
            $match->setIdMatch($row['id_match']);
            $match->setTimHome($row['id_team_home']);
            $match->setTimAway($row['id_team_away']);
            $match->setSkorTimHome($row['skor_team_home']);
            $match->setSkorTimAway($row['skor_team_away']);
            $result[] = $match;
        }

        return $result;
    }
}