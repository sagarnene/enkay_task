@include('header');
<style>
    .required_field{color:red;}
</style>
<!-- MAIN CONTENT -->
<div id="content">
    <div class="row">
        <!-- col starts here -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <button class="btn btn-info" data-toggle="modal" data-target="#task_modal">Create Task</button>
                </div>
            </div>
            <div class="row"> 

                <!-- NEW WIDGET START -->
                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable"> 

                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget jarviswidget-color-darken jarviswidget-sortable" id="wid-id-0" data-widget-editbutton="false" data-widget-deletebutton="false" data-widget-colorbutton="false" role="widget" style=""> 

                        <header role="heading">
                            <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                            <h2>Task Management Details</h2>
                            <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span></header>

                        <!-- widget div-->
                        <div role="content"> 

                            <!-- widget edit box -->
                            <div class="jarviswidget-editbox"> 
                                <!-- This area used as dropdown edit box --> 

                            </div>
                            <!-- end widget edit box --> 

                            <!-- widget content -->
                            <div class="widget-body no-padding">
                                <div id="datatable_fixed_column_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                    <table id="datatable_fixed_column" class="table table-striped table-bordered table-hover dataTable no-footer" width="100%" role="grid" aria-describedby="dt_basic_info" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th class="hasinput" style="width:17%">
                                                    <input type="text" class="form-control" placeholder="ID" />
                                                </th>
                                                <th class="hasinput" style="width:18%">
                                                    <div class="input-group">
                                                        <input class="form-control" placeholder="Manager" type="text">

                                                    </div>


                                                </th>
                                                <th class="hasinput" style="width:16%">
                                                    <input type="text" class="form-control" placeholder="Assignee" />
                                                </th>
                                                <th class="hasinput" style="width:17%">
                                                    <input type="text" class="form-control" placeholder="Status" />
                                                </th>
                                                <th class="hasinput icon-addon">
                                                    <input id="dateselect_filter" type="text" placeholder="Priority" class="form-control datepicker" data-dateformat="yy/mm/dd">
                                                    
                                                </th>
                                                <th class="hasinput" style="width:16%">
                                                    <input type="text" class="form-control" placeholder="Filter Salary" />
                                                </th>
                                            </tr>
                                            <tr role="row">
                                                <th>ID</th>
                                                <th>Manager</th>
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
                                                <td>{!! $i !!}</td>
                                                <td>{!! $task->manager !!}</td>
                                                <td><span class="responsiveExpander"></span>{!! $task->assignee !!}</td>
                                                <td>{!! $task->status !!}</td>
                                                <td>{!! $task->priority !!}</td>
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
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <button class="btn btn-info" data-toggle="modal" data-target="#notification_modal">Create Notification</button>
                </div>
            </div>
            <div class="row"> 

                <!-- NEW WIDGET START -->
                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable"> 

                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget jarviswidget-color-darken jarviswidget-sortable" id="wid-id-0" data-widget-editbutton="false" data-widget-deletebutton="false" data-widget-colorbutton="false" role="widget" style=""> 

                        <header role="heading">                       
                            <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                            <h2>Notification Details</h2>
                            <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span></header>

                        <!-- widget div-->
                        <div role="content"> 

                            <!-- widget edit box -->
                            <div class="jarviswidget-editbox"> 
                                <!-- This area used as dropdown edit box --> 

                            </div>
                            <!-- end widget edit box --> 

                            <!-- widget content -->
                            <div class="widget-body no-padding">
                                <div id="dt_basic_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                    <table id="dt_basic" class="table table-striped table-bordered table-hover dataTable no-footer" width="100%" role="grid" aria-describedby="dt_basic_info" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th class="hasinput" style="width:17%">
                                                    <input type="text" class="form-control" placeholder="ID" />
                                                </th>
                                                <th class="hasinput" style="width:18%">
                                                    <div class="input-group">
                                                        <input class="form-control" placeholder="Expiry Date" type="text">

                                                    </div>


                                                </th>
                                                <th class="hasinput" style="width:16%">
                                                    <input type="text" class="form-control" placeholder="Comments" />
                                                </th>
                                                
                                            </tr>
                                            <tr role="row">
                                                <th>ID</th>
                                                <th>Expiry Date</th>
                                                <th>Comments</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 0; ?>
                                            @foreach($notification_list as $notification)
                                            <?php $i++; ?>
                                            <tr role="row" class="odd">
                                                <td>{!! $i !!}</td>
                                                <td>{!! $notification->expiry_date !!}</td>                   
                                                <td>{!! $notification->comments !!}</td>
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
                                    <label for="category">Assignee</label>
                                    <select name="assignee" class="form-control" id="assignee">

                                    </select>
                                    <div id="assignee_error"></div>
                                </div>
                                <div class="form-group">
                                    <label for="category">Status</label>
                                    <select name="status" class="form-control" id="status">
                                        <option value="">Select</option>
                                        <option value="1">Work in Progress</option>
                                        <option value="2">Completed</option>

                                    </select>
                                    <div id="status_error"></div>
                                </div>
                                <div class="form-group">
                                    <label for="category">Priority</label>
                                    <select name="priority" class="form-control" id="priority">
                                        <option value="">Select</option>
                                        <option value="1">Low</option>
                                        <option value="2">Medium</option>
                                        <option value="3">High</option>

                                    </select>
                                    <div id="priority_error"></div>
                                </div>


                                <div class="form-group">
                                    <span class="input-icon-outer"> 
                                        <input name="due_date" id="due_date" placeholder="Due Date" class="datepicker hasDatepicker form-control" data-dateformat="dd/mm/yy" id="dp1497603418542" type="text"><i class="icon-append fa fa-calendar"></i>
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
                                    <input type="text" class="form-control" placeholder="Expiry Date" name="expiry_date" id="expiry_date" required />
                                    <div id="expiry_date_error"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Comments" name="comments" id="comments" rows="5" required></textarea>
                                    <div id="comments_error"></div>
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

        simpleDropDown('employee', 'rol_id');
    });

    function saveData(url) {
        alert($("form").serialize());
        var formData = {
            'assignee': $("#assignee").val(),
            'status': $("#status").val(),
            'priority': $("#priority").val(),
            'due_date': $("#due_date").val()
        };
        $('.required_field').empty();
        console.log(formData);

        $.ajax({
            type: 'get',
            url: url,
            dataType: 'json',
            data: $("form").serialize(),
            beforeSend: function (html) {

            },
            success: function (data) {

                if (data.fail) {
                    $.each(data.errors, function (index, value) {

                        var errorDiv = '#' + index + '_error';

                        $(errorDiv).addClass('required_field');

                        $(errorDiv).empty().append(value);
                    });
                    $('#successMessage').empty();
                }

            },
            error: function (html) {

                console.log(html);

            }
        });
    }

    function simpleDropDown(table, column) {

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
                    $('#assignee').empty();
                    $('#assignee').append('<option value="">Select</option>');
                    $.each(data.report, function (index, value) {

                        $('#assignee').append('<option value=' + data.report[index].id + '>' + data.report[index].name + '</option>');
                    });
                }
            },
            error: function (html) {

                console.log(html);


            }
        });

    }
</script>