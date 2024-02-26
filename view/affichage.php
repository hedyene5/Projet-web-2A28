<?php
include '../controller/employerC.php';
$liste = new employerC();

if(isset($_POST['delete_id'])) {
    $delete_id = $_POST['delete_id'];
    $liste->delete($delete_id);
}

$employees = $liste->listEmployees();
?>

<body>
    <table>
        <?php
        foreach ($employees as $employe) {
        ?>
        <tr>
            <td><?php echo $employe['id'];?></td>
            <td><?php echo $employe['lastname'];?></td>
            <td><?php echo $employe['firstname'];?></td>
            <td><?php echo $employe['dob'];?></td>
            <td>
                <form method="post" action="">
                    <input type="hidden" name="delete_id" value="<?php echo $employe['id'];?>">
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        <?php
        } 
        ?>
    </table>
</body>

