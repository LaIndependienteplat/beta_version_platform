<?php
include("./m/Query.php");

function select($query) {
    $rows = Query::selectLibre($query);	
    return $rows;
}

function agregarComentario($userId, $titulo, $platform_id, $contenido) {
    $query =
        "INSERT INTO user_blog_posts
            (userId, topic, platform_id, content, _created)
        VALUES
            ('$userId', '$titulo', '$platform_id', '$contenido', CURRENT_TIMESTAMP);";
    Query::insertLibre($query);
}

?>
