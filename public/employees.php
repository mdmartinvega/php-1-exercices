<?php
        $people = [
            ['name' => 'Carlos', 'email' => 'carlos@correo.com', 'age' => 20, 'city' => 'Benalmádena'],
            ['name' => 'Carmen', 'email' => 'carmen@correo.com', 'age' => 15, 'city' => 'Fuengirola'],
            ['name' => 'Carmelo', 'email' => 'carmelo@correo.com', 'age' => 17, 'city' => 'Torremolinos'],
            ['name' => 'Carolina', 'email' => 'carolina@correo.com', 'age' => 18, 'city' => 'Málaga'],
          ]; 
?>

<!DOCTYPE html>
<html lang="en">
<?php include("./partial/head.php")?>

<body>
          <?php
            include("./menu.php");
          ?>
          <br>
          <br>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>City</th>
            </tr>
        </thead>
        <tbody>
          <?php
            foreach($people as $person) : ?> 
                <tr>
                    <td>
                        <?php echo $person["name"]?>
                    
                    </td>
                    <td>
                        <?php echo $person["email"]?>
                    
                    </td>
                    <td>
                        <?php echo $person["age"]?>
                    </td>
                    <td>
                        <?php echo $person["city"]?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

                  
    </table>
    
</body>
</html>