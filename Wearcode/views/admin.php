<?php ob_start();

?>

<body>
    <section>
        <p>TEST</p>
    </section>
    
  
</body>
<?php

$titre = "admin";
$content = ob_get_clean();
require_once "template.php";
