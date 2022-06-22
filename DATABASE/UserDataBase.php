<?php
class UserDataBase{
    public static function create($pdo, $pUser){
        $pdo = pdo_connect();        $sql = "INSERT INTO user (`pseudo`, `email`, `password`, `isAdmin`) VALUES ('".strip_tags($pUser->pseudo)."',
                                                                                    '".strip_tags($pUser->email)."',
                                                                                    '".strip_tags($pUser->password)."',
                                                                                    false)";
        $pdo->exec($sql);
        echo "sql:".$sql;
    
    }
}

?>