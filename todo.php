<?php 
include "todo_navigation.php" ;
include "db.php";
?>

<?php

    if(isset($_POST['add_todo'])) {
        
        // $todo_id = $_POST['todo_id'];
        $user_todo = $_POST['user_todo'];
        $todo_date = $_POST['todo_date'];
        
        $query = "INSERT INTO todo(user_todo, todo_date) ";
        $query .= "VALUES('{$user_todo}', now()) ";

        $create_todo_query = mysqli_query($connection, $query);
        echo $create_todo_query;
    }

    ?>

<div class="container p-5 mt-5">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group mt-5">
            <label for="todo" class="text-light ms-5">Add todo</label>
            <input type="text" name="user_todo" class="form-control w-75 ms-5 text-light" style="background: none;">
        </div>

        <!-- <div class="form-group mt-5">
            <input type="text" name="todo_id" class="form-control w-75 ms-5 text-light" style="background: none;">
        </div> -->

        <div class="form-group">
            <label for="date" class="text-light ms-5">Add Date</label>
            <input type="date" name="todo_date" class="form-control w-75 ms-5 text-light" style="background: none;">
        </div>

        <input type="submit" name="add_todo" value="Add" class="ms-5 mt-2 btn btn-secondary opacity-50 w-75">
    </form>

    <table class="table table-dark table-striped mt-5 ms-5 text-light w-75 table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>To do</th>
                <th>Date</th>
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
                echo "<td><a href='todo.php?delete=$todo_id' class='btn btn-danger btn-sm'>X</a></td>";
                echo "</tr>";
            }

            
            ?>
        </tbody>
    </table>
</div>

<?php
//Delete Tasks
if(isset($_GET['delete'])) {
    $the_todo_id = $_GET['delete'];

    $query = "DELETE FROM todo WHERE todo_id = {$the_todo_id} ";
    $delete_query = mysqli_query($connection, $query);
    header("Location: todo.php");
}
?>