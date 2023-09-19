<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
        // Code PHP xử lý validate
        if (!empty($_POST['contact_action']))
        {
             
        }
        ?>
    <form method='post' action='contact.php' enctype="multipart/form-data">

        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter a name" name="name">
            <?php echo isset($error['name']) ? $error['name'] : ''; ?>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" placeholder="Enter a email" name="email">
            <?php echo isset($error['email']) ? $error['email'] : ''; ?>
        </div>

        <p>Gender:</p>
        <input type="radio" id="nam" name="gioitinh" value="0">
        <label for="html">Nam</label><br>
        <input type="radio" id="nu" name="gioitinh" value="1">
        <label for="css">Nu</label><br>

        <input type="checkbox" id="vehicle1" name="vehicle1" value="Reading">
        <label for="vehicle1"> Reading</label><br>
        <input type="checkbox" id="vehicle2" name="vehicle2" value="Coding">
        <label for="vehicle2">Coding</label><br>
        <input type="checkbox" id="vehicle3" name="vehicle3" value="Coder">
        <label for="vehicle3">Coder</label>

        <div class="form-group">
            <strong>Bio:</strong>
            <textarea name="bio" id="bio"></textarea>
            <?php echo isset($error['bio']) ? $error['bio'] : ''; ?>
        </div>


        <button type="submit" class="btn btn-primary">Submit button</button>
    </form>
</body>

</html>