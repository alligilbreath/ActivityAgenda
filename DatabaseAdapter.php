<?php

// Alli Gilbreath
// George Hughes
class DatabaseAdaptor
{

    private $DB;

    // The instance variable used in every method
    // Connect to an existing data based named 'first'
    public function __construct()
    {
        $dataBase = 'mysql:dbname=activityAgenda;charset=utf8;host=127.0.0.1';
        $user = 'root';
        $password = ''; // Empty string with XAMPP install
        try {
            $this->DB = new PDO($dataBase, $user, $password);
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo ('Error establishing Connection');
            exit();
        }
    }

    public function getAllActors()
    {
        $stmt = $this->DB->prepare("SELECT * FROM actors");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllMoviesReleasedSince($year)
    {
        $stmt = $this->DB->prepare("SELECT * FROM movies where year >= " . $year);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getActors($substr)
    {
        //return $substr;
        $str = "SELECT * FROM actors WHERE first_name LIKE '%" . $substr . "%' OR last_name LIKE '%" . $substr . "%'";
        $stmt = $this->DB->prepare($str);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getMovies($substr)
    {
        $stmt = $this->DB->prepare("SELECT * FROM movies WHERE name LIKE '% " . $substr . "%'");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getRoles($first, $last){
        $str = "SELECT actors.first_name, actors.last_name, roles.role FROM actors
        JOIN roles
        ON actors.id = roles.actor_id
        WHERE actors.first_name = '" . $first . "' AND actors.last_name = '" . $last . "'";
        $stmt = $this->DB->prepare($str);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getAllMovies()
    {
        $stmt = $this->DB->prepare("SELECT * FROM movies");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllRoles()
    {
        $stmt = $this->DB->prepare("SELECT * FROM roles");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
 //$theDBA = new DatabaseAdaptor();
// $arr = $theDBA->getRoles('Kevin', 'Bacon');
// Use DB column names as offsets
// echo $arr[0]['ID'] . PHP_EOL;
// echo $arr[1]['Name'] . PHP_EOL;
// echo $arr[2]['last_name'] . PHP_EOL;
 //print_r($arr);
?>

