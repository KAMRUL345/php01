<!-- File No 03 -->
<?php
require_once("./header.php");
if (isset($_POST['ast'])) {
    $name = $_POST['name'];
    $city = $_POST['city'];

    $name = $conn->real_escape_string($name); //for removing hacker attack, clean function, also name query injection
    $city = $conn->real_escape_string($city); //for removing hacker attack, clean function

    $sql = "INSERT INTO `users` (`name`, `city`) VALUES ('$name', '$city')";
    $result = $conn->query($sql);

    if ($result) {
        echo "Student Added Successfully";
        echo "<script>setTimeout(()=> location.href='./', 2000) </script>";
    } else {
        echo "Student Not Added";
    }
}

?>


<form action="" method="post">
    <input type="text" placeholder="Student Name" name="name" required minlength="3">
    <br><br>
    <input type="text" placeholder="Student City" name="city" required minlength="3">
    <br><br>
    <input type="submit" value="Add Student" name="ast">


</form>








<?php
require_once("./footer.php");
?>