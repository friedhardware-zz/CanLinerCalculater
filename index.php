<div style="position: absolute;
  top: 50%;
  left: 50%;
  width: 200px;
  height: 200px;
  margin: -100px 0 0 -100px;">
<form name="myform" action="/Demo.php" method="POST">
<h3>Please select a shape: </h3> 
<input type="radio" name="group1" value="Circle"> Circle<br>
<input type="radio" name="group1" value="Square"> Square<br>
<input type="radio" name="group1" value="Rectangle" checked> Rectangle <br>
<input type="radio" name="group1" value="HalfCircle"> Half-Circle <br>
<h3>Enter the dimensions:</h3>
Width: <input type="text" name="width"><br>
Depth: <input type="text" name="depth"><br>
Height: <input type="text" name="height">



<input type="submit" value="Submit">
</form>
</div>