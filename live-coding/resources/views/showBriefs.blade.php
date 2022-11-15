<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>briefs</title>
</head>
<body>
    
    
        
   
        <div>
            <table>
                <thead>
                    <th>name</th>
                    <th>start_date</th>
                    <th>end_date</th>
                    <th>description</th>
                </thead>
                @foreach ($Brief as $row)
                <tbody>
                    <td>{{$row->name}}</td>
                    <td>{{$row->start_date}}</td>
                    <td>{{$row->end_date}}</td>
                    <td>{{$row->description}}</td>
                    <td><a href="/editBrief/{{$row->id}}"><button>edit</button></a></td>
                    <td><a href="/DeleteBrief/{{$row->id}}"><button>delete</button></a></td>
                    <td><a href="/ViewAddTask/{{$row->id}}"><button>Add Task</button></a></td>
                    <td><a href="index/{{$row->id}}"><button>assign</button></a></td>
                </tbody>
                @endforeach

                
            </table>
        </div>
         
</body>
</html>