<?php
class functions {

    static function getScore($id) {
        $query = 'SELECT points FROM points WHERE player_id = :player';
        $stmt = DB::connection() -> prepare($query);
        $stmt -> bindParam(':player', $id);
        $stmt -> execute();
        return $stmt -> fetchColumn();
    }

    static function addPoint($user) {
        session_start();
        if(!isset($_SESSION['loggedin'])){
            header('Location: ../index.php');
            die();
        }
    
        $query = "UPDATE points SET points = points +1 WHERE player_id = :player";
        $stmt = DB::connection() -> prepare($query);
        $stmt -> bindParam(':player', $user);
        $stmt -> execute();
        header('Location: ../index.php');
    }

    static function correction($user) {
        session_start();

        if(!isset($_SESSION['loggedin'])){
            header('Location: ../index.php');
            die();
        }

        $query = "UPDATE points SET points = points -1 WHERE player_id = :player";
        $stmt = DB::connection() -> prepare($query);
        $stmt -> bindParam(':player', $user);
        $stmt -> execute();

        header('Location: ../index.php');
    }

    static function getRecentHistory() {
        $query = 'SELECT DK_patrick, DK_ruben, mode_name, map_name FROM match_history JOIN maps ON match_map = map_id JOIN gamemodes ON gamemode = mode_id ORDER BY match_id DESC LIMIT 20';
        $stmt = DB::connection() -> prepare($query);
        $stmt -> execute();
        $history = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        return $history;
    }
}
?>