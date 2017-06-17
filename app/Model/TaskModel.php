<?php

namespace App\Model;

use DB;
use Input;
use Crypt;

class TaskModel{
    
    public function show_task_data() {
       return DB::table('task')
            ->join('employee', 'task.assignee', '=', 'employee.id')
           
            ->select('task.priority','task.status','task.due_date', 'employee.name')
            ->get();
        
        
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

