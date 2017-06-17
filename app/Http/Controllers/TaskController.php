<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use App\User;
use Response;
use App\Model\TaskModel;

use Validator;


use Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller {

    public function task_list() {
      $task_list_data= new TaskModel();
      $task_list=$task_list_data->show_task_data();
     
      $notification_list=$task_list_data->show_notification_data('notification');
      return view('index',['task_list'=>$task_list,'notification_list'=>$notification_list]);
    }
    
    public function add_task() {
        $assignee = Input::get('assignee');
        $status = Input::get('status');
        $priority = Input::get('priority');
        $due_date = Input::get('due_date');
        $task_id = Input::get('id');
        $manager = Auth::user()->id;
        $table='task';
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
        }  else {
            $data = array(
                'manager'=>$manager,
                'assignee' => $assignee,
                'status' => $status,
                'priority' => $priority,
                'due_date' => $due_date
            );
            if ($task_id != 0) {
                $update_task = new TaskModel;
                $update_post->update_data($table,$data);
                
                return Response::json(array(
                    'success' => true,
                    'msg' => "Task have updated Successfully!"
                ));
            } else {
                $add_task = new TaskModel;
                $add_task->save_data($table,$data);
                
                return Response::json(array(
                    'success' => true,
                    'msg' => "Task have added Successfully!"
                ));
               
            }
        }
    }
    public function add_notification() {
        $expiry_date = Input::get('expiry_date');
        $comments = Input::get('comments');
        $notification_id= Input::get('id');
        $manager = Auth::user()->id;
        $table='notification';
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
        }  else {
            $data = array(
                'expiry_date' => $expiry_date,
                'comments' => $comments
            );
            if ($notification_id != 0) {
                $update_notification = new TaskModel;
                $update_notification->update_data($table,$data);
                
                return Response::json(array(
                    'success' => true,
                    'msg' => "Notification have updated Successfully!"
                ));
            } else {
                $add_task = new TaskModel;
                $add_task->save_data($table,$data);
                
                return Response::json(array(
                    'success' => true,
                    'msg' => "Notification have added Successfully!"
                ));
               
            }
        }
    }
    public function send_mail() {
       $title ='test_title';// $request->input('title');
        $content ='test_title';//  $request->input('content');

        Mail::send('emails.send', ['title' => $title, 'content' => $content], function ($message)
        {

            

            $message->to('rahul.s@ideatore.in');

        });

        return response()->json(['message' => 'Request completed']);
    }
    public function simple_drop_down() {
        $drop_down = new TaskModel;
        $drop_down_data=$drop_down->view_data(Input::get('table'),Input::get('column'));
        
        return Response::json(array(
                    'success' => true,
                    'report' => $drop_down_data
        ));
    }
    
}


