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
        $sql = "INSERT INTO `match`(id_team_home, id_team_away, skor_team_home, skor_team_away) Value (?,?,?,?)";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$match->getTimHome(), $match->getTimAway(), $match->getSkorTimHome(), $match->getSkorTimAway()]);

        // query untuk memasukan nilai pertandingan ke klasemen
        // $tim1 = $match->getSkorTimHome();
        // // buat query insert 
        // $queryTimHome = "INSERT INTO standing (id_tim) VALUES(:tim)";
        // $stmt = $this->connection->prepare($queryTimHome);
        // $stmt->bindParam(':tim', $tim1);
        // $stmt->execute();

        // $tim2 = $match->getSkorTimAway();
        // $queryTimAway = "INSERT INTO standing (id_tim) VALUES(:tim)";
        // $stmnt = $this->connection->prepare($queryTimAway);
        // $stmnt->bindParam(':tim', $tim2);
        // $stmnt->execute();
    }

    function remove(int $number): bool
    {
        // karena kembaliannya boolean maka terlabih dahulu dilakukan pengecekan
        // select dulu apakah ada id yg akan di hapus, 
        $sql = "SELECT id_match FROM `match` WHERE id_match = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$number]);

        // jika ada 
        if($statement->fetch()) {
            // match ada ada
            // lakukan delete dan kembalikan nilai truenya
            $sql = "DELETE FROM `match` WHERE id_match = ?";
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

        // $query = <<<SQL 
        // SELECT
        //     home.nama_tim AS tim_home,
        //     away.nama_tim AS tim_away,
        //     `match`.*
        // FROM
        //     `match`
        // JOIN team AS home ON match.id_team_home = home.id_tim
        // JOIN team AS away ON match.id_team_away = away.id_tim;
        // SQL;

        $query = "SELECT
            home.nama_tim AS tim_home,
            away.nama_tim AS tim_away,
            `match`.*
        FROM
            `match`
        JOIN team AS home ON match.id_team_home = home.id_tim
        JOIN team AS away ON match.id_team_away = away.id_tim";

        $statement = $this->connection->prepare($query);
        $statement->execute();

        $result = [];

        foreach($statement as $row){
            $match = new Matchs();
            $match->setIdMatch($row['id_match']);
            $match->setTimHome($row['tim_home']);
            $match->setTimAway($row['tim_away']);
            $match->setSkorTimHome($row['skor_team_home']);
            $match->setSkorTimAway($row['skor_team_away']);
            $result[] = $match;
        }

        return $result;
    }
}