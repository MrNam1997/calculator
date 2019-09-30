<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            background: #555;
        }

        .content {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 10px;
        }
    </style>
    <title>Calculator</title>

</head>
<body>
<div class ="content">
<form action="add" method="get" id="form">

    <p style="text-align: center">result = {{$result}}
    <fieldset style="width: 400px;background-color: pink">
        <legend>Calculator</legend>
        First number:
        <input type="number" name="firstNumber" style="width: 80%"><br>
        Second number:
        <input type="number" name="secondNumber" style="width: 80%"><br>
        <select id="operation">
            <option value="add">Addition</option>
            <option value="minus">Minus</option>
        </select>
        <button class="btn btn-primary btn-sm">submit</button>
    </fieldset>
</form>
</div>
<script>
    let select = document.getElementById("operation");
    select.onchange = function () {
        document.getElementById("form").action = select.value;
        ``
    }
</script>

</body>
</html>
