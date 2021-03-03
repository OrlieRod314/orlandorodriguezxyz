<?php
// This file contains a bridge between the view and the model and redirects back to the proper page
// with after processing whatever form this code absorbs. This is the C in MVC, the Controller.
//
// Author: Orlando Rodriguez
//  
session_start (); // Not needed in Quotes1

require_once './DatabaseAdaptor.php';
 
$theDBA = new DatabaseAdaptor();

// Listing comments
if (isset ( $_GET ['todo'] ) && $_GET ['todo'] === 'getComments') {
    $arr = $theDBA->getComments($_SESSION['article']);
    unset($_GET ['todo']);
    echo getCommentsAsHTML($arr);
}

// Adding a comment
if (isset( $_POST['comment'])) {
    $theDBA->addComment($_POST['user'], $_POST['comment'], $_SESSION['article']);
    header('Location:../articles/' . $_SESSION['article'] . '.php');
}

function getCommentsAsHTML($arr) {
    $result = '';
    foreach ( $arr as $comment ) {
        $result .= '<fieldset>';
        $result .= '<legend>' . $comment['User'] . '</legend>';
        $result .= $comment ['Comment'];
        $result .= '</fieldset>';
    }
    return $result;
}
?>