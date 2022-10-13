<?php 
include "todo_navigation.php";
include "db.php";
 ?>

<section class="p-5 mt-5">
    <div class="container">
        <h1 class="text-light opacity-50 fs5 ms-5">Bending Tasks</h1>

        <table class="table table-dark table-striped mt-5 ms-5 text-light w-75 table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>To do</th>
                    <th>Date</th>
                    <th>Task Status</th>
                    <th>Delete Task</th>
                </tr>
            </thead>
            <tbody>
                <?php
            
            $query = "SELECT * FROM todo ";
            $select_todolist = mysqli_query($connection, $query);

            while($row = mysqli_fetch_assoc($select_todolist)) {
                $todo_id = $row['todo_id'];
                $user_todo = $row['user_todo'];
                $todo_date = $row['todo_date'];
                $todo_status = $row['todo_status'];

                echo "<tr>";
                echo "<td>$todo_id</td>";
                echo "<td>$user_todo</td>";
                echo "<td>$todo_date</td>";
                echo "<td><a href='bending.php?incomplete=$todo_id' class='text-decoration-none text-light'>Incomplete</a></td>";
                echo "<td><a href='bending.php?delete=$todo_id' class='btn btn-danger btn-sm'>X</a></td>";
                echo "</tr>";
            }

            
            ?>
            </tbody>
        </table>
    </div>
</section>

<?php
//Tasks Status
if(isset($_GET['completed'])) {
    $the_todo_id = $_GET['completed'];

    $query = "UPDATE todo SET todo_status = 'completed' WHERE todo_id = $the_todo_id ";
    $completed_query = mysqli_query($connection, $query);
    echo $completed_query;
    die;
} elseif (isset($_GET['incomplete'])) {
    $the_todo_id = $_GET['incomplete'];

    $query = "UPDATE todo SET todo_status = 'incomplete' WHERE todo_id = $the_todo_id ";
    $incomplete_query = mysqli_query($connection, $query);
}

//Delete Tasks
if(isset($_GET['delete'])) {
    $the_todo_id = $_GET['delete'];

    $query = "DELETE FROM todo WHERE todo_id = {$the_todo_id} ";
    $delete_query = mysqli_query($connection, $query);
    header("Location: bending.php");
}




?>