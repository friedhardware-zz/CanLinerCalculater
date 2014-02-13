<div style="position: absolute;
  top: 50%;
  left: 50%;
  width: 300px;
  height: 200px;
  margin: -100px 0 0 -100px;">
<?php

//Function used to find bag size for a rectangluar trash can.
//Uses the upper diameter ('Udiameter'), the depth and the height.
//Calculate the overhang at the top of the can and the extra compensation required
//for the bottom of the can to be filled by the trash can.
function Rectangle($Udiameter, $depth, $height)
{
    $pi=3.1415; 
    $perimeter=(2*$depth+2*$Udiameter);
    $overhang=pow(floor(tan($pi/12)*(($perimeter/4)*(1/2))),1.2);
    $compensation=pow($height*(2/10), 1.12);
//    $gallons= (pow(($Udiameter/sqrt(2)),2) * $height) * 0.0037202;
//    echo 'The can is '; echo round($gallons,2); echo ' gallons. <br />';
//    echo 'The perimeter of the can is '; echo floor($perimeter); echo ' inches.<br />';
//    echo 'The bag compensation is '; echo floor($compensation+$overhang); echo "  inches.<br />";
    echo 'Width is '; echo round(($perimeter/2)-1, 3); echo "  inches.<br />";
    echo 'Gusset Height is '; echo floor($overhang+$height+$compensation); echo "  inches.<br />";
    echo 'Star Height is '; echo floor($overhang+$height+$compensation+5); echo "  inches.<br />";
}
//Function used to find bag size for a Circular trash can.
//Uses the upper diameter ('Udiameter') and the height.
//Calculate the overhang at the top of the can and the extra compensation required
//for the bottom of the can to be filled by the trash can.
function Circle($Udiameter, $height)
{
    $pi=3.1415; 
    $circumference=(($Udiameter*$pi));
    $overhang=1+pow(floor(tan($pi/12)*($Udiameter/2)),1.2);
    $compensation=pow($height*(2/10), 1.18);
//  $gallons= (pow(($Udiameter/2),2)*$pi*$height) * 0.0037202;
//  echo 'The can is '; echo round($gallons,2); echo ' gallons. <br />';
//  echo 'The circumference of the can is '; echo floor($circumference); echo ' inches.<br />';
//  echo 'The bag compensation is '; echo floor($compensation+$overhang); echo "  inches.<br />";
    echo 'Width is '; echo round($circumference/2, 2); echo "  inches.<br />";
    echo 'Gusset Height is '; echo round($overhang+$height+$compensation,2); echo "  inches.<br />";
    echo 'Star Height is '; echo round($overhang+$height+$compensation+5,2); echo "  inches.<br />";
}
//Function used to find bag size for a semi-circular trash can.
//Uses the upper diameter ('Udiameter') and the height.
//Calculate the overhang at the top of the can and the extra compensation required
//for the bottom of the can to be filled by the trash can.
function HalfCircle($Udiameter, $height)
{
    $pi=3.1415; 
    $circumference=(($Udiameter*$pi)/2+$Udiameter);
    $overhang=1+pow(floor(tan($pi/12)*($Udiameter/2)),1.2);
    $compensation=pow($height*(2/10), 1.12);
//  $gallons= (pow(($Udiameter/2),2)*$pi*$height) * 0.0037202;
//  echo 'The can is '; echo round($gallons,2); echo ' gallons. <br />';
//  echo 'The circumference of the can is '; echo floor($circumference); echo ' inches.<br />';
//  echo 'The bag compensation is '; echo floor($compensation+$overhang); echo "  inches.<br />";
    echo 'Width is '; echo floor($circumference/2)-1; echo "  inches.<br />";
    echo 'Gusset Height is '; echo floor($overhang+$height+$compensation); echo "  inches.<br />";
    echo 'Star Height is '; echo floor($overhang+$height+$compensation+5); echo "  inches.<br />";
}
//Function used to find bag size for a Square trash can.
//Uses the measure of one side ('Side') and the height.
//Calculate the overhang at the top of the can and the extra compensation required
//for the bottom of the can to be filled by the trash can.
function Square($Side, $height)
{
    $pi=3.1415; 
    $circumference=(($Side*4));
    $overhang=1+pow(floor(tan($pi/12)*($Side/2)),1.2);
    $compensation=pow($height*(2/10), 1.12);
//  $gallons= (pow(($Side/sqrt(2)),2) * $height) * 0.0037202;
//  echo 'The can is '; echo round($gallons,2); echo ' gallons. <br />';
//  echo 'The circumference of the can is '; echo floor($circumference); echo ' inches.<br />';
//  echo 'The bag compensation is '; echo floor($compensation+$overhang); echo "  inches.<br />";
    echo 'Width is '; echo floor($circumference/2)-1; echo "  inches.<br />";
    echo 'Gusset Height is '; echo floor($overhang+$height+$compensation); echo "  inches.<br />";
    echo 'Star Height is '; echo floor($overhang+$height+$compensation+5); echo "  inches.<br />";
}
echo 'For a '. $_POST['group1'].' can with deminsions of '.$_POST['width'].'x'.$_POST['height'].'<br><br>';

if (isset($_POST['group1'])) {
    if ( $_POST['group1'] == 'Circle' ){
            Circle($_POST['width'],$_POST['height']);
    } elseif ( $_POST['group1'] == 'Square' ){
            Square($_POST['width'],$_POST['height']);
    }elseif ( $_POST['group1'] == 'Rectangle' ){
            Rectangle($_POST['width'],$_POST['depth'], $_POST['height']);
    }elseif ( $_POST['group1'] == 'HalfCircle' ){
            HalfCircle($_POST['width'],$_POST['height']);
    }
}


//Rectangle(25,25); // H:33 W:33 *this output can't be less than this*
//Rectangle(23,30); // H:39 W:30 *this output can't be less than this*
//Rectangle(19,20); // H:25 W:24 *this output can't be less than this*
//Circle(7.5,10);   // H:16 W:11.4 *actual size used* ..not bags in product list would fit
?>

<script>
function goBack()
  {
  window.history.back()
  }
</script>

<br>
<br>
<button onclick="goBack()">Go Back</button>
</div>
