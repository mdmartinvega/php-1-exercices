<?php header("Content-Type: application/json")?>

<?php
        $people = [
            ['name' => 'Carlos', 'email' => 'carlos@correo.com', 'age' => 20, 'city' => 'Benalmádena'],
            ['name' => 'Carmen', 'email' => 'carmen@correo.com', 'age' => 15, 'city' => 'Fuengirola'],
            ['name' => 'Carmelo', 'email' => 'carmelo@correo.com', 'age' => 17, 'city' => 'Torremolinos'],
            ['name' => 'Carolina', 'email' => 'carolina@correo.com', 'age' => 18, 'city' => 'Málaga'],
          ]; 
?>

{<?php foreach ($people as $person) : ?>
    {"name" : "Carlos", "email" : "carlos@correo.com", "age" : 20, "city" : "Benalmádena"},
    {"name" : "Carmen", "email" : "carmen@correo.com", "age" : 15, "city" : "Fuengirola"}
<?php endforeach; ?>
}



           