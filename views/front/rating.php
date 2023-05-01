<?php
// Vérifier si l'utilisateur a déjà voté
if(isset($_COOKIE['rating'])) {
    echo 'Vous avez déjà voté.';
} else {
    // Vérifier si l'utilisateur a soumis le formulaire de vote
    if(isset($_POST['submit'])) {
        // Récupérer la note choisie par l'utilisateur
        $rating = $_POST['rating'];
        // Vérifier si la note est valide (entre 1 et 5)
        if($rating >= 1 && $rating <= 5) {
            // Stocker la note dans un cookie pour que l'utilisateur ne puisse pas voter plusieurs fois
            setcookie('rating', $rating, time() + (86400 * 30), "/"); // expire dans 30 jours
            echo 'Merci pour votre vote de ' . $rating . ' étoiles.';
        } else {
            echo 'Note invalide.';
        }
    } else {
        // Afficher le formulaire de vote
?>
<div class="rating">
  <form method="post">
    <input type="radio" name="rating" id="star5" value="5">
    <label for="star5"></label>
    <input type="radio" name="rating" id="star4" value="4">
    <label for="star4"></label>
    <input type="radio" name="rating" id="star3" value="3">
    <label for="star3"></label>
    <input type="radio" name="rating" id="star2" value="2">
    <label for="star2"></label>
    <input type="radio" name="rating" id="star1" value="1">
    <label for="star1"></label>
    <input type="submit" name="submit" value="Voter">
  </form>
</div>

<style>
.rating {
  display: inline-block;
}

.rating input[type="radio"] {
  display: none;
}

.rating label {
  color: #ddd;
  font-size: 30px;
  cursor: pointer;
}

.rating label:before {
  content: "\2605";
  margin-right: 5px;
}

.rating input[type="radio"]:checked ~ label {
  color: #FFC107;
}
</style>
<?php
    }
}
?>