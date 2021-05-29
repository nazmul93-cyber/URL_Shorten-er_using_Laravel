<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    
    <h5>Insert numbers to Calcualate : </h5>

    <form action="calcon" method="POST">
        @csrf
        <input type="number" step="any" name="num1">

        <select name="mathop" id="">

            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">*</option>
            <option value="div">/</option>

        </select>

        <input type="number" step="any" name="num2">  
        
        <input type="submit" name="submit" value="Calculate">      <br /><br />

    </form>

    @if(session('final'))
        <h3 style="color:#34495e;">Result : {{session('final')}}</h3>
    @endif
  
  

</body>
</html>
