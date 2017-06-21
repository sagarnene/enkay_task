<?php

namespace App\Model;

use DB;
use Input;
use Crypt;

class TaskModel {

    public function show_task_data() {

        return DB::select('select  e1.name as manager, e2.name as assignee, t.status,t.id,s.name as status_name,p.name as priority_name, t.summary,t.description, t.priority, t.due_date
            from employee e1, task t, employee e2, status s, priority p 
            where s.id = t.status
            and p.id = t.priority
            and e1.id = t.manager
            and e2.id = t.assignee
            ');
    }

    public function show_notification_data() {

        return DB::table('notification')->get();
    }

    public function show_assignee_task($id,$column) {

        return DB::select('select  e1.name as manager, e2.name as assignee, t.status,t.id,s.name as status_name,p.name as priority_name, t.priority, t.due_date
            from employee e1, task t, employee e2, status s, priority p 
            where s.id = t.status
            and p.id = t.priority
            and e1.id = t.manager
            and e2.id = t.assignee
            and t.'.$column.'=' . $id);
    }

    public function show_assignee_notification($id,$column) {
       
        return DB::select('SELECT n.id, n.expiry_date, n.comments
                            FROM ntf_assignee en, notification n
                            where en.ntf_id=n.id
                            and en.assignee='.$id);
         
    }

    public function save_data($table, $data) {
        return DB::table($table)->insert($data);
    }

    public function update_data() {
        return DB::table($table)->where($column, $id)->update($data);
    }
    public function view_filtered_data($table, $cloumn,$id) {

        //return DB::table($table)->where($cloumn,$id)->get();
         return DB::select('select  e1.name as employee_name, tc.comment, tc.added_on,tc.added_by,tc.task_id,tc.id
            from employee e1, task_comments tc 
            where tc.added_by = e1.id
            and tc.task_id=' . $id);
    }
    public function show_one_data($table, $cloumn,$id) {

        return DB::table($table)->where($cloumn,$id)->first();
    }
    public function view_data($table, $cloumn) {

        return DB::table($table)->get();
    }

}
