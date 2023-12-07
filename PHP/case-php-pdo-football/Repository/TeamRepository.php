<?php

namespace Repository;

use Entity\Team;

interface TeamRepository {
    
    function save(Team $team): void;

    function remove(int $number): bool;

    function findAll(): array;

}

class TeamRepositoryImpl implements TeamRepository
{
    public array $team = array();

    private \PDO $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    function save(team $team): void
    {
        // ? prepere statment untuk menghindari sql injection
        $sql = "INSERT INTO team(nama_tim, kota_asal) Value (?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$team->getNamaTeam(), $team->getKotaAsal()]);
    }

    function remove(int $number): bool
    {
        // karena kembaliannya boolean maka terlabih dahulu dilakukan pengecekan
        // select dulu apakah ada id yg akan di hapus, 
        $sql = "SELECT id_tim FROM team WHERE id_tim = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$number]);

        // jika ada 
        if($statement->fetch()) {
            // Team ada
            // lakukan delete dan kembalikan nilai truenya
            $sql = "DELETE FROM team WHERE id_tim = ?";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$number]);

            return true;
        }else{
            // Team tidak ada
            return false;
        }
    }

    function findAll(): array
    {
        $sql = "SELECT id_tim, nama_tim, kota_asal FROM team";
        $statement = $this->connection->prepare($sql);
        $statement->execute();

        $result = [];

        foreach($statement as $row){
            $team = new Team();
            $team->setId($row['id_tim']);
            $team->setNamaTeam($row['nama_tim']);
            $team->setKotaAsal($row['kota_asal']);
            $result[] = $team;
        }

        return $result;
    }
}