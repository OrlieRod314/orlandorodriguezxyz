<?php
// Authors: Rick Mercer and Orlando Rodriguez
//
class DatabaseAdaptor {
  private $DB; 
  public function __construct() {
    $dataBase ='mysql:dbname=orlie_comments;charset=utf8;host=127.0.0.1';
    $user ='orlie_comments';
    $password ='JxSLRkdutW'; // Empty string with XAMPP install
    try {
        $this->DB = new PDO ( $dataBase, $user, $password );
        $this->DB->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    } catch ( PDOException $e ) {
        echo ('Error establishing Connection');
        exit ();
    }
  }

/////////////////////////////////////////////////////////////

    public function getComments($article) {
        $stmt = $this->DB->prepare("SELECT * FROM Comments WHERE Article=:article");
        $stmt->bindParam(':article', $article);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function addComment($user, $comment, $article) {
        $user = htmlspecialchars($user);
        $comment = htmlspecialchars($comment);
        $article = htmlspecialchars($article);
        $stmt = $this->DB->prepare("INSERT INTO Comments (User, Comment, Article) VALUES (:user, :comment, :article)");
        $stmt->bindParam(':user', $user);
        $stmt->bindParam(':comment', $comment);
        $stmt->bindParam(':article', $article);
        $stmt->execute();
    }
}
?>