@include('header')
<!-- MAIN PANEL -->
<div id="main" role="main"> 

    <!-- RIBBON -->
    <div id="ribbon"> 

        <!-- breadcrumb -->
        <ol class="breadcrumb">
            <li>Home</li>
            <li>Task</li>
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
    <!-- MAIN CONTENT -->
    <div id="content">

        <!-- Row starts here -->
        <div class="row">
            <p class="task-heading-breadcrumb"><i class="fa fa-tag"></i> <a href="#">Task</a> / <a href="#">{!! Input::get('id') !!}</a></p>
            <h2 class="row-seperator-header">Summary</h2>

            <div class="col-sm-12">

                <!-- well -->
                <div class="well">
                    @foreach($task_list as $task)
                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-sm-12">
                            <p class="detail-heading"><strong>Details</strong></p>
                            <!-- row -->
                            <div class="row">

                                <div class="col-md-12 detail-heading-list">
                                    <input type="hidden" id="task_id" value="{!! $task->id !!}">
                                    <p><span><strong>Status:</strong></span> <span class="list-value">{!! $task->status_name !!}</span></p>
                                    <p><span><strong>Priority:</strong></span> <span class="list-value">{!! $task->priority_name !!}</span></p>
                                    <p><span><strong>Assignee:</strong></span> <span class="list-value">{!! $task->assignee !!}</span></p>
                                </div>



                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                    <hr/>
                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-sm-12">
                            <p class="detail-heading"><strong>Description</strong></p>
                            <!-- row -->
                            <div class="row">

                                <div class="col-md-12"> 																			

                                    <div class="form-group">
                                        @if(Auth::user()->role_id==1)
                                        <textarea class="form-control" placeholder="Comments" rows="5" required> {!! $task->due_date !!}</textarea>
                                        @else
                                        <p><span class="list-value">{!! $task->due_date !!}</span></p>
                                        @endif
                                    </div>

                                </div>



                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end col -->
                    </div>
                    @endforeach
                    <!-- end row -->
                    <hr/>
                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-sm-12">
                            <p class="detail-heading"><strong>Task Updates</strong></p>
                            <div id="comment_field">

                            </div>
                            <!-- row -->
                            <div class="row">

                                <div class="jarviswidget jarviswidget-color-blue comment-box-table" id="wid-id-0" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-fullscreenbutton="false" data-widget-sortable="false" role="widget">

 <header role="heading"><!--div class="jarviswidget-ctrls" role="menu">     <a href="javascript:void(0);" class="button-icon jarviswidget-delete-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Delete"><i class="fa fa-times"></i></a></div-->
                                        <span class="widget-icon"> <i class="fa fa-pencil"></i> </span>
                                        <h2>Comment</h2>

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

                                            <div class="summernote" style="display: none;">

                                            </div><div class="note-editor note-frame panel panel-default">
                                                <div class="note-editable panel-body" id="comment_box_body" style="height: 200px;" contenteditable="true">

                                                </div>
                                            </div>

                                            <div class="widget-footer smart-form">

                                                <div class="btn-group">
                                                    <div class="btn-group">

                                                        <button class="btn btn-sm btn-success" type="button" onclick="saveComment('add-comment');">
                                                            <i class="fa fa-check"></i> Add
                                                        </button>	

                                                    </div>
                                                    <button class="btn btn-sm btn-primary" type="button" onclick="$('#comment_box_body').text('')">
                                                        <i class="fa fa-times"></i> Cancel
                                                    </button>	

                                                </div>




                                            </div>

                                        </div>
                                        <!-- end widget content -->

                                    </div>
                                    <!-- end widget div -->

                                </div>



                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end well -->

            </div>

        </div>
        <!-- Row ends here -->

    </div>
    <!-- END MAIN CONTENT --> 

</div>
<!-- END MAIN PANEL --> 

@include('footer')
<script>
    $(document).ready(function () {

        showComment('task_comments', 'task_id', $("#task_id").val());
    });
    function saveComment(url) {
        //alert( );
        //$("#task_id").val(),

        //alert($("form").serialize());
        var formData = {
            'comment': $("#comment_box_body").text(),
            'task_id': $("#task_id").val()

        };
        $('.required_field').empty();
        console.log(formData);

        $.ajax({
            type: 'get',
            url: url,
            dataType: 'json',
            data: formData,
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
                    showComment('task_comments', 'task_id', $("#task_id").val());
                    $("#comment_box_body").text('')
                    //location.reload();
                }

            },
            error: function (html) {

                console.log(html);

            }
        });

    }
    function showComment(table, column, id) {

        var formData = {
            'column': column,
            'table': table,
            'task_id': $("#task_id").val()
        };
        $.ajax({
            type: 'get',
            url: 'show-comment',
            dataType: 'json',
            data: formData,
            success: function (data) {
                console.log(data);

                if (data.success) {
                    // alert(4);

                    $('#comment_field').html('');
                    $.each(data.report, function (index, value) {

                        $('#comment_field').append('<div class="alert alert-info">' +
                                '<p>' + data.report[index].comment + '</p>' +
                                '<p>' + data.report[index].added_by +'<span class="pull-right">Commented at: '+ data.report[index].added_on +'</span>'+ '</p>' +
                                '</div>');
                    });
                }
            },
            error: function (html) {

                console.log(html);


            }
        });

    }
</script>