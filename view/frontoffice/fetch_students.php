<?php
include('dbcon.php');

$search = isset($_GET['search']) ? trim($_GET['search']) : '';

// Prepare the SQL query based on the search term
$query = "SELECT * FROM students";
if ($search !== '') {
    $query .= " WHERE fullname LIKE :search OR email LIKE :search";
}

try {
    $statement = $conn->prepare($query);

    // If there's a search term, bind the parameter
    if ($search !== '') {
        $statement->bindValue(':search', '%' . $search . '%');
    }

    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_OBJ);

    // Check if there are results
    if ($result) {
        foreach ($result as $row) {
            echo "
            <tr>
                <td>{$row->id}</td>
                <td>{$row->fullname}</td>
                <td>{$row->email}</td>
                <td>{$row->password}</td>
                <td>{$row->configpassword}</td>
                <td><a href='student-edit.php?id={$row->id}' class='btn btn-primary'>Edit</a></td>
                <td>
                    <form action='code.php' method='POST'>
                        <button type='submit' name='delete_student' value='{$row->id}' class='btn btn-danger'>Delete</button>
                    </form>
                </td>
            </tr>";
        }
    } else {
        echo "<tr><td colspan='8'>No records found.</td></tr>";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
