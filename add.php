<?php
    include "header.php";
    include "connect.php";
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $sql = "insert into contacts (name, email, phone) values('$name', '$email', '$phone')";
        $result = mysqli_query($conn, $sql);
        if($result) {
            header("Location:data.php");
        } else {
            die ("Something went wront");
        }
    }
?>
<div class="bg-secondary" style="height: 100vh;">
    <div class="pt-5">
        <h1 class="text-center">Add people</h1>
        <div class="w-25 mx-auto">
            <form method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1"
                        aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                        aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" id="exampleInputEmail1"
                        aria-describedby="emailHelp" required>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>

        </div>

    </div>

</div>
<?php
    include "header.php";
?>