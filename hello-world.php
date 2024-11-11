
<p>
    <?="tag curta "?>
</p>

<P>
    <?php
        echo "Hello, World!";
        $baiano_vivo = rand(0, 1) == 1;
    ?>
</P>
<p> baiano vai estar vivo ? <p>
<?php if ($baiano_vivo == true): ?>
    <p>sem caixão</p>
<?php else: ?>
    <p>caixão fechado</p>
<?php endif; ?>

