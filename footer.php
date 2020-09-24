
<div class="flex-container">

<div class="flex-item-debug">

<?php
    printf("DEBUG: App node => %s\n", getenv("HOSTNAME"));
?>

</div>

<div class="flex-item-debug">

<?php
include("db.php");
?>

</div>

</div>

</body>
</html>
