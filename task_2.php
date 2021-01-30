<?php 
$color=setColour(1);
function SetColour($number){
    $numberStr = str_split($number);
    $count = count($numberStr);

    for($i=0;$i<$count;$i++){
        if ($numberStr[$i] == 1) $color = '#FF0000';
        else if ($numberStr[$i] == 2) $color = '#00FF00';
        else if ($numberStr[$i] == 3) $color = '#FFFF00';
        else if ($numberStr[$i] == 4) $color = '#0000FF';
        else $color = "black";
        $numberStr[$i] = "<span style=color:$color>$numberStr[$i]</span>";
    }
    
    $numberStr = implode($numberStr);
    return $numberStr;
}
?>

<table class="city_list">
   <tr>
    <?php for($i=1;$i<6;$i++): ?>
        <td>
        <?php for($j=1;$j<11;$j++): ?>
            <?php echo(SetColour($i) ." x ".SetColour($j)." = ".SetColour($i*$j)."<br/>"); ?>
        <?php endfor; ?>
    </td>
   <?php endfor; ?>
</tr>
<tr>
  <?php next: for($i=6;$i<11;$i++): ?>
    <td>
    <?php for($j=1;$j<11;$j++): ?>
        <?php echo(SetColour($i)." x ".SetColour($j)." = ".SetColour($i*$j)."<br/>"); ?>
        <?php endfor; ?>
    </td>
    <?php endfor; ?>
</tr>
</table>
 
<style type="text/css">
    TABLE {
    border-collapse: collapse; /* Убираем двойные линии между ячейками */
    width: 500px; /* Ширина таблицы */
   }
   TH { 
    background: #fc0; /* Цвет фона ячейки */
    text-align: left; /* Выравнивание по левому краю */
   }
   TD {
    background: #fff; /* Цвет фона ячеек */
   }
   TH, TD {
    border: 1px solid black; /* Параметры рамки */
    padding: 4px; /* Поля вокруг текста */
   }
  </style>