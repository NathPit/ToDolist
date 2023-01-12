<?php
echo '<h1>La To Do List de Nathan PITIOT</h1>';
session_start();    // Debut de la session

// demarage de la todolist avec la variable de session
if(isset($_SESSION['tache'])) {
    $tache = $_SESSION['tache'];
} else {
    $tache = array();
}

// Vérifier si une nouvelle tache est ajouter
if(isset($_POST['task'])) {
    // Ajouter la tache à la liste
    array_push($tache, $_POST['task']);
    // Stocker la liste de taches dans la variable de session
    $_SESSION['tache'] = $tache;
}

// Afficher la liste de taches en HTML avec echo 
echo '<ul>'; //debut balise liste
foreach($tache as $task) { //foreach permet parcourir des tableaux
    echo '<li>' . $task . '</li>'; //mettre la variable $task dans la liste et donc s'adapte a la valeur de la variable
}
echo '</ul>'; //fin balise liste

// Formulaire pour ajouter une nouvelle tache fais avec du code html dans le echo
echo '<form method="post">'; 
echo '<input type="text" name="task">';
echo '<input type="submit" value="Ajouter">';
echo '</form>';
?>
