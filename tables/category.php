<?php

include "../helpers/db.php"; 

$sql = "SELECT * FROM vehicle_category";
if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        echo '<table class="table table-bordered table-striped">';
            echo "<thead>";
                echo "<tr>";
                    echo "<th>Category Id</th>";
                    echo "<th>Category Name</th>";
                    echo "<th>Action</th>";
                echo "</tr>";
            echo "</thead>";

            echo "<tbody>";
        while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                    echo "<td>" . 'C/' .$row['category_id'] . "</td>";
                    echo "<td>" . $row['category_name'] . "</td>";
                    echo "<td>";
                        echo '<a href="#" class="mr-3" title="View Record" >
                                                            <span class="fa fa-eye"></span></a>';
                        echo '<a href="#" class="mr-3" title="Update Record" >
                                                            <span class="fa fa-pencil"></span></a>';
                        echo '<a href="#" title="Delete Record" > 
                                                            <span class="fa fa-trash"></span></a>';
                    echo "</td>";
                echo "</tr>";
        }
            echo "</tbody>";
            echo "</table>";

        // Free result set
        mysqli_free_result($result);
    } else {
        echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
    }
} else {
    echo "Oops! Something went wrong. Please try again later.";
}
