<html>
    <head>
        <style>
         table td{padding:10px; border-left: 1px solid #ccc; border-bottom: 1px solid #ccc;}
         table th{ border-left: 1px solid #ccc; border-bottom: 1px solid #ccc; padding: 10px;}
         table{border:1px solid #ccc; }
            
        </style>   
    </head>
    <body>
        <table border='0' cellspacing='0' cellpadding='0'>
            <thead>
                
                <tr>
                    <th>ID</th>
                    <th>Assignee</th>
                    <th>Summary</th>
                    
                    
                    <th>Status</th>
                    <th>Priority</th>
                    <th>Comment</th>
                    <th>Due Date</th>


                </tr>
            </thead>
            <tbody>
                <?php $i = 0; ?>
                @foreach($task_list as $task)
                <?php $i++; ?>
                <tr>
                    <td>{!! $task->id !!}</td>
                     <td><span class="responsiveExpander"></span>{!! $task->employee_name !!}</td>
                    <td><span class="responsiveExpander"></span>{!! $task->summary !!}</td>
                   
                   
                    <td>{!! $task->status_name !!}</td>
                    <td>{!! $task->priority_name !!}</td>
                     <td>{!! $task->comment !!}</td>
                    <td>{!! $task->due_date !!}</td>

                </tr>
                @endforeach
            </tbody>
        </table>

    </body>
</html>