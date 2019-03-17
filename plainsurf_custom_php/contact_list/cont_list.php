<center><table  border="1">
        <th>firstname</th>
        <th>lastname</th>
        <th>email</th>
        <th>mobile</th>
        <th>details</th>
        <th>opt</th>
        <th>Action</th>
        

        <?php
        $conn = mysqli_connect("localhost", "root", "123", "form");
        if ($conn->connect_error) {
            die("Connection failed" . $conn->connect_error);
        }

        $sql = "SELECT id,firstname,lastname,email,mobile,details,opt FROM contact";
        $result = $conn->query($sql);
      
            while ($row = $result->fetch_assoc()) {
                    ?>
        <tr id="<?php echo $row['id'] ?>">
            <td><?php echo $row['firstname'] ?></td>
            <td><?php echo $row['lastname'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['mobile'] ?></td>
            <td><?php echo $row['details'] ?></td>
            <td><?php echo $row['opt'] ?></td>
            <td><button class="btn btn-danger btn-sm remove">Delete</button></td>
        </tr>
        
        <?php } ?>
    </table></center>


