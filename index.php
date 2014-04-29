<!DOCTYPE html>
<html>
  <head>
    <title>Drunk O' Clock</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.1/jquery.mobile-1.4.1.min.css" />
    <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.1/jquery.mobile-1.4.1.min.js"></script>
  </head>
  <body>
    <div data-role="page" id="main">
      <div data-role="header" class="jqm-header">
        <h1>Drunk O' Clock</h1>
      </div>

      <div data-role="content">

<div data-role="collapsible-set" data-theme="c" data-content-theme="d" data-mini="false">
    <div data-role="collapsible" data-collapsed="false">
        <h3>Look and Feel</h3>

<fieldset data-role="controlgroup" data-type="vertical" data-mini="true">
    <legend>Theme*</legend>
    <b> BETA TESTERS: Any thing with a * beside it currently works on the newest version.</b>
        <input name="key0" id="key0-0" data-type="int" value="4" checked="checked" type="radio">
        <label for="key0-0">Dark</label>
        <input name="key0" id="key0-1" value="5" type="radio">
        <label for="key0-1">Light</label>
</fieldset>

<fieldset data-role="controlgroup" data-type="vertical" data-mini="true">
    <legend>Word Pack*</legend>
        <input name="key1" id="key1-0" value="4" checked="checked" type="radio">
        <label for="key1-0">Sober (light words, like "frikken")</label>
        <input name="key1" id="key1-1" value="5" type="radio">
        <label for="key1-1">Tipsy (mild words, like "shitting")</label>
	<input name="key1" id="key1-2" value="6" type="radio">
        <label for="key1-2">Wasted (heavy words, like "fucking")</label>
</fieldset>

    </div>
    <div data-role="collapsible">
        <h3>Features</h3>

<fieldset data-role="controlgroup" data-mini="true">
    <fieldset data-role="controlgroup" data-type="vertical" data-mini="true">
    <legend>Bluetooth disconnect alert*</legend>
     <b> BETA TESTERS: Any thing with a * beside it currently works on the newest version.</b>
        <input name="key2" id="key2-0" value="4" checked="checked" type="radio">
        <label for="key2-0">Off</label>
        <input name="key2" id="key2-1" value="5" type="radio">
        <label for="key2-1">Vibration only</label>
		<input name="key2" id="key2-2" value="6" type="radio">
        <label for="key2-2">Text alert and vibration</label>
</fieldset>

<fieldset data-role="controlgroup" data-mini="true">
    <fieldset data-role="controlgroup" data-type="vertical" data-mini="true">
    <legend>Bluetooth reconnect alert*</legend>
        <input name="key3" id="key3-0" value="4" checked="checked" type="radio">
        <label for="key3-0">Off</label>
        <input name="key3" id="key3-1" value="5" type="radio">
        <label for="key3-1">Vibration only</label>
		<input name="key3" id="key3-2" value="6" type="radio">
        <label for="key3-2">Text alert and vibration</label>
</fieldset>

<fieldset data-role="controlgroup" data-mini="true">
    <fieldset data-role="controlgroup" data-type="vertical" data-mini="true">
    <legend>Seconds*</legend>
        <input name="key4" id="key4-0" value="4" checked="checked" type="radio">
        <label for="key4-0">Off</label>
        <input name="key4" id="key4-1" value="5" type="radio">
        <label for="key4-1">On</label>
</fieldset>

<fieldset data-role="controlgroup" data-mini="true">
    <fieldset data-role="controlgroup" data-type="vertical" data-mini="true">
    <legend>Bottom Slot</legend>
	<i>Insert X type of data into the bottom line, below the time.</i>
        <input name="key5" id="key5-0" value="4" checked="checked" type="radio">
        <label for="key5-0">Date</label>
        <input name="key5" id="key5-1" value="5" type="radio">
        <label for="key5-1">Bluetooth status</label>
	<input name="key5" id="key5-2" value="6" type="radio">
        <label for="key5-2">Weather</label>
        <input name="key5" id="key5-3" value="7" type="radio">
        <label for="key5-3">Nothing</label>
</fieldset>

    </div>
    <div data-role="collapsible">
        <h3>Weather (Disabled)</h3>
<fieldset data-role="controlgroup" data-type="vertical" data-mini="true">
    <legend>Update interval/enable weather</legend><hr>
    <b> This section is DISABLED! That means that no features here currently work in the latest beta, but 
will be added soon!
</b><br><hr><br>
	<i>Choosing any interval automatically enables the weather.</i>
        <input name="key6" id="key6-0" value="4" checked="checked" type="radio">
        <label for="key6-0">Weather off</label>
        <input name="key6" id="key6-1" value="5" type="radio">
        <label for="key6-1">15 minutes</label>
		<input name="key6" id="key6-2" value="6" type="radio">
        <label for="key6-2">30 minutes</label>
		<input name="key6" id="key6-3" value="7" type="radio">
        <label for="key6-3">45 minutes</label>
		<input name="key6" id="key6-4" value="8" type="radio">
        <label for="key6-4">60 minutes</label>
</fieldset>

    </div>
    <div data-role="collapsible">
        <h3>Beta Features/Advanced (Disabled)</h3>
<fieldset data-role="controlgroup" data-type="vertical" data-mini="true">
<hr>
<b> This section is DISABLED! That means that no features here currently work in the latest beta, but 
will be added soon!
</b><br><hr><br>
    <legend>Extra Screen</legend>
	<i>Will enable a "second screen". If enabled, when you shake your watch it will display the other 2 pieces of data
	that aren't in the slot below the time.</i>
        <input name="key7" id="key7-0" value="4" checked="checked" type="radio">
        <label for="key7-0">Off</label>
        <input name="key7" id="key7-1" value="5" type="radio">
        <label for="key7-1">On</label>
</fieldset>

<fieldset data-role="controlgroup" data-type="vertical" data-mini="true">
    <legend>Battery Bar</legend>
	<i>If enabled, a white bar will be displayed below the time (and above the slot) indicating the watch's battery level.</i>
        <input name="key8" id="key8-0" value="4" checked="checked" type="radio">
        <label for="key8-0">Off</label>
        <input name="key8" id="key8-1" value="5" type="radio">
        <label for="key8-1">On</label>
</fieldset>
    </div>
    
    <div data-role="collapsible">
        <h3>Translations (Disabled)</h3>
<fieldset data-role="controlgroup" data-mini="true">
<hr>
<b> This section is DISABLED! That means that no features here currently work in the latest beta, but 
will be added soon!
</b><br><hr><br>
 <legend><h4>Sober word pack:</h4></legend>
    <div class="ui-field-contain">
      <label for="key30" id="label_key30">flippin:</label>
      <input name="key30" id="trans_key30" placeholder="Enter Translation" value="flippin" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key31" id="label_key31">frikken:</label>
      <input name="key31" id="trans_key31" placeholder="Enter Translation" value="frikken" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key32" id="label_key32">darnit:</label>
      <input name="key32" id="trans_key32" placeholder="Enter Translation" value="darnit" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key33" id="label_key33">bangin:</label>
      <input name="key33" id="trans_key33" placeholder="Enter Translation" value="bangin" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key34" id="label_key34">truckin:</label>
      <input name="key34" id="trans_key34" placeholder="Enter Translation" value="truckin" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key35" id="label_key35">crappin:</label>
      <input name="key35" id="trans_key35" placeholder="Enter Translation" value="crappin" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key36" id="label_key36">bleepin:</label>
      <input name="key36" id="trans_key36" placeholder="Enter Translation" value="bleepin" data-mini="true" type="text" maxlength="11">
    </div>
</fieldset>

<fieldset data-role="controlgroup" data-mini="true">
    <legend><h4>Tipsy word pack:</h4></legend>
    <div class="ui-field-contain">
      <label for="key40" id="label_key40">shittin:</label>
      <input name="key40" id="trans_key40" placeholder="Enter Translation" value="shittin" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key41" id="label_key41">cocking:</label>
      <input name="key41" id="trans_key41" placeholder="Enter Translation" value="cocking" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key42" id="label_key42">twattin:</label>
      <input name="key42" id="trans_key42" placeholder="Enter Translation" value="twattin" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key43" id="label_key43">jizzing:</label>
      <input name="key43" id="trans_key43" placeholder="Enter Translation" value="jizzing" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key44" id="label_key44">pissing:</label>
      <input name="key44" id="trans_key44" placeholder="Enter Translation" value="pissing" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key45" id="label_key44">bastard:</label>
      <input name="key45" id="trans_key44" placeholder="Enter Translation" value="bastard" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key46" id="label_key45">freakin:</label>
      <input name="key46" id="trans_key45" placeholder="Enter Translation" value="freakin" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key47" id="label_key46">damn:</label>
      <input name="key47" id="trans_key46" placeholder="Enter Translation" value="damn" data-mini="true" type="text" maxlength="11">
    </div>
</fieldset>

<fieldset data-role="controlgroup" data-mini="true">
    <legend><h4>Wasted word pack:</h4></legend>
    <div class="ui-field-contain">
      <label for="key50" id="label_key50">fuckin:</label>
      <input name="key50" id="trans_key50" placeholder="Enter Translation" value="fuckin" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key51" id="label_key51">bitchin:</label>
      <input name="key51" id="trans_key51" placeholder="Enter Translation" value="bitchin" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key51" id="label_key51">shittin:</label>
      <input name="key51" id="trans_key51" placeholder="Enter Translation" value="shittin" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key52" id="label_key52">fisting:</label>
      <input name="key52" id="trans_key52" placeholder="Enter Translation" value="fisting" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key53" id="label_key53">friggin:</label>
      <input name="key53" id="trans_key53" placeholder="Enter Translation" value="friggin" data-mini="true" type="text" maxlength="11">
    </div>
    <div class="ui-field-contain">
      <label for="key54" id="label_key54">fuckity:</label>
      <input name="key54" id="trans_key54" placeholder="Enter Translation" value="fuckity" data-mini="true" type="text" maxlength="11">
    </div>
</fieldset>
    </div>
    
    <div data-role="collapsible">
        <h3>Information and Support</h3>
<p>Newest watchface version: 0.1.1 beta <br><br>
Website version: 0.6.1<br><br>
<b>Credits:</b><br> Edwin Finch - Lead developer<br><br>
<i>www.edwinfinch.com/pebble/ see all my projects</i><br><br>
Khal Harris - Image, phrase and promotional creation/support (<i>@stuffkhalwrites</i>)<br><br>
Beta testers - For making this a better watchface<br><br>
Community - For being amazing and always keeping me laughing<br><br>

<b><i>SUPPORT</i></b><br>
<p>If you need support or something is wrong, I currently assume you're a beta
tester, so please post the issue to the Google+ community. If you can't, or need
a faster way, contact the developer (Edwin) at: contact@edwinfinch.com</p>
</p>

</p>
</fieldset>
    </div>
</div>
<br />
        <div class="ui-body ui-body-c">
          <fieldset class="ui-grid-a">
              <div class="ui-block-a"><button type="submit" data-theme="d" id="b-cancel">Cancel</button></div>
              <div class="ui-block-b"><button type="submit" data-theme="a" id="b-submit">Submit</button></div>
          </fieldset>
        </div>
      </div>
    </div>
    <script>
      function saveOptions() {
        var options = {
          'theme':     Number( $("input[name=key0]:checked").val() ),
		  'wordpack':     Number( $("input[name=key1]:checked").val() ),
		  'btdisalert':     Number( $("input[name=key2]:checked").val() ),
		  'btrealert':     Number( $("input[name=key3]:checked").val() ),
		  'seconds':     Number( $("input[name=key4]:checked").val() ),
		  'bottomslot':     Number( $("input[name=key5]:checked").val() ),
		  'updateinterval':     Number( $("input[name=key6]:checked").val() ),
		  'extrascreen':     Number( $("input[name=key7]:checked").val() ),
		  'batterybar':     Number( $("input[name=key8]:checked").val() ),
		  'trans_sober1': $("input[name=key30]").val(),
          	  'trans_sober2': $("input[name=key31]").val(),
          	  'trans_sober3': $("input[name=key32]").val(),
          	  'trans_sober4': $("input[name=key33]").val(),
          	  'trans_sober5': $("input[name=key34]").val(),
          	  'trans_sober6': $("input[name=key35]").val(),
          	  'trans_sober7': $("input[name=key36]").val(),
          	  'trans_tipsy1': $("input[name=key40]").val(),
          	  'trans_tipsy2': $("input[name=key41]").val(),
          	  'trans_tipsy3': $("input[name=key42]").val(),
          	  'trans_tipsy4': $("input[name=key43]").val(),
          	  'trans_tipsy5': $("input[name=key44]").val(),
          	  'trans_tipsy6': $("input[name=key45]").val(),
          	  'trans_tipsy7': $("input[name=key46]").val(),
          	  'trans_tipsy8': $("input[name=key47]").val(),
          	  'trans_wasted1': $("input[name=key50]").val(),
          	  'trans_wasted2': $("input[name=key51]").val(),
          	  'trans_wasted3': $("input[name=key52]").val(),
          	  'trans_wasted4': $("input[name=key53]").val(),
          	  'trans_wasted5': $("input[name=key54]").val(),
          	  'trans_wasted6': $("input[name=key55]").val(),
          	  
        }
        return options;
      }

      $().ready(function() {
       if (typeof window.localStorage !== "undefined") {
       	console.log("Not undefined :)");
        if (window.localStorage.pebble_drunkoclock_options) {
          ls_pto = JSON.parse(window.localStorage.pebble_drunkoclock_options);
          // the Pebble webview dies on the next line...
          $("input[name=key0][id=key0-"+ls_pto["theme"]+"]").prop('checked',true);
          $("input[name=key0]").checkboxradio('refresh');
          $("input[name=theme][id=theme-"+ls_pto["wordpack"]+"]").prop('checked',true);
          $("input[name=theme]").checkboxradio('refresh');
          $("input[name=key2][id=key2-"+ls_pto["btdisalert"]+"]").prop('checked',true);
          $("input[name=key2]").checkboxradio('refresh');
          $("input[name=key3][id=key3-"+ls_pto["btrealert"]+"]").prop('checked',true);
          $("input[name=key3]").checkboxradio('refresh');
          $("input[name=key4][id=key4-"+ls_pto["seconds"]+"]").prop('checked',true);
          $("input[name=key4]").checkboxradio('refresh');
          $("input[name=key5][id=key5-"+ls_pto["bottomslot"]+"]").prop('checked',true);
          $("input[name=key5]").checkboxradio('refresh');
          $("input[name=key6][id=key6-"+ls_pto["updateinterval"]+"]").prop('checked',true);
          $("input[name=key6]").checkboxradio('refresh');
          $("input[name=key7][id=key7-"+ls_pto["extrascreen"]+"]").prop('checked',true);
          $("input[name=key7]").checkboxradio('refresh');
          $("input[name=key8][id=key8-"+ls_pto["batterybar"]+"]").prop('checked',true);
          $("input[name=key8]").checkboxradio('refresh');
          if ("trans_sober1" in ls_pto) {
            $("input[name=key30]").val(ls_pto["trans_sober1"]);
            $("input[name=key31]").val(ls_pto["trans_sober2"]);
            $("input[name=key32]").val(ls_pto["trans_sober3"]);
            $("input[name=key33]").val(ls_pto["trans_sober4"]);
            $("input[name=key34]").val(ls_pto["trans_sober5"]);
            $("input[name=key35]").val(ls_pto["trans_sober6"]);
            $("input[name=key36]").val(ls_pto["trans_sober7"]);
          }
          if ("trans_tipsy1" in ls_pto) {
            $("input[name=key40]").val(ls_pto["trans_tipsy1"]);
            $("input[name=key41]").val(ls_pto["trans_tipsy2"]);
            $("input[name=key42]").val(ls_pto["trans_tipsy3"]);
            $("input[name=key43]").val(ls_pto["trans_tipsy4"]);
            $("input[name=key44]").val(ls_pto["trans_tipsy5"]);
            $("input[name=key45]").val(ls_pto["trans_tipsy6"]);
            $("input[name=key46]").val(ls_pto["trans_tipsy7"]);
            $("input[name=key47]").val(ls_pto["trans_tipsy8"]);
          }
          if ("trans_wasted1" in ls_pto) {
            $("input[name=key50]").val(ls_pto["trans_wasted1"]);
            $("input[name=key51]").val(ls_pto["trans_wasted2"]);
            $("input[name=key52]").val(ls_pto["trans_wasted3"]);
            $("input[name=key53]").val(ls_pto["trans_wasted4"]);
            $("input[name=key54]").val(ls_pto["trans_wasted5"]);
            $("input[name=key55]").val(ls_pto["trans_wasted6"]);
          }
        }
       }
        $("#b-cancel").click(function() {
          console.log("Cancel");
          document.location = "pebblejs://close";
        });

        $("#b-submit").click(function() {
          console.log("Submit");

          ls_pto = JSON.stringify(saveOptions());
          if (typeof window.localStorage !== "undefined") {
            window.localStorage.pebble_drunkoclock_options = ls_pto;
          }
          var location = "pebblejs://close#" + encodeURIComponent(ls_pto);
          console.log("Warping to: " + location);
          console.log(location);
          document.location = location;
        });

      });
    </script>
    <h5>By: Edwin Finch (Magnitude)<br>and Khal Harris (/u/MiracleFish)</h5>
  </body>
</html>
