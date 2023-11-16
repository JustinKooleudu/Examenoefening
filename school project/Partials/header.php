<div class="image">
    <img class="overheid-logo" src="../school project/overheid.png" alt="">
</div>
<div class="nav" id="nav">
    <section>
        <ul>
            <div class="Home">
                <li><button class="left nav-btn"><a href="index.php" >Home</a></button></li>
            </div>
            <div class="rest">
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) : ?>
                <li><button class="nav-btn"><a href="machtigingen_en_hulp.php">machtigingen en hulp</a></button></li>
                <li><button class="nav-btn"><a href="stem.php">Stem</a></button></li>
            <?php else : ?>
                <li><button class="nav-btn"><a href="login.php">Login</a></button></li>
                <li><button class="nav-btn"><a href="register.php">registreer</a></button></li>
            <?php endif; ?>
            <li><button class="nav-btn"><a href="locaties.php">locaties</a></button></li>
            <li><button class="nav-btn"><a href="contact.php">contact</a></button></li>
            </div>
        </ul>
    </section>
</div>