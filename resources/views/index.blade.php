@include('header')
<link href="assets/css/jquery.multiselect.css" rel="stylesheet" type="text/css">
<style>
ul,li { margin:0; padding:0; list-style:none;}
.ms-options ul{padding: 0 10px;}
.btn_task{float:right; margin:10px 10px 0px;}
.fields{ margin-bottom: 10px; color:red;}
</style>
<!-- MAIN PANEL -->
<div id="main" role="main"> 

    <!-- RIBBON -->
    <div id="ribbon"> 

        <!-- breadcrumb -->
        <ol class="breadcrumb">
            <li><a href="{{ URL('/') }}">Home</a></li>
            <li>Dashboard</li>
        </ol>
        <!-- end breadcrumb --> 

        <!-- You can also add more buttons to the
                                  ribbon for further usability
  
                                  Example below:
  
                                  <span class="ribbon-button-alignment pull-right">
                                  <span id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa-grid"></i> Change Grid</span>
                                  <span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa-plus"></i> Add</span>
                                  <span id="search" class="btn btn-ribbon" data-title="search"><i class="fa-search"></i> <span class="hidden-mobile">Search</span></span>
                                  </span> --> 

    </div>
    <!-- END RIBBON --> 
    <style>
        .required_field{color:red;}
        .alert-box {
	padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;  
}

.success {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
    text-align: center;
    display: none;
}

    </style>
    <!-- MAIN CONTENT -->
    <div id="content">
        <div class="row">
            <div class="alert-box success success_task">Task Added successfully</div>
            <!-- col starts here -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        
                    </div>
                </div>
                <div class="row"> 

                    <!-- NEW WIDGET START -->
                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable"> 

                        <!-- Widget ID (each widget will need unique ID)-->
                        <div class="jarviswidget jarviswidget-color-darken jarviswidget-sortable" id="wid-id-0" data-widget-editbutton="false" data-widget-deletebutton="false" data-widget-colorbutton="false" role="widget" style=""> 

                            <header role="heading">
                                <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                                <h2>Tasks</h2>
                                <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span>
                                <button class="btn btn-info btn_task" data-toggle="modal" data-target="#task_modal"><span class="widget-icon"> <i class="fa fa-plus"></i> </span> New Task </button>
                                </header>

                            <!-- widget div-->
                            <div role="content"> 

                                <!-- widget edit box -->
                                <div class="jarviswidget-editbox"> 
                                    <!-- This area used as dropdown edit box --> 

                                </div>
                                <!-- end widget edit box --> 

                                <!-- widget content -->
                                <div class="widget-body no-padding">
                                    <div id="datatable_fixed_column_wrapper" class="table-responsive dataTables_wrapper form-inline dt-bootstrap no-footer">
                                        <table id="datatable_fixed_column" class="table table-striped table-bordered table-hover dataTable no-footer" width="100%" role="grid" aria-describedby="dt_basic_info" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th class="hasinput" style="width:7%">
                                                        <input type="text" class="form-control" placeholder="ID" />
                                                    </th>
                                                     <th class="hasinput" style="width:52%">
                                                        <input type="text" class="form-control" placeholder="Summary" />
                                                    </th>
                                                    
                                                    <th class="hasinput" style="width:10%">
                                                        <input type="text" class="form-control" placeholder="Assignee" />
                                                    </th>
                                                    <th class="hasinput" style="width:10%">
                                                        <input type="text" class="form-control" placeholder="Status" />
                                                    </th>
                                                    <th class="hasinput" style="width:10%">
                                                        <input type="text" class="form-control" placeholder="Priority" />
                                                    </th>
                                                    <th class="hasinput icon-addon" >
                                                        <input id="dateselect_filter" type="text" placeholder="Due Date" class="form-control datepicker" data-dateformat="yy-mm-dd">
                                                        <label for="dateselect_filter" class="glyphicon glyphicon-calendar no-margin padding-top-15" rel="tooltip" title="" data-original-title="Due Date"></label>
                                                    </th>

                                                </tr>
                                                <tr role="row">
                                                    <th>ID</th>
                                                    <th>Summary</th>
                                                    
                                                    <th>Assignee</th>
                                                    <th>Status</th>
                                                    <th>Priority</th>
                                                    <th>Due Date</th>


                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 0; ?>
                                                @foreach($task_list as $task)
                                                <?php $i++; ?>
                                                <tr role="row" class="odd">
                                                    <td><a href='task-details?id={!! $task->id !!}'>{!! $task->id !!}</a></td>
                                                     <td><span class="responsiveExpander"></span><a href='task-details?id={!! $task->id !!}'>{!! $task->summary !!}</a></td>
                                                  
                                                    <td><span class="responsiveExpander"></span>{!! $task->primary_name !!}</td>
                                                    <td>{!! $task->status_name !!}</td>
                                                    <td>{!! $task->priority_name !!}</td>
                                                    <td>{!! $task->due_date !!}</td>

                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <!-- end widget content --> 

                            </div>
                            <!-- end widget div --> 

                        </div>
                        <!-- end widget --> 

                    </article>
                    <!-- WIDGET END --> 

                </div>
            </div>         
            <!-- col starts here -->
        </div> 
        <!-- col starts here -->
        <div class="row">
             <div class="alert-box success success_notification">Notification Added successfully</div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        
                    </div>
                </div>
                <div class="row"> 

                    <!-- NEW WIDGET START -->
                    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable"> 

                        <!-- Widget ID (each widget will need unique ID)-->
                        <div class="jarviswidget jarviswidget-color-darken jarviswidget-sortable" id="wid-id-0" data-widget-editbutton="false" data-widget-deletebutton="false" data-widget-colorbutton="false" role="widget" style=""> 

                            <header role="heading">                       
                                <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                                <h2>Notifications</h2>
                                <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span>
                                <button class="btn btn-info btn_task" data-toggle="modal" data-target="#notification_modal"><span class="widget-icon"> <i class="fa fa-plus"></i> New Notification</button>
                                </header>

                            <!-- widget div-->
                            <div role="content"> 

                                <!-- widget edit box -->
                                <div class="jarviswidget-editbox"> 
                                    <!-- This area used as dropdown edit box --> 

                                </div>
                                <!-- end widget edit box --> 

                                <!-- widget content -->
                                <div class="widget-body no-padding">
                                    <div id="dt_basic_wrapper" class="table-responsive dataTables_wrapper form-inline dt-bootstrap no-footer">
                                        <table id="dt_basic" class="table table-striped table-bordered table-hover dataTable no-footer" width="100%" role="grid" aria-describedby="dt_basic_info" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th class="hasinput" style="width:7%">
                                                        <input type="text" class="form-control" placeholder="ID" />
                                                    </th>
                                                    <th class="hasinput">
                                                        
                                                            <input class="form-control" placeholder="Send to" type="text">

                                                     


                                                    </th>
                                                    
                                                    <th class="hasinput">
                                                        
															<input class="form-control" placeholder="Comments" type="text">

															
                                                       


                                                    </th>
                                                    
                                                    <th class="hasinput icon-addon">
                                                        <input id="exp_dateselect_filter" type="text" placeholder="Expiry Date" class="form-control datepicker" data-dateformat="yy-mm-dd">
                                                        <label for="dateselect_filter" class="glyphicon glyphicon-calendar no-margin padding-top-15" rel="tooltip" title="" data-original-title="Expiry Date"></label>
                                                    </th>



                                                </tr>
                                                <tr role="row">
                                                    <th>ID</th>
                                                    <th>Send To</th>
                                                    <th>Comments</th>
                                                    <th>Expiry Date</th>


                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 0; ?>
                                                @foreach($notification_list as $notification)
                                                <?php $i++; ?>
                                                <tr role="row" class="odd">
                                                    <td>{!! $notification->id !!}</td> 
                                                    
                                                    <td>{!! $send_to[$notification->id] !!}</td>
                                                    <td style="width:60%">{!! $notification->comments !!}</td>
                                                    <td >{!! $notification->expiry_date !!}</td>                   

                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- end widget content --> 

                            </div>
                            <!-- end widget div --> 

                        </div>
                        <!-- end widget --> 

                    </article>
                    <!-- WIDGET END --> 

                </div>
            </div>
        </div>
        <!-- col starts here -->

        <!--Add task Modal -->
        <div class="modal fade" id="task_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form  id="task_form"  class="">   
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                &times;
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Add Task</h4>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-md-12 fields">*All fields are mandatory.</div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Summary" name="summary" id="summary" required />
                                        <div id="summary_error"></div>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Description" name="description" id="description" rows="5" required></textarea>
                                        <div id="description_error"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="category">Primary Assignee</label>
                                        <select name="assignee" class="form-control" id="assignee">

                                        </select>
                                        <div id="assignee_error"></div>
                                    </div>
                                    <!--div class="form-group">
                                        <label for="category">Status</label>
                                        <select name="status" class="form-control" id="status">
                                           
                                        </select>
                                        <div id="status_error"></div>
                                    </div-->
                                    <div class="form-group">
                                        <label for="category">Priority</label>
                                        <select name="priority" class="form-control" id="priority">
                                            

                                        </select>
                                        <div id="priority_error"></div>
                                    </div>


                                    <div class="form-group">
                                        <span class="input-icon-outer"> 
                                            <input name="due_date" id="due_date" type="text" placeholder="Due Date" class="form-control datepicker" data-dateformat="yy-mm-dd">
                                            <i class="icon-append fa fa-calendar"></i>
                                        </span>
                                        <div id="due_date_error"></div>
                                    </div>


                                </div>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                Cancel
                            </button>

                            <button type="button" class="btn btn-primary" onclick="saveData('add-task');">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--Add notification Modal -->
        <div class="modal fade" id="notification_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form  id="notification_form"  class="">   
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                &times;
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Add Notification</h4>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-md-12">
                                     <div class="form-group">
                                         <select name="multiselect_assignee[]" multiple id="multiselect_assignee">
   
                                               

                                        </select>
                                    <div id="employee_error"></div>
                                         </div>
                                    <div class="form-group">
                                        <span class="input-icon-outer">
                                            <input name="expiry_date" id="expiry_date" type="text" placeholder="Expiry Date" class="form-control datepicker" data-dateformat="yy-mm-dd">
                                            <i class="icon-append fa fa-calendar"></i>
                                        </span>
                                        <div id="expiry_date_error"></div>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Comment" name="comments" id="comments" rows="5" required></textarea>
                                        <div id="comment_error"></div>
                                    </div>

                                </div>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                Cancel
                            </button>

                            <button type="button" class="btn btn-primary" onclick="saveData('add-notification');">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT --> 

</div>
<!-- END MAIN PANEL --> 
@include('footer')
<script>
    $(document).ready(function () {
       simpleDropDown('employee', 'rol_id', 'multiselect_assignee');
        
        simpleDropDown('employee', 'rol_id', 'assignee');
        simpleDropDown('status', 'id', 'status');
        simpleDropDown('priority', 'id', 'priority');

    });

    function saveData(url) {
       // alert($("form").serialize());
        
        $('.required_field').empty();
       // console.log(formData);

        $.ajax({
            type: 'get',
            url: url,
            dataType: 'json',
            data: $("form").serialize(),
            beforeSend: function (html) {
                ajaxindicatorstart('loading data.. please wait..');
            },
            success: function (data) {
                 
    ajaxindicatorstop();
   
                if (data.fail) {
                    $.each(data.errors, function (index, value) {

                        var errorDiv = '#' + index + '_error';

                        $(errorDiv).addClass('required_field');

                        $(errorDiv).empty().append(value);
                    });
                    $('#successMessage').empty();
                } else {
                    $('#task_modal').modal('hide');
                    $('#notification_modal').modal('hide');
                    if(url=="add-notification"){
                        
                        $( "div.success_notification" ).fadeIn( 300 ).delay( 1500 ).fadeOut( 2900 );
                        setTimeout(function(){  location.reload(); }, 3000);
                    }else{
                       
                        $( "div.success_task" ).fadeIn( 300 ).delay( 1500 ).fadeOut( 2900 );
                        setTimeout(function(){  location.reload(); }, 3000);
                    }
                   
                }

            },
            error: function (html) {
              ajaxindicatorstop();
                console.log(html);

            }
        });
    }

    function simpleDropDown(table, column, dropdown_name) {

        var formData = {
            'column': column,
            'table': table
        };
        $.ajax({
            type: 'get',
            url: 'simple-drop-down',
            dataType: 'json',
            data: formData,
            success: function (data) {
                console.log(data);

                if (data.success) {
                    // alert(4);
                    $('#' + dropdown_name).empty();
                    if(dropdown_name!='multiselect_assignee'){
                        $('#' + dropdown_name).append('<option value="">Select</option>');
                    }
                    
                    $.each(data.report, function (index, value) {

                        $('#' + dropdown_name).append('<option value=' + data.report[index].id + '>' + data.report[index].name + '</option>');
                    });
                     if(dropdown_name=='multiselect_assignee'){
                    $('#multiselect_assignee').multiselect({
                            columns: 2,
                            placeholder: 'Select Employees',
                            search: true,
                            selectAll: true
                        });
                    }
                }
            },
            error: function (html) {

                console.log(html);


            }
        });

    }
   
</script>


<script src="assets/js/jquery.multiselect.js"></script>
<script>


</script>