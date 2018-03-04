<section id="blog-social">
  <div class="container container-full">
    <div class="col-lg-offset-7 col-lg-5 col-md-offset-7 col-md-5 col-sm-12 col-xs-12 subscribe-sec">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <p class="orange-heading pull-right">LIKE THE THINKING?</p>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <p class="white-text pull-right">Click Below to Subscribe to Our Blog so you never miss out</p>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="btn btn-default pull-right" data-toggle="modal" data-target="#modalMy">Subscribe</div>
      </div>
    </div>
  </div>
  
  <!-- the modal id matches the data-target above -->
  <div id="modalMy"class="modal contact-modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close btn btn-sm" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body"> 
        
          <script src="https://zr262.infusionsoft.com/app/webTracking/getTrackingCode?trackingId=0eeb11b1d6fcbd3f1bbee831fb44e654" type="text/javascript">
</script>
          <form id="form-blog" accept-charset="UTF-8" action="https://zr262.infusionsoft.com/app/form/process/ded05c89935bf13836ba201b1846d8cf" class="infusion-form form-horizontal" method="POST" name="Submits blog subscription details" onsubmit="var form = document.forms[0];
var resolution = document.createElement('input');
resolution.setAttribute('id', 'screenResolution');
resolution.setAttribute('type', 'hidden');
resolution.setAttribute('name', 'screenResolution');
var resolutionString = screen.width + 'x' + screen.height;
resolution.setAttribute('value', resolutionString);
form.appendChild(resolution);
var pluginString = '';
if (window.ActiveXObject) {
    var activeXNames = {'AcroPDF.PDF':'Adobe Reader',
        'ShockwaveFlash.ShockwaveFlash':'Flash',
        'QuickTime.QuickTime':'Quick Time',
        'SWCtl':'Shockwave',
        'WMPLayer.OCX':'Windows Media Player',
        'AgControl.AgControl':'Silverlight'};
    var plugin = null;
    for (var activeKey in activeXNames) {
        try {
            plugin = null;
            plugin = new ActiveXObject(activeKey);
        } catch (e) {
            // do nothing, the plugin is not installed
        }
        pluginString += activeXNames[activeKey] + ',';
    }
    var realPlayerNames = ['rmockx.RealPlayer G2 Control',
        'rmocx.RealPlayer G2 Control.1',
        'RealPlayer.RealPlayer(tm) ActiveX Control (32-bit)',
        'RealVideo.RealVideo(tm) ActiveX Control (32-bit)',
        'RealPlayer'];
    for (var index = 0; index &lt; realPlayerNames.length; index++) {
        try {
            plugin = new ActiveXObject(realPlayerNames[index]);
        } catch (e) {
            continue;
        }
        if (plugin) {
            break;
        }
    }
    if (plugin) {
        pluginString += 'RealPlayer,';
    }
} else {
    for (var i = 0; i &lt; navigator.plugins.length; i++) {
        pluginString += navigator.plugins[i].name + ',';
    }
}
pluginString = pluginString.substring(0, pluginString.lastIndexOf(','));
var plugins = document.createElement('input');
plugins.setAttribute('id', 'pluginList');
plugins.setAttribute('type', 'hidden');
plugins.setAttribute('name', 'pluginList');
plugins.setAttribute('value', pluginString);
form.appendChild(plugins);
var java = navigator.javaEnabled();
var javaEnabled = document.createElement('input');
javaEnabled.setAttribute('id', 'javaEnabled');
javaEnabled.setAttribute('type', 'hidden');
javaEnabled.setAttribute('name', 'javaEnabled');
javaEnabled.setAttribute('value', java);
form.appendChild(javaEnabled);">
            <input name="inf_form_xid" type="hidden" value="ded05c89935bf13836ba201b1846d8cf" />
            <input name="inf_form_name" type="hidden" value="Submits blog subscription details" />
            <input name="infusionsoft_version" type="hidden" value="1.49.0.36" />
            
              <div class="text" id="webformErrors" name="errorContent"> </div>
              <div class="form-group " >
               <label for="inf_field_FirstName " class="col-sm-3 ">First Name *</label>
                <div class="col-sm-9">
               <input class="infusion-field-input-container form-control" id="inf_field_FirstName" name="inf_field_FirstName" type="text" required/></div>
                   
              </div>
              <div class="form-group">
              
                <label for="inf_field_Email"  class="col-sm-3">Email *</label>
                <div class="col-sm-9">
                <input class="infusion-field-input-container form-control required email" id="inf_field_Email" name="inf_field_Email" type="email" required/>
                </div>
              </div>
            
            <div class="form-group">
                <div class="col-sm-12">
                  <button style="" class="btn btn-download" type="submit" value="Submit">Submit</button>
               </div>
              </div>
           
          </form>
          <?php  /*echo do_shortcode( '[contact-form-7 id="4903" title="Blog Subscription"]' )*/?>
          
          <!--<form class="form-horizontal" id="form_members" role="form" action="send_formdata_members.php" method="POST">
              
              <div class="form-group">
                <label for="firstname" class="col-sm-3">First Name</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" data-bv-notempty data-bv-notempty-message="You're required to fill in a first name!" required>
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="col-sm-3">Email</label>
                <div class="col-sm-7">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-bv-notempty data-bv-notempty-message="You're required to fill in an email address!" required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-8 col-sm-2">
                  <button type="submit" class="btn btn-contact" name="submit" id="submit">Subsrcibe</button>
                </div>
               
              </div>
            </form>
        </div>
        <!--end modal-body--> 
        </div>
        <!--end modal-content--> 
      </div>
      <!--end modal-dialog--> 
    </div>
  </div>
  <!--end modal--> 
  <!-- Modal --> 
  <!--<div id="modalMy"class="modal contact-modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Free Quote</h4>
      </div>
      <div class="modal-body">
        
      </div>
    </div>
  </div>
</div>--> 
</section>
