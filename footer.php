<?php include'head.php'
?>

<footer>
<div class="value-form">
<form method="post" action="form_submission.php">
                <input name="address" type="text" placeholder="enter address" id="address" required>
                <input name="email" type="email" placeholder="enter email" id="email" required>
                <input name="bedrooms" type="text" placeholder="number of bedrooms" id="bedrooms">
                <button type="submit" name="submit" class="button button--secondarycolor">Enquire Now!</button>
            </form>
</div>
<ul class="main-nav nav-footer">
    <li><a href="about.php" class="nav-links">About</a></li>
    <li><a href="pricing.php" class="nav-links">Pricing</a></li>
    <li><a href="blog.php" class="nav-links">Blog</a></li>
</ul>

</footer>


<script src="https://code.jquery.com/jquery-3.4.0.min.js"
    integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous">
</script>
<script src="main.js"></script>

</html>