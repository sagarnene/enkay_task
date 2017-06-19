<?php

namespace App\Model;

use DB;
use Input;
use Crypt;

class TaskModel {

    public function show_task_data() {

        return DB::select('select  e1.name as manager, e2.name as assignee, t.status,t.id, t.priority, t.due_date
            from employee e1, task t, employee e2
            where e1.id = t.manager
            and e2.id = t.assignee');
    }

    public function show_notification_data() {

        return DB::table('notification')->get();
    }

    public function show_assignee_task($id,$column) {

        return DB::select('select  e1.name as manager, e2.name as assignee, t.status,t.id, t.priority, t.due_date
            from employee e1, task t, employee e2
            where e1.id = t.manager
            and e2.id = t.assignee
            and t.'.$column.'=' . $id);
    }

    public function show_assignee_notification($id,$column) {
        /*return DB::select('SELECT n.id, n.expiry_date, n.comments
                            FROM emp_ntf en, notification n
                            where en.ntf_id=n.id
                            and en.assignee=3');
         
         */

        return DB::table('notification')->where('id', $id)->get();
    }

    public function save_data($table, $data) {
        return DB::table($table)->insert($data);
    }

    public function update_data() {
        return DB::table($table)->where($column, $id)->update($data);
    }
    public function view_filtered_data($table, $cloumn,$id) {

        return DB::table($table)->where($cloumn,$id)->get();
    }
    public function view_data($table, $cloumn) {

        return DB::table($table)->get();
    }

}
