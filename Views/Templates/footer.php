</div>
<link rel="stylesheet" href="../../Public/css/stylefooter.css">
    <footer id="footer">
        <a class="bottom">Accords de confidentialité</a><a class="bottom">Termes d'utilisation</a><a class="bottom">Nous contacter</a><a class="bottom">A propos de nous</a>
        <!--        <p>Ce site a été réaliser par un groupe d'étudiant de l'Iut d'informatique d'Aix-Marseille composé de :..... .... ..... ..... ...... ...... ...... .....</p>-->
    </footer>
<script src="../../Public/js/menu.js"></script>

<script src="../../Public/js/logged.js"></script>
<?php
    echo $_SESSION['login'];
    echo $_SESSION['firstName'];
    if($_SESSION['login'] == 'ok') {
     echo '<script type="text/javascript">' . 'loggedMenu('.' \''. $_SESSION['Surname'] .'\' '.');'     . '</script>';
} ?>
</body>

</html>
