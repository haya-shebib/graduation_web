<?php require_once("../resources/confiq.php")?>
<?php include(TEMPLATE_FRONT .DS. "header.php") ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form was submitted
    if (isset($_POST["comment"]) && isset($_POST["id"])) {
        // Get the comment and id values from the form
        $comment = $_POST["comment"];
        $id = $_POST["id"];

        // Process the comment (insert into database, etc.)
        // Perform any necessary database operations here

        // You can also return a response to the AJAX request
        echo "Comment submitted successfully.";
        exit; // Terminate the script
    }
}

// HTML form
?>

    <form action="" method="POST">
        <input type="text" name="comment" id="comment" class="form-control my-2" autocomplete="off" height="100">
        <input type="submit" name="addcomment" value="Comment" class="btn btn-info my-2 send" id="{$row['id']}">
    </form>
</html>
