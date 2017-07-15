<?php

namespace App\Model;

use DB;
use Input;
use Crypt;

class TaskModel {

    public function show_task_data() {

        return DB::select('select  e1.name as manager, e2.name as primary_name, t.id,s.name as status_name,p.name as priority_name, t.summary,t.description, t.due_date, 
            ifnull(rf.frequency,"NA") as report_frequency, ifnull(v.name,"NA") as vendor_name, t.percentage
            from employee e1 inner join task t
				on e1.id = t.manager
            inner join employee e2
				on e2.id = t.primary
            inner join status s
				on s.id = t.status_id
			inner join priority p
				on p.id = t.priority_id
			left outer join task_report_frequency rf
            on rf.id = t.report_frequency_id
            left outer join vendor v
            on v.id = t.vendor_id            
            order by t.id DESC');
    }

    public function show_notification_data() {

        return DB::table('notification')->orderBy('id', 'desc')->get();
    }

    public function show_assignee_task($id, $column) {

        return DB::select('select  e1.name as manager, e2.name as primary_name, t.summary,t.description,t.id,
            s.name as status_name,p.name as priority_name, t.due_date,
            "NA2" as report_frequency, "NA2" as vendor_name, t.percentage
            from employee e1, task t, employee e2, status s, priority p 
            where s.id = t.status_id
            and p.id = t.priority_id
            and e1.id = t.manager
            and e2.id = t.primary
            and t.' . $column . '=' . $id.' order by t.id DESC');
    }

    public function show_assignee_notification($id, $column) {

        return DB::select('SELECT n.id, n.expiry_date, n.comments
                            FROM ntf_assignee en, notification n
                            where en.ntf_id=n.id
                            and en.assignee=' . $id.' order by n.id DESC');
    }

    public function save_data($table, $data) {
        return DB::table($table)->insert($data);
    }

    public function update_data($table,$data,$column,$id) {
        //var_dump($data);
        return  DB::table($table)->where($column, $id)->update($data);
        //exit;
    }

    public function view_filtered_data($table, $cloumn, $id) {

        //return DB::table($table)->where($cloumn,$id)->get();
        return DB::select('select  e1.name as employee_name, tc.comment, tc.added_on,tc.added_by,tc.task_id,tc.id
            from employee e1, task_comments tc 
            where tc.added_by = e1.id
            and tc.task_id=' . $id.' order by tc.id DESC');
    }

    public function show_one_data($table, $cloumn, $id) {

        return DB::table($table)->where($cloumn, $id)->first();
    }

    public function show_task_report() {

        return DB::select('SELECT t.id, t.primary,t.summary, t.description, s.name as status_name, p.name as priority_name,e.name as employee_name, t.due_date, tc.id, tc.comment, tc.added_on
FROM  
(
    SELECT task_id as tid, max(id) as maxid
	FROM task_comments
	group by task_id
) as tt, task t, task_comments tc,status as s,priority as p,employee as e
where t.id = tc.task_id
and tt.tid = t.id
and s.id = t.status_id
and p.id = t.priority_id
and e.id = t.primary
and tt.maxid = tc.id
order by t.id');
    }

    public function view_data($table, $cloumn) {

        return DB::table($table)->get();
    }

}
