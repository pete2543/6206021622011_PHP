
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="addgood2.php " method="get">
    <table align="center" border="1">
    <tr>
    <td align="center" colspan="2">Add Goods</td>
    </tr>
    <tr>
    <td width="150px">Goods ID</td>
    <td><input type="number" name="id"></td>
    </tr>

    <tr>
    <td>Goods Name</td>
    <td><input type="text" name="name"></td>
    </tr>

    <tr>
    <td>Goods Price</td>
    <td><input type="number" name="price"></td>
    </td>
    </tr>
    
    <tr>
    <td>Goods Quanity</td>
    <td><input type="number" name="quantity"></td>
    </td>
    </tr>
    
    <tr>
    <td align="center" colspan="2"> <input type="submit" name="submit">
    <input type="reset" name="clear"></td>
    </tr>
   
    
    </table>
    </form>
</body>
</html>