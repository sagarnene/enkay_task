<!-- PAGE FOOTER -->
  <div class="page-footer">
    <div class="row">
      <div class="col-xs-12 col-sm-6"> <span class="txt-color-white">SmartAdmin 1.8.2 <span class="hidden-xs"> - Web Application Framework</span> © 2014-2015</span> </div>
      <div class="col-xs-6 col-sm-6 text-right hidden-xs">
        <div class="txt-color-white inline-block"> <i class="txt-color-blueLight hidden-mobile">Last account activity <i class="fa fa-clock-o"></i> <strong>52 mins ago &nbsp;</strong> </i>
          <div class="btn-group dropup">
            <button class="btn btn-xs dropdown-toggle bg-color-blue txt-color-white" data-toggle="dropdown"> <i class="fa fa-link"></i> <span class="caret"></span> </button>
            <ul class="dropdown-menu pull-right text-left">
              <li>
                <div class="padding-5">
                  <p class="txt-color-darken font-sm no-margin">Download Progress</p>
                  <div class="progress progress-micro no-margin">
                    <div class="progress-bar progress-bar-success" style="width: 50%;"></div>
                  </div>
                </div>
              </li>
              <li class="divider"></li>
              <li>
                <div class="padding-5">
                  <p class="txt-color-darken font-sm no-margin">Server Load</p>
                  <div class="progress progress-micro no-margin">
                    <div class="progress-bar progress-bar-success" style="width: 20%;"></div>
                  </div>
                </div>
              </li>
              <li class="divider"></li>
              <li>
                <div class="padding-5">
                  <p class="txt-color-darken font-sm no-margin">Memory Load <span class="text-danger">*critical*</span></p>
                  <div class="progress progress-micro no-margin">
                    <div class="progress-bar progress-bar-danger" style="width: 70%;"></div>
                  </div>
                </div>
              </li>
              <li class="divider"></li>
              <li>
                <div class="padding-5">
                  <button class="btn btn-block btn-default">refresh</button>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END PAGE FOOTER --> 
  
  <!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
		Note: These tiles are completely responsive,
		you can add as many as you like
		-->
  <div id="shortcut">
    <ul>
      <li> <a href="inbox.html" class="jarvismetro-tile big-cubes bg-color-blue"> <span class="iconbox"> <i class="fa fa-envelope fa-4x"></i> <span>Mail <span class="label pull-right bg-color-darken">14</span></span> </span> </a> </li>
      <li> <a href="calendar.html" class="jarvismetro-tile big-cubes bg-color-orangeDark"> <span class="iconbox"> <i class="fa fa-calendar fa-4x"></i> <span>Calendar</span> </span> </a> </li>
      <li> <a href="gmap-xml.html" class="jarvismetro-tile big-cubes bg-color-purple"> <span class="iconbox"> <i class="fa fa-map-marker fa-4x"></i> <span>Maps</span> </span> </a> </li>
      <li> <a href="invoice.html" class="jarvismetro-tile big-cubes bg-color-blueDark"> <span class="iconbox"> <i class="fa fa-book fa-4x"></i> <span>Invoice <span class="label pull-right bg-color-darken">99</span></span> </span> </a> </li>
      <li> <a href="gallery.html" class="jarvismetro-tile big-cubes bg-color-greenLight"> <span class="iconbox"> <i class="fa fa-picture-o fa-4x"></i> <span>Gallery </span> </span> </a> </li>
      <li> <a href="profile.html" class="jarvismetro-tile big-cubes selected bg-color-pinkDark"> <span class="iconbox"> <i class="fa fa-user fa-4x"></i> <span>My Profile </span> </span> </a> </li>
    </ul>
  </div>
  <!-- END SHORTCUT AREA --> 
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
  
  <!--[if IE 8]>

		<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

		<![endif]--> 
  
  <!-- Demo purpose only --> 
  
  
  <!-- PAGE RELATED PLUGIN(S) --> 
  <script src="assets/js/plugin/datatables/jquery.dataTables.min.js"></script> 
  <script src="assets/js/plugin/datatables/dataTables.colVis.min.js"></script> 
  <script src="assets/js/plugin/datatables/dataTables.tableTools.min.js"></script> 
  <script src="assets/js/plugin/datatables/dataTables.bootstrap.min.js"></script> 
  <script src="assets/js/plugin/datatable-responsive/datatables.responsive.min.js"></script> 

</form>
</body>
</html>