<?php
    include("header.php");
    include ("connect.php");
?>

<div class="w-50 mx-auto">
    <h1 class="text-center bg-light">Contacts</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">MOD</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "select * from `contacts`";
                $result = mysqli_query($conn, $sql);
                if($result) {
                    while($data = mysqli_fetch_assoc($result)) {
                        $id = $data['id'];
                        $name = $data['name'];
                        $email = $data['email'];
                        $phone = $data['phone'];
                        echo '
            <tr>
                <th scope="row">'. $id .'</th>
                <td>'. $name .'</td>
                <td>'. $email .'</td>
                <td>'. $phone .'</td>
            <td>
            
            <form method="Get">
                <a href="update.php?id='.$id.'" class="btn btn-primary"> Update </a>
                <a href="delete.php?id='.$id.'" class="btn btn-danger"> Delete </a>
            </form> 
            </td>
            </tr>
                        ';
                    }
                } else {
                    die("Connection error");
                }
            ?>
            <!-- <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr> -->
        </tbody>
    </table>
    <a href="add.php" class="btn btn-primary">Add people</a>

</div>
<?php
    include("footer.php")
?>