<?php

function getConversation($user_id, $conn){
    $sql = query("SELECT * FROM conversations WHERE user_1=? OR user_2=? ORDER BY conversation_id DESC");
    confirm($sql);
    $sql->execute([$user_id, $user_id]);


}