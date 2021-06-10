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
                <th>Acciones</th>
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
                    <td><button class="employees-delete-button" value="Eliminar" data-person='<?= json_encode($person); ?>'>Eliminar</button></td>         
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?php
        if (isset($_GET['id'])) {
        $query = 'SELECT * FROM employees WHERE id = :identifiador';
        $stm = $dbConnexion->prepare($query);
        $stm->bindParam(':identifiador', $_GET['id']);
        $stm->execute();
        $currentPerson = $stm->fetch(PDO::FETCH_ASSOC);
        } elseif (isset($_GET['email'])) {
        $query = 'SELECT * FROM employees WHERE email = :correo';
        $stm = $dbConnexion->prepare($query);
        $stm->bindParam(':correo', $_GET['email']);
        $stm->execute();
        $currentPerson = $stm->fetch();
        }
    ?>

    <?php if(isset($_GET['message'])) :?>
        <p><?= $_GET['message']; ?></p>
    <?php endif; ?>
                 

    <hr/>

    <?php
        $action = isset($currentPerson) ? '/employees_edit.php' : '/employees_add.php';
    ?>
    <!-- multipart form data para cuando añadimos un fichero -->
    <form method="POST" action="<?= $action; ?>" enctype= "multipart/form-data"> 
    <?php if(isset($currentPerson)): ?>
        <input type="hidden" id="id" name="id" value="<?= $currentPerson['id']; ?>"/>
    <?php endif; ?>
        <label for="name">Nombre</label>
        <input type="text" id="name" name="name" value="<?php $currentPerson['name']; ?>" required/>
    <br/>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php $currentPerson['email']; ?>" required/>
    <br/>
        <label for="age">Edad</label>
        <input type="number" id="age" name="age" value="<?php $currentPerson['age']; ?>" required/>
    <br/>
        <label for="city">Ciudad</label>
        <input type="text" id="city" name="city" value="<?php $currentPerson['city']; ?>"/>
    <br/>
        <label for="archivo">Archivo</label>
        <input type="file" id="archivo" name="archivo" />
    <hr/>
        <input type="submit" value="Enviar"/>
    </form>

    <?php require './partial/footer.php'; ?>
 
</body>
</html>