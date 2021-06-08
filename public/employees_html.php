<!DOCTYPE html>
<html lang="en">
<?php include('./partial/head.php')?>

<body>

    <<?php include $_SERVER['DOCUMENT_ROOT'] . '/menu.php'; ?>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Edad</th>
                <th>Ciudad</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($people as $person) : ?>
                <tr>
                    <td><?= $person['name']?></td>
                    <td><?= $person['email']?></td>           
                    <td><?= $person['age']?></td>           
                    <td><?= $person['city']?></td>           
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

 

</body>
</html>