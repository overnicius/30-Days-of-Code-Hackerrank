<?php 

function solve($meal_cost, $tip_percent, $tax_percent) {
        $tip = ($meal_cost/100) * $tip_percent;
        $tax = ($tax_percent/100) * $meal_cost;
        
        $total_cost = $meal_cost + $tip + $tax;
        
        echo round($total_cost);
    
        
}

$meal_cost = doubleval(trim(fgets(STDIN)));

$tip_percent = intval(trim(fgets(STDIN)));

$tax_percent = intval(trim(fgets(STDIN)));

solve($meal_cost, $tip_percent, $tax_percent);

?>