<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Crypt;
use App\User;
use Response;
use App\Model\TaskModel;
use Validator;
use Mail;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller {

    public function task_list() {

        $task_list_data = new TaskModel();


        if (Auth::user()->role_id == 1) {

            $task_list = $task_list_data->show_task_data();
            $notification_list = $task_list_data->show_notification_data();
            return view('index', ['task_list' => $task_list, 'notification_list' => $notification_list]);
        } else {

            $task_list = $task_list_data->show_assignee_task(Auth::user()->id,'assignee');
            $notification_list = $task_list_data->show_assignee_notification(Auth::user()->id,'assignee');
            return view('primary', ['task_list' => $task_list, 'notification_list' => $notification_list]);
        }
    }

    public function add_task() {

        $assignee = Input::get('assignee');
        $status = Input::get('status');
        $priority = Input::get('priority');
        $due_date = Input::get('due_date');
        $task_id = Input::get('id');
        $manager = Auth::user()->id;
        $table = 'task';
        $validator = Validator::make(
                        array(
                    'assignee' => $assignee,
                    'status' => $status,
                    'priority' => $priority,
                    'due_date' => $due_date
                        ), array(
                    "assignee" => 'required',
                    "status" => 'required',
                    "priority" => 'required',
                    "due_date" => 'required'
                        )
        );
        if ($validator->fails()) {
            return Response::json(array(
                        'fail' => true,
                        'errors' => $validator->getMessageBag()->toArray()
            ));
        } else {
            $data = array(
                'id' => DB::table('task')->max('id') + 1,
                'manager' => $manager,
                'assignee' => $assignee,
                'status' => $status,
                'priority' => $priority,
                'due_date' => $due_date
            );
            if ($task_id != 0) {
                $update_task = new TaskModel;
                $update_post->update_data($table, $data);

                return Response::json(array(
                            'success' => true,
                            'msg' => "Task has updated Successfully!"
                ));
            } else {
                $add_task = new TaskModel;
                $add_task->save_data($table, $data);

                return Response::json(array(
                            'success' => true,
                            'msg' => "Task has added Successfully!"
                ));
            }
        }
    }

    public function task_details() {

        $task_list_data = new TaskModel();


      

            $task_list = $task_list_data->show_assignee_task(Input::get('id'),'id');
            $notification_list = $task_list_data->show_assignee_notification(Input::get('id'),'id');
            return view('task_details', ['task_list' => $task_list, 'notification_list' => $notification_list]);
        
    }

    public function add_notification() {
        $expiry_date = Input::get('expiry_date');
        $comments = Input::get('comments');
        $notification_id = Input::get('id');
        $manager = Auth::user()->id;
        $table = 'notification';
        $validator = Validator::make(
                        array(
                    'expiry_date' => $expiry_date,
                    'comments' => $comments
                        ), array(
                    "expiry_date" => 'required',
                    "comments" => 'required'
                        )
        );
        if ($validator->fails()) {
            return Response::json(array(
                        'fail' => true,
                        'errors' => $validator->getMessageBag()->toArray()
            ));
        } else {
            $data = array(
                'id' => DB::table('notification')->max('id') + 1,
                'expiry_date' => $expiry_date,
                'comments' => $comments
            );
            if ($notification_id != 0) {
                $update_notification = new TaskModel;
                $update_notification->update_data($table, $data);

                return Response::json(array(
                            'success' => true,
                            'msg' => "Notification has updated Successfully!"
                ));
            } else {
                $add_task = new TaskModel;
                $add_task->save_data($table, $data);

                return Response::json(array(
                            'success' => true,
                            'msg' => "Notification has added Successfully!"
                ));
            }
        }
    }
    public function add_comment() {
        $comment_id=Input::get('id');
        $task_id = Input::get('task_id');
        $comment = Input::get('comment');
      
        $comment_by = Auth::user()->id;
        $table = 'comments';
        $validator = Validator::make(
                        array(
                    'task_id' => $task_id,
                    'comment' => $comment
                        ), array(
                    "task_id" => 'required',
                    "comment" => 'required'
                        )
        );
        if ($validator->fails()) {
            return Response::json(array(
                        'fail' => true,
                        'errors' => $validator->getMessageBag()->toArray()
            ));
        } else {
            $data = array(
               
                'task_id' => $task_id,
                'comment_field' => $comment,
                'comment_by'=>$comment_by
            );
            if ($comment_id != 0) {
                $update_comment = new TaskModel;
                $update_comment->update_data($table, $data);

                return Response::json(array(
                            'success' => true,
                            'msg' => "Comment has updated Successfully!"
                ));
            } else {
                $add_comment = new TaskModel;
                $add_comment->save_data($table, $data);

                return Response::json(array(
                            'success' => true,
                            'msg' => "Comment has added Successfully!"
                ));
            }
        }
    }
    public function show_comment() {
        $drop_down = new TaskModel;
        $drop_down_data = $drop_down->view_filtered_data(Input::get('table'), Input::get('column'), Input::get('task_id'));

        return Response::json(array(
                    'success' => true,
                    'report' => $drop_down_data
        ));
    }
    public function send_mail() {
        $title = 'test_title';
        $content = 'test_title';

        Mail::send('emails.send', ['title' => $title, 'content' => $content], function ($message) {



            $message->to('rahul.s@ideatore.in');
        });

        return response()->json(['message' => 'Request completed']);
    }

    public function simple_drop_down() {
        $drop_down = new TaskModel;
        $drop_down_data = $drop_down->view_data(Input::get('table'), Input::get('column'));

        return Response::json(array(
                    'success' => true,
                    'report' => $drop_down_data
        ));
    }

}