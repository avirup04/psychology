<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true || $_SESSION['username'] != "admin") {
    header("Location:index.php");
    exit();
}


require_once '../config.php';


if (isset($_GET['delete'])) {
    $sl = intval($_GET['delete']);
    $delete_query = "DELETE FROM review WHERE sl = $sl";
    if (mysqli_query($conn, $delete_query)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: ";
    }
}

// Fetch data from the review table
$sql = "SELECT sl, firstname, lastname, email, message, date, stat FROM review";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Table</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .delete-button {
            color: red;
            cursor: pointer;
        }
    </style>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Welcome to the Dashboard</h1>
        <p>Hello, <?php echo $_SESSION['username']; ?>! You have successfully logged in.</p>
        <a href="logout.php" class="btn btn-outline-danger">Logout</a>
        <h2>Review List</h2>

        <table>
            <tr>
                <th>SL</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>

            <?php
            if (mysqli_num_rows($result) > 0) {
                // Output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["sl"] . "</td>";
                    echo "<td>" . $row["firstname"] . "</td>";
                    echo "<td>" . $row["lastname"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["message"] . "</td>";
                    echo "<td>" . $row["date"] . "</td>";
                    echo "<td>" . $row["stat"] . "</td>";
                    echo "<td><a href='?delete=" . $row["sl"] . "' class='delete-button'>Delete</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8'>No records found</td></tr>";
            }
            ?>

        </table>

        <?php
        // Close the database connection
        mysqli_close($conn);
        ?>
    </div>

</body>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</html>