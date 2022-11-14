<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add brief</title>
</head>
<body>
    
    <form action="/addbrief" method="POST">

        @csrf
        <input type="text" name="briefName" placeholder="brief Name">
        <input type="date" name="startDate" placeholder="start date">
        <input type="date" name="endDate" placeholder="end date">
        <input type="text" name="description" placeholder="description">
        <button type="submit">submit</button>

    </form>

</body>
</html>