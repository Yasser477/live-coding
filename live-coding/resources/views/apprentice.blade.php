<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div>
        <table>
            <thead>
                <th>name</th>
                <th>secondName</th>
                <th>end_date</th>
                <th>assign</th>
            </thead>
            @foreach ($all as $row)
            <tbody>
                <td>{{$row->name}}</td>
                <td>{{$row->secondName}}</td>
                <td>{{$row->email}}</td>
                
                <td> <form action="assignToStudent/{{$row->id}}/{{$id}}" method="post">
                    @csrf
                    <input type="hidden" value="{{$id}}" name="idbrief">
                    <input type="hidden" value="{{$row->id}}" name="idStudent">

                    <button type="submit">attach</button>
                    </form>
                </td>
            </tbody>
           
            @endforeach

            
        </table>
        
    </div>
</body>
</html>