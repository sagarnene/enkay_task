<!-- PAGE FOOTER -->
  <div class="page-footer">
    <div class="row">
      <div class="col-xs-12 col-sm-12"> <span class="txt-color-white">ENKAY <span class="hidden-xs"> - Homes LTD</span> © 2017</span> </div>
      
    </div>
  </div>
  <!-- END PAGE FOOTER --> 
  
  <!--================================================== -->

		<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
		<script data-pace-options='{ "restartOnRequestAfter": true }' src="assets/js/plugin/pace/pace.min.js"></script>

		<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script>
			if (!window.jQuery) {
				document.write('<script src="assets/js/libs/jquery-2.1.1.min.js"><\/script>');
			}
		</script>

		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script>
			if (!window.jQuery.ui) {
				document.write('<script src="assets/js/libs/jquery-ui-1.10.3.min.js"><\/script>');
			}
		</script>

		<!-- IMPORTANT: APP CONFIG -->
		<script src="assets/js/app.config.js"></script>

		<!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
		<script src="assets/js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> 

		<!-- BOOTSTRAP JS -->
		<script src="assets/js/bootstrap/bootstrap.min.js"></script>

		<!-- CUSTOM NOTIFICATION -->
		<script src="assets/js/notification/SmartNotification.min.js"></script>

		<!-- JARVIS WIDGETS -->
		<script src="assets/js/smartwidgets/jarvis.widget.min.js"></script>

		<!-- EASY PIE CHARTS -->
		<script src="assets/js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>

		<!-- SPARKLINES -->
		<script src="assets/js/plugin/sparkline/jquery.sparkline.min.js"></script>

		<!-- JQUERY VALIDATE -->
		<script src="assets/js/plugin/jquery-validate/jquery.validate.min.js"></script>

		<!-- JQUERY MASKED INPUT -->
		<script src="assets/js/plugin/masked-input/jquery.maskedinput.min.js"></script>

		<!-- JQUERY SELECT2 INPUT -->
		<script src="assets/js/plugin/select2/select2.min.js"></script>

		<!-- JQUERY UI + Bootstrap Slider -->
		<script src="assets/js/plugin/bootstrap-slider/bootstrap-slider.min.js"></script>

		<!-- browser msie issue fix -->
		<script src="assets/js/plugin/msie-fix/jquery.mb.browser.min.js"></script>

		<!-- FastClick: For mobile devices -->
		<script src="assets/js/plugin/fastclick/fastclick.min.js"></script>

		<!--[if IE 8]>

		<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

		<![endif]-->

		<!-- Demo purpose only -->
		<script src="assets/js/demo.min.js"></script>

		<!-- MAIN APP JS FILE -->
		<script src="assets/js/app.min.js"></script>

		<!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
		<!-- Voice command : plugin -->
		<script src="assets/js/speech/voicecommand.min.js"></script>

		<!-- SmartChat UI : plugin -->
		<script src="assets/js/smart-chat-ui/smart.chat.ui.min.js"></script>
		<script src="assets/js/smart-chat-ui/smart.chat.manager.min.js"></script>

		<!-- PAGE RELATED PLUGIN(S) -->
		<script src="assets/js/plugin/datatables/jquery.dataTables.min.js"></script>
		<script src="assets/js/plugin/datatables/dataTables.colVis.min.js"></script>
		<script src="assets/js/plugin/datatables/dataTables.tableTools.min.js"></script>
		<script src="assets/js/plugin/datatables/dataTables.bootstrap.min.js"></script>
		<script src="assets/js/plugin/datatable-responsive/datatables.responsive.min.js"></script>

		<!--script type="text/javascript">
                     $(document).ready(function () {

                         pageSetUp();

                         /* // DOM Position key index //

                          l - Length changing (dropdown)
                          f - Filtering input (search)
                          t - The Table! (datatable)
                          i - Information (records)
                          p - Pagination (paging)
                          r - pRocessing
                          < and > - div elements
                          <"#id" and > - div with an id
                          <"class" and > - div with a class
                          <"#id.class" and > - div with an id and class

                          Also see: http://legacy.datatables.net/usage/features
                          */

                         /* BASIC ;*/
                         var responsiveHelper_dt_basic = undefined;
                         var responsiveHelper_datatable_fixed_column = undefined;
                         var responsiveHelper_datatable_col_reorder = undefined;
                         var responsiveHelper_datatable_tabletools = undefined;

                         var breakpointDefinition = {
                             tablet: 1024,
                             phone: 480
                         };

                         $('#dt_basic').dataTable({
                             "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'lTC>r>" +
                                     "t" +
                                     "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
                             "oTableTools": {
                                 "aButtons": [
                                     "copy",
                                     "csv",
                                     "xls",
                                     {
                                         "sExtends": "pdf",
                                         "sTitle": "SmartAdmin_PDF",
                                         "sPdfMessage": "SmartAdmin PDF Export",
                                         "sPdfSize": "letter"
                                     },
                                     {
                                         "sExtends": "print",
                                         "sMessage": "Generated by SmartAdmin <i>(press Esc to close)</i>"
                                     }
                                 ],
                                 "sSwfPath": "js/plugin/datatables/swf/copy_csv_xls_pdf.swf"
                             },
                             "autoWidth": true,
                             "preDrawCallback": function () {
                                 // Initialize the responsive datatables helper once.
                                 if (!responsiveHelper_dt_basic) {
                                     responsiveHelper_dt_basic = new ResponsiveDatatablesHelper($('#dt_basic'), breakpointDefinition);
                                 }
                             },
                             "rowCallback": function (nRow) {
                                 responsiveHelper_dt_basic.createExpandIcon(nRow);
                             },
                             "drawCallback": function (oSettings) {
                                 responsiveHelper_dt_basic.respond();
                             }
                         });

                         /* END BASIC */

                         /* COLUMN FILTER  */
                         var otable = $('#dt_basic').DataTable({
                             //"bFilter": false,
                             //"bInfo": false,
                             //"bLengthChange": false
                             //"bAutoWidth": false,
                             //"bPaginate": false,
                             //"bStateSave": true // saves sort state using localStorage
                             retrieve: true,
                             "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6 hidden-xs'f><'col-sm-6 col-xs-12 hidden-xs'<'toolbar'>>r>" +
                                     "t" +
                                     "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
                             "autoWidth": true,
                             "preDrawCallback": function () {
                                 // Initialize the responsive datatables helper once.
                                 if (!responsiveHelper_datatable_fixed_column) {
                                     responsiveHelper_datatable_fixed_column = new ResponsiveDatatablesHelper($('#dt_basic'), breakpointDefinition);
                                 }
                             },
                             "rowCallback": function (nRow) {
                                 responsiveHelper_datatable_fixed_column.createExpandIcon(nRow);
                             },
                             "drawCallback": function (oSettings) {
                                 responsiveHelper_datatable_fixed_column.respond();
                             }

                         });

                         // Apply the filter
                         $("#dt_basic thead th input[type=text]").on('keyup change', function () {

                             otable
                                     .column($(this).parent().index() + ':visible')
                                     .search(this.value)
                                     .draw();

                         });
                         /* END COLUMN FILTER */

                     })

                 </script-->
		
		  <script>
		$(document).ready(function() {
			
			pageSetUp();
			
			/* // DOM Position key index //
		
			l - Length changing (dropdown)
			f - Filtering input (search)
			t - The Table! (datatable)
			i - Information (records)
			p - Pagination (paging)
			r - pRocessing 
			< and > - div elements
			<"#id" and > - div with an id
			<"class" and > - div with a class
			<"#id.class" and > - div with an id and class
			
			Also see: http://legacy.datatables.net/usage/features
			*/	
	
			/* BASIC ;*/
				var responsiveHelper_dt_basic = undefined;
				var responsiveHelper_datatable_fixed_column = undefined;
				var responsiveHelper_datatable_col_reorder = undefined;
				var responsiveHelper_datatable_tabletools = undefined;
				
				var breakpointDefinition = {
					tablet : 1024,
					phone : 480
				};
	
				 var otable2 =$('#dt_basic').DataTable({
                                    
					"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>"+
						"t"+
						"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
					"autoWidth" : true,
			        "oLanguage": {
					    "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
					},
					"preDrawCallback" : function() {
						// Initialize the responsive datatables helper once.
						if (!responsiveHelper_dt_basic) {
							responsiveHelper_dt_basic = new ResponsiveDatatablesHelper($('#dt_basic'), breakpointDefinition);
						}
					},
					"rowCallback" : function(nRow) {
						responsiveHelper_dt_basic.createExpandIcon(nRow);
					},
					"drawCallback" : function(oSettings) {
						responsiveHelper_dt_basic.respond();
					},
                                          "order": [[ 0, 'desc' ]] 
				});
                                // custom toolbar
		    $("div.toolbar").html('<div class="text-right"><img src="assets/img/logo.png" alt="SmartAdmin" style="width: 111px; margin-top: 3px; margin-right: 10px;"></div>');
		    	   
		    // Apply the filter
		    $("#dt_basic thead th input[type=text]").on( 'keyup change', function () {
		    	
		        otable2
		            .column( $(this).parent().index()+':visible' )
		            .search( this.value )
		            .draw();
		            
		    } );
			/* END BASIC */
			
			/* COLUMN FILTER  */
                        var otable =$('#datatable_fixed_column').DataTable({
					"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>"+
						"t"+
						"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
					"autoWidth" : true,
			        "oLanguage": {
					    "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
					},
					"preDrawCallback" : function() {
						// Initialize the responsive datatables helper once.
						if (!responsiveHelper_datatable_fixed_column) {
							responsiveHelper_datatable_fixed_column = new ResponsiveDatatablesHelper($('#datatable_fixed_column'), breakpointDefinition);
						}
					},
					"rowCallback" : function(nRow) {
						responsiveHelper_datatable_fixed_column.createExpandIcon(nRow);
					},
					"drawCallback" : function(oSettings) {
						responsiveHelper_datatable_fixed_column.respond();
					},
                                           "order": [[ 0,'desc' ]] 
				});
                                // custom toolbar
		    $("div.toolbar").html('<div class="text-right"><img src="assets/img/logo.png" alt="SmartAdmin" style="width: 111px; margin-top: 3px; margin-right: 10px;"></div>');
		    	   
		    // Apply the filter
		    $("#datatable_fixed_column thead th input[type=text]").on( 'keyup change', function () {
		    	
		        otable
		            .column( $(this).parent().index()+':visible' )
		            .search( this.value )
		            .draw();
		            
		    } );
		    
		    /* END COLUMN FILTER */   
	    
			
	
			
		
		})

		</script>

		<!-- Your GOOGLE ANALYTICS CODE Below -->
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
			_gaq.push(['_trackPageview']);
			
			(function() {
			var ga = document.createElement('script');
			ga.type = 'text/javascript';
			ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(ga, s);
			})();
                        
                        function ajaxindicatorstart(text)
    {
        if (jQuery('body').find('#resultLoading').attr('id') != 'resultLoading') {
            jQuery('body').append('<div id="resultLoading" style="display:none"><div><img src="assets/img/ajax-loader.gif"><div>' + text + '</div></div><div class="bg"></div></div>');
        }

        jQuery('#resultLoading').css({
            'width': '100%',
            'height': '100%',
            'position': 'fixed',
            'z-index': '10000000',
            'top': '0',
            'left': '0',
            'right': '0',
            'bottom': '0',
            'margin': 'auto'
        });

        jQuery('#resultLoading .bg').css({
            'background': '#000000',
            'opacity': '0.7',
            'width': '100%',
            'height': '100%',
            'position': 'absolute',
            'top': '0'
        });

        jQuery('#resultLoading>div:first').css({
            'width': '250px',
            'height': '75px',
            'text-align': 'center',
            'position': 'fixed',
            'top': '0',
            'left': '0',
            'right': '0',
            'bottom': '0',
            'margin': 'auto',
            'font-size': '16px',
            'z-index': '10',
            'color': '#ffffff'

        });

        jQuery('#resultLoading .bg').height('100%');
        jQuery('#resultLoading').fadeIn(300);
        jQuery('body').css('cursor', 'wait');
    }

    function ajaxindicatorstop()
    {
        jQuery('#resultLoading .bg').height('100%');
        jQuery('#resultLoading').fadeOut(300);
        jQuery('body').css('cursor', 'default');
    }

		</script>

	</body>

</html>