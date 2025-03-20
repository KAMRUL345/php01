<?php
require_once("./header.php");
$sql = "SELECT * FROM `users` ORDER BY `id` DESC";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    echo "No Students Found";
} else {

?>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>SN</td>
            <td>Name</td>
            <td>City</td>
            <td>Actions</td>
        </tr>
        <?php
        $sn = 1;
        while ($row = $result->fetch_object()) {
        ?>
            <tr>
                <td><?= $sn++ ?></td>
                <td><?= $row->name ?></td>
                <td><?= $row->city ?></td>
                <td>
                    <a href="./editStudent.php?id=<?= $row->id ?>"><button>Edit</button></a>
                    <a href="./deleteStudent.php?id=<?= $row->id ?>"><button>Delete</button></a>
                </td>
            </tr>

        <?php
        }
        ?>
    </table>



<?php
}
?>








<?php
require_once("./footer.php");
?>