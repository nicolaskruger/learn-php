<p>
    <?= "tag curta " ?>
</p>

<P>
    <?php
    echo "Hello, World!";
    $baiano_vivo = rand(0, 1) == 1;
    class Payment
    {
        public float $price;
        public string $name;
        public function __construct(float $price, string $name)
        {
            $this->price = $price;
            $this->name = $name;
        }
      
    }

    $tigrinho = new Payment(10, "tigrinho");
    $bicho = new Payment(100, "bicho");
    $sinuca = new Payment(1000, "sinuca");
    $contas = [$tigrinho, $bicho, $sinuca];
    $sum = array_reduce($contas, function($acc, $curr) {
        return $acc + $curr->price;
    }, 0)
    ?>
</P>
<p> baiano vai estar vivo ?
<p>
    <?php if ($baiano_vivo == true): ?>
<p>sem caixão</p>
<?php else: ?>
    <p>caixão fechado</p>
<?php endif; ?>

<ul>
    <?php for ($i = 0; $i < count($contas); $i++): ?>
        <li key="<?= $i ?>"><?= $contas[$i]->name ?> <?= $contas[$i]->price ?></li>
    <?php endfor; ?>
    <li> 
        total price:
        <?=$sum?>
    </li>
</ul>
</br>