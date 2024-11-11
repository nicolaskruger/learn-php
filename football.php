<?php
function points(array $games): int
{
    return array_reduce($games, function ($score, $plays) {
        [$x, $y] = array_map(function ($point) {
            return (int) $point;
        },  explode(":", $plays));
        if ($x > $y) return $score + 3;
        if ($x == $y) return $score + 1;
        return $score;
    }, 0);
} ?>

<?php
echo points(['1:0', '2:0', '3:0', '4:0', '2:1', '3:1', '4:1', '3:2', '4:2', '4:3'])
?>
<?php
echo points(['1:1', '2:2', '3:3', '4:4', '2:2', '3:3', '4:4', '3:3', '4:4', '4:4'])
?>
<?php
echo points(['0:1', '0:2', '0:3', '0:4', '1:2', '1:3', '1:4', '2:3', '2:4', '3:4'])
?>
<?php
echo points(['1:0', '2:0', '3:0', '4:0', '2:1', '1:3', '1:4', '2:3', '2:4', '3:4'])
?>
<?php
echo points(['1:0', '2:0', '3:0', '4:4', '2:2', '3:3', '1:4', '2:3', '2:4', '3:4'])
?>
