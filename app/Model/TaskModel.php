<?php

namespace App\Model;

use DB;
use Input;
use Crypt;

class TaskModel{
    
    public function show_task_data() {
       /*DB::table('task')
            ->join('employee', 'task.assignee', '=', 'employee.id')
           
            ->select('task.priority','task.status','task.due_date', 'employee.name')
            ->paginate(2);
       */
        return DB::select('select  e1.name as manager, e2.name as assignee, t.status, t.priority, t.due_date
from employee e1, task t, employee e2
where e1.id = t.manager
and e2.id = t.assignee');
        
    }
    public function show_notification_data() {
       /* $users = DB::table('users')
            ->join('contacts', 'users.id', '=', 'contacts.user_id')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.*', 'contacts.phone', 'orders.price')
            ->get();*/
        
        return DB::table('notification')->get();
    }
    public function save_data($table,$data) {
          return DB::table($table)->insert($data);
    }
    public function update_data() {
        return DB::table($table)->where($column, $id)->update($data);
    }
    
    public function view_data($table,$cloumn) {
       
        return DB::table($table)->get();
    }
}

