<?php  

    require $_SERVER['DOCUMENT_ROOT'] . '/lib/app.php'; 

    //isset válida si está definida la variable o algún item del array y es diferente de null
    // $query = (isset($_GET['id'])) 
    // ? 'SELECT * FROM employees WHERE id=' .$_GET['id'] 
    // : 'SELECT * FROM employees';
    //POdríamos utilizar otros parámetros como email, name, etc con un condicional if/elseif

    $query = 'SELECT * FROM employees';
    if (isset($_GET['id'])) {
        $query = 'SELECT * FROM employees WHERE id = :identifiador';
    } elseif (isset($_GET['email'])) {
        $query = 'SELECT * FROM employees WHERE email = :correo';
    }

    // $stm = $dbConnexion->query($query);

    $stm = $dbConnexion->prepare($query); //Hace lo mismo que query pero evita el entrecomillado
    
    if (isset($_GET['id'])) {
        $stm->bindParam(':identifiador', $_GET['id']);
    } elseif (isset($_GET['email'])) {
        $stm->bindParam(':correo', $_GET['email']);
    }
    
    $stm->execute();

    $people = $stm->fetchAll(PDO::FETCH_ASSOC);

?>
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/employees_'.(isset($_GET['format']) ? $_GET['format'] : 'html').'.php';