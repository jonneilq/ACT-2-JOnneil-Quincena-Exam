<?php
function getFactorial($num)
{
    $fct = 1;
    for($i = 1; $i <= $num ;$i++)
        $fct = $fct * $i;
    return $fct;
}
?>

<!doctype html>
<html>
<head>

<title>Factorial</title>

</head>
<body>

<form action = "" method="post">
Enter the number whose factorial requires <Br />

<input type="number" name="number" id="number" maxlength="4" autofocus required/>

<input type="submit" name="submit" value="Submit" />
</form>

<?php
if(isset($_POST['submit']) and $_POST['submit'] == "Submit")
{
    if(isset($_POST['number']) and is_numeric($_POST['number']))
    {
        echo 'Factorial Of Number: <strong>'.getFactorial($_POST['number']).'</strong>';
    }
}

?>
</body>
</html>