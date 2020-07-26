<?php foreach (["videos", "headings", "sizes", "texts"] as $table){
    $sql = $sql . "DELETE FROM $table WHERE id NOT IN (SELECT id FROM files);";
}
?>