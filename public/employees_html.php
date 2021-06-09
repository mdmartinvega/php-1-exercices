<!DOCTYPE html>
<html lang="en">
<?php include('./partial/head.php')?>

<body>

    <<?php include $_SERVER['DOCUMENT_ROOT'] . '/menu.php'; ?>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Edad</th>
                <th>Ciudad</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($people as $person) : ?>
                <tr>
                    <td><?= $person['id'] ?></td>
                    <td><?= $person['name']?></td>
                    <td><a href="/employees.php?id=<?= $person['id']?>"><?= $person['email']?></a></td>       
                    <td><?= $person['age']?></td>           
                    <td><?= $person['city']?></td>           
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?php if(isset($_GET['message'])) :?>
        <p><?= $_GET['message']; ?></p>
    <?php endif; ?>
                 

    <hr/>
    <!-- multipart form data para cuando añadimos un fichero -->
    <form method="POST" action="/employees_add.php" enctype= "multipart/form-data"> 
        <label for="name">Nombre</label>
        <input type="text" id="name" name="name" required/>
    <br/>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required/>
    <br/>
        <label for="age">Edad</label>
        <input type="number" id="age" name="age" required/>
    <br/>
        <label for="city">Ciudad</label>
        <input type="text" id="city" name="city" />
    <br/>
        <label for="archivo">Archivo</label>
        <input type="file" id="archivo" name="archivo" />
    <hr/>
        <input type="submit" value="Enviar"/>
    </form>
 
</body>
</html>