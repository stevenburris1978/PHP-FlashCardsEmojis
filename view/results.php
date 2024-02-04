<main class="main-results">
    <?php
    $cards = null;
    for ($i =1; $i <= 12; $i++) {
        $results = $number * $i;
        $cards .= "<div class='card' tabindex='0'>
                        <div class='card-front'>
                            {$number} x {$i}
                        </div>
                        <div class='card-back'>
                            {$results}
                        </div>
                    </div>";
    }
    echo $cards;
    ?>
</main>