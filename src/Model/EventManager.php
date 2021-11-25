<?php
require_once dirname(__FILE__) . '/BaseManager.php';
class EventManager extends BaseManager
{
    public static function getEvents()
    {
        $db = parent::dbConnect();
        $req = $db->query('SELECT * FROM events');

        return $req;
    }

    public static function getEvent($id)
    {
        /*
        $db = $self->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($id));
        $post = $req->fetch();

        return $post;*/
        return null;
    }
}

?>