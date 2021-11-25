<?php
require_once dirname(__FILE__) . '/BaseManager.php';
class UserManager extends BaseManager
{
    public function getUsers()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM Users');

        return $req;
    }

    public function getUser($id)
    {
        /*
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($id));
        $post = $req->fetch();

        return $post;*/
        return null;
    }
}

?>