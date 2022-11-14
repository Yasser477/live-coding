<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit briefs</title>
</head>
<body>
    
    <form action="{{'/updateBrief'}}" method="POST">
        @csrf
        @foreach ($brief as $row)  
        <input type="text" name="briefN" value="{{$row->name}}" placeholder="brief Name">
        <input type="date" name="startD" value="{{$row->start_date}}" placeholder="start date">
        <input type="date" name="endD" value="{{$row->end_date}}" placeholder="end date">
        <input type="text" name="Description" value="{{$row->description}}" placeholder="description">
        <input type="hidden" name="hiddenId" value="{{$row->id}}">
        

    <button type="submit">submit</button>
    @endforeach
    </form>



    <div>
        <table>
            <thead>
                <th>name tasks</th>
                <th>start_date</th>
                <th>end_date</th>
          
            </thead>
            @foreach ($allTasks as $item)
            <tbody>
                <td>{{$item->name}}</td>
                <td>{{$item->start_date}}</td>
                <td>{{$item->end_date}}</td>
                
                <td><a href="/editTask/{{$row->id}}"><button>edit</button></a></td>
                <td><a href="/DeleteTasks/{{$row->id}}"><button>delete</button></a></td>
                <td><a href="/ViewAddTask/{{$row->id}}"><button>Add Task</button></a></td>
            </tbody>
            @endforeach

            
        </table>
    </div>
</body>
</html>