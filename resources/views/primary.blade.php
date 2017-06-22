@include('header')
<!-- MAIN PANEL -->
<div id="main" role="main"> 

    <!-- RIBBON -->
    <div id="ribbon"> 

        <!-- breadcrumb -->
        <ol class="breadcrumb">
            <li>Home</li>
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
    </style>
    <!-- MAIN CONTENT -->
    <div id="content">
        <div class="row">
            <!-- col starts here -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

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
                                    <div id="datatable_fixed_column_wrapper" class="table-responsive dataTables_wrapper form-inline dt-bootstrap no-footer">
                                        <table id="datatable_fixed_column" class="table table-striped table-bordered table-hover dataTable no-footer" width="100%" role="grid" aria-describedby="dt_basic_info" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th class="hasinput" style="width:7%">
                                                        <input type="text" class="form-control" placeholder="ID" />
                                                    </th>
                                                    <th class="hasinput" style="width:52%">

                                                        <input class="form-control" placeholder="Summary" type="text">

                                                    </th>
                                                    <th class="hasinput" style="width:10%">

                                                        <input class="form-control" placeholder="Manager" type="text">

                                                    </th>

                                                    <th class="hasinput" style="width:10%">
                                                        <input type="text" class="form-control" placeholder="Status" />
                                                    </th>
                                                    <th class="hasinput" style="width:10%">
                                                        <input type="text" class="form-control" placeholder="Priority" />
                                                    </th>
                                                    <th class="hasinput icon-addon">
                                                        <input id="dateselect_filter" type="text" placeholder="Due Date" class="form-control datepicker" data-dateformat="yy-mm-dd">
                                                        <label for="dateselect_filter" class="glyphicon glyphicon-calendar no-margin padding-top-15" rel="tooltip" title="" data-original-title="Due Date"></label>
                                                    </th>

                                                </tr>
                                                <tr role="row">
                                                    <th>ID</th>
                                                    <th>Summary</th>
                                                    <th>Manager</th>

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
                                                    <td>{!! $task->id !!}</td>
                                                    <td><a href='task-details?id={!! $task->id !!}'>{!! $task->summary !!}</a></td>
                                                    <td>{!! $task->manager !!}</td>

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
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

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
                                    <div id="dt_basic_wrapper" class="table-responsive  dataTables_wrapper form-inline dt-bootstrap no-footer">
                                        <table id="dt_basic" class="table table-striped table-bordered table-hover dataTable no-footer" width="100%" role="grid" aria-describedby="dt_basic_info" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th class="hasinput" style="width:7%">
                                                        <input type="text" class="form-control" placeholder="ID" />
                                                    </th>
                                                    <th class="hasinput" style="width:80%">
                                                        <div class="input-group">
                                                            <input class="form-control" placeholder="Comments" type="text">

                                                        </div>


                                                    </th>
                                                    <th class="hasinput icon-addon" style="width:13%">
                                                        <input id="exp_dateselect_filter" type="text" placeholder="Expiry Date" class="form-control datepicker" data-dateformat="yy-mm-dd">
                                                        <label for="dateselect_filter" class="glyphicon glyphicon-calendar no-margin padding-top-15" rel="tooltip" title="" data-original-title="Expiry Date"></label>
                                                    </th>



                                                </tr>
                                                <tr role="row">
                                                    <th>ID</th>
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
                                                    <td>{!! $notification->comments !!}</td>
                                                    <td>{!! $notification->expiry_date !!}</td>                   

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
       // alert($("form").serialize());
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
                } else {
                    location.reload();
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