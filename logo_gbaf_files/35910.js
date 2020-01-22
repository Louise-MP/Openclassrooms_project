(function(self, ns){
    var GENERIC_BUNDLE_URL = "https://fast.appcues.com/generic/main/4.5.0/appcues.main.ac63c826476002d8c5fe809d0e36a7b353b7224b.js";
    var ACCOUNT_DETAILS = {"GENERIC_BUNDLE_DOMAIN":"https://fast.appcues.com","GENERIC_BUNDLE_PATH":"/generic/main/4.5.0/appcues.main.ac63c826476002d8c5fe809d0e36a7b353b7224b.js","RELEASE_ID":"ac63c826476002d8c5fe809d0e36a7b353b7224b","VERSION":"4.5.0","account":{"isTrial":false,"isTrialExpired":false,"keenScopedKeyWrite":"38129d5e5b34848bba0e3b009df84551768af9138a838a5e93790a2a50a33a2cda2c3f33fd85f2fba2d408946326bb15bd21297296d7b0bcb883032536198c1a001f6391bbfd41a572416d7a522839156f94322a466efd34166490362093165b16d3e0b499a1cb656e27989ddbd466c77fc7251c35009662678d63e96135aa2b4a597e844f52cf490dcbb561231712b9","stripePlanId":"779-standard-monthly","uuid":"ac03effc-4e46-4752-b36b-9b9c64ac4468"},"accountId":"35910","integrations":{"ga":{"createdAt":1561387511581,"createdBy":"uDPUF5hr3iWLA89x2n1VTe0vnng2","id":"ga","integrationId":"35910:ga","isEnabled":true},"segment":{"id":"segment","integrationId":"35910:segment","isEnabled":true}},"styling":{"globalBeaconColor":"#7451eb","globalBeaconStyle":"hotspot","globalHotspotAnimation":"hotspot-animation-pulse","globalHotspotStyling":"","globalStyling":"\n@import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,700');\n\n\n.appcues-actions-right > .appcues-button.appcues-button-success, .appcues-progress-bar-success {\n    background-color: #7451eb;\n}\n.appcues-actions-right > .appcues-button.appcues-button-success:hover {\n    background-color: #8e71ef;\n}\n\n\n.appcues-actions-left >  .appcues-button {\n    background-color: transparent;\n}\n.appcues-actions-left > .appcues-button:hover {\n    background-color: transparent;\n}\n\n\n.appcues-actions-right .appcues-button, .appcues-actions-left .appcues-button {\n    color: #7451eb;\n}\n\n\n.appcues-actions-right .appcues-button:hover, .appcues-actions-left .appcues-button:hover {\n    color: #7451eb;\n}\n\n\nbody, appcues cue, .tooltip .content {\n    font-family: 'Montserrat', sans-serif;\n}\n\n\nbody h1, body h2, body h3, body h4, body h5,\nappcues cue h1, appcues cue h2, appcues cue h3, appcues cue h4, appcues cue h5,\n.tooltip .content h1, .tooltip .content h2, .tooltip .content h3, .tooltip .content h4, .tooltip .content h5 {\n    font-family: 'Montserrat', sans-serif;\n}\n\n\nbody, appcues cue, .tooltip .content {\n    color: #212121;\n}\n\n\n.tooltip .content .panel {\n    background-color: #ffffff;\n    border-color: #ffffff;\n}\n\n.tooltip .content .panel:before, .tooltip .content .panel:after {\n    height: 13px;\n    width: 13px;\n    background-color: #ffffff;\n    border-radius: 2px;\n    border: none;\n    transform: rotate(45deg);\n}\n\n.tooltip .content .panel:after {\n    position: absolute;\n    content: \"\";\n    z-index: -1;\n}\n\n.tooltip .content.content-top .panel:before, .tooltip .content.content-top .panel:after {\n    margin-left: -7px;\n}\n\n.tooltip .content.content-top .panel:before,\n.tooltip .content.content-top .panel:after,\n.tooltip .content.content-top-left .panel:before,\n.tooltip .content.content-top-left .panel:after,\n.tooltip .content.content-top-right .panel:before,\n.tooltip .content.content-top-right .panel:after {\n    margin-top: -6px;\n}\n\n.tooltip .content.content-bottom .panel:before, .tooltip .content.content-bottom .panel:after {\n    margin-left: -7px;\n}\n\n.tooltip .content.content-bottom .panel:before,\n.tooltip .content.content-bottom .panel:after,\n.tooltip .content.content-bottom-left .panel:before,\n.tooltip .content.content-bottom-left .panel:after,\n.tooltip .content.content-bottom-right .panel:before,\n.tooltip .content.content-bottom-right .panel:after {\n    margin-bottom: -6px;\n}\n\n.tooltip .content.content-right .panel:before, .tooltip .content.content-right .panel:after {\n    margin-top: -7px;\n}\n\n.tooltip .content.content-right .panel:before,\n.tooltip .content.content-right .panel:after,\n.tooltip .content.content-right-top .panel:before,\n.tooltip .content.content-right-top .panel:after,\n.tooltip .content.content-right-bottom .panel:before,\n.tooltip .content.content-right-bottom .panel:after {\n    margin-right: -6px;\n}\n\n.tooltip .content.content-left .panel:before, .tooltip .content.content-left .panel:after {\n    margin-top: -7px;\n}\n\n.tooltip .content.content-left .panel:before,\n.tooltip .content.content-left .panel:after,\n.tooltip .content.content-left-top .panel:before,\n.tooltip .content.content-left-top .panel:after,\n.tooltip .content.content-left-bottom .panel:before,\n.tooltip .content.content-left-bottom .panel:after {\n    margin-left: -6px;\n}\n\n.tooltip .content.content-top-left .panel:before,\n.tooltip .content.content-top-left .panel:after,\n.tooltip .content.content-bottom-left .panel:before,\n.tooltip .content.content-bottom-left .panel:after {\n    right: 10px;\n}\n\n.tooltip .content.content-top-right.panel:before,\n.tooltip .content.content-top-right .panel:after,\n.tooltip .content.content-bottom-right .panel:before,\n.tooltip .content.content-bottom-right .panel:after {\n    left: 10px;\n}\n\n.tooltip .content.content-right-bottom .panel:before,\n.tooltip .content.content-right-bottom .panel:after,\n.tooltip .content.content-left-bottom .panel:before,\n.tooltip .content.content-left-bottom .panel:after {\n    top: 10px;\n}\n\n.tooltip .content.content-right-top.panel:before,\n.tooltip .content.content-right-top .panel:after,\n.tooltip .content.content-left-top .panel:before,\n.tooltip .content.content-left-top .panel:after {\n    bottom: 10px;\n}\n\n.tooltip .content.content-top .panel:after {\n    left: 50%;\n}\n\n.tooltip .content.content-top .panel:after,\n.tooltip .content.content-top-left .panel:after,\n.tooltip .content.content-top-right .panel:after {\n    top: 100%;\n}\n\n.tooltip .content.content-bottom .panel:after {\n    left: 50%;\n}\n\n.tooltip .content.content-bottom .panel:after,\n.tooltip .content.content-bottom-left .panel:after,\n.tooltip .content.content-bottom-right .panel:after {\n    bottom: 100%;\n}\n\n.tooltip .content.content-right .panel:after {\n    top: 50%;\n}\n\n.tooltip .content.content-right .panel:after,\n.tooltip .content.content-right-top .panel:after,\n.tooltip .content.content-right-bottom .panel:after {\n    right: 100%;\n}\n\n.tooltip .content.content-left .panel:after {\n    top: 50%;\n}\n\n.tooltip .content.content-left .panel:after,\n.tooltip .content.content-left-top .panel:after,\n.tooltip .content.content-left-bottom .panel:after {\n    left: 100%;\n}\n\n\n.tooltip .content .panel {\n    color: #212121;\n}\n\n\n.panel.panel-default {\n    margin-right: 3px;\n    margin-bottom: 2px;\n    border-radius: 8px;\n}\n\n\n.panel.panel-default, .content .panel:after {\n    box-shadow: 3px 2px 0 hsla(0,0%,93%,.6);\n}\n\n\n.appcues-backdrop[data-pattern-type=left], .appcues-backdrop[data-pattern-type=modal] {\n    background-color: #505050;\n}\n\n\n.appcues-backdrop[data-pattern-type=left], .appcues-backdrop[data-pattern-type=modal] {\n    opacity: 0.61;\n}\n\n\nappcues cue {\n    background: #ffffff\n}\n\n\nappcues cue * {\n    color: #212121\n}\n\n\n.appcues-progress {\n    display: none;\n}\nappcues cue {\n    -moz-border-radius-topleft: 3px;\n    -webkit-border-top-left-radius: 3px;\n    border-top-left-radius: 3px;\n    -moz-border-radius-topright: 3px;\n    -webkit-border-top-right-radius: 3px;\n    border-top-right-radius: 3px;\n}\nappcues[data-pattern-type='left'] .appcues-skip {\n    margin: 0;\n}\n\nappcues cue {\n    border-bottom-left-radius: 2px;\n    border-bottom-right-radius: 2px;\n}\nappcues[data-pattern-type='modal'] cue.active {\n    box-shadow: 0px 6px 18px #555;\n}\n.appcues-progress {\n    border-top-left-radius: 2px;\n    border-top-right-radius: 2px;\n}\n.appcues-skip a {\n    background-color: inherit;\n    color: #333;\n    opacity: 1;\n    transition: background-color 0.2s ease-out;\n}\n.appcues-skip a:hover {\n    background-color: #eee;\n    color: #333;\n}\n.appcues-button {\n    text-transform: uppercase;\n    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.2);\n}\n.appcues-button:not([data-step='prev']) {\n    color: white;\n    border-radius: 4px;\n}\n.appcues-button[data-step='prev']:before, .appcues-button[data-step='next']:after {\n    border: none;\n    content: '';\n    padding: 0;\n    margin: 0;\n}\n.appcues-button[data-step='prev'] {\n    box-shadow: none;\n}\n\n.appcues-button[data-step='prev'],\n.appcues-button[data-step='next'],\n.appcues-button[data-step='end'] \n{\n    padding: 10px 12px;\n}\n.appcues-button[data-step='prev']:hover {\n    background-color: rgba(116, 81, 235, 0.24);\n}\n\n.appcues-button:not([data-step=\"prev\"]):hover {\n    color: white;\n    box-shadow: 0 6px 6px 0 rgba(0, 0, 0, 0.26), 0 10px 20px 0 rgba(0, 0, 0, 0.19);\n}\n\n.appcues-actions {\n    display: flex;\n    flex-direction: row;\n    align-items: center;\n}\n\n.appcues-actions-left {\n    flex-shrink: 1;\n    width: auto !important;\n}\n\n\n.appcues-actions-right {\n    flex-grow: 1;\n    width: auto !important;\n}\n\nbody {\n    font-size: 14px;\n    line-height: 1.42857143;\n}\na[href] {\n    color: #2196F3;\n}\nh1, h2, h3, h4, h5, h6 {\n    font-weight: 500;\n    color: #333;\n}\n.lead {\n    font-size: 21px;\n    margin-bottom: 20px;\n    font-weight: 300;\n    line-height: 1.4;\n}\ncode, kbd, pre, samp {\n    font-family: Menlo,Monaco,Consolas,\"Courier New\",monospace;\n}\ncode {\n    padding: 2px 4px;\n    font-size: 90%;\n    color: #c7254e;\n    background-color: #f9f2f4;\n    border-radius: 4px;\n}\nkbd {\n    padding: 2px 4px;\n    font-size: 90%;\n    color: #fff;\n    background-color: #333;\n    border-radius: 3px;\n    -webkit-box-shadow: inset 0 -1px 0 rgba(0,0,0,.25);\n    box-shadow: inset 0 -1px 0 rgba(0,0,0,.25);\n}\nmark {\n    padding: .2em;\n    background-color: #fcf8e3;\n    color: #000;\n}\ndel, s {\n    text-decoration: line-through;\n}\nins, u {\n    text-decoration: underline;\n}\nsmall {\n    font-size: 85%;\n}\nstrong, b {\n    font-weight: 700;\n}\nem, i {\n    font-style: italic;\n}\nblockquote {\n    padding: 10px 20px;\n    margin: 0 0 20px;\n    font-size: 17.5px;\n    border-left: 5px solid #eee;\n}\nblockquote footer {\n    display: block;\n    font-size: 80%;\n    line-height: 1.42857143;\n    color: #777;\n}\nblockquote footer:before {\n    content: '\\2014 \\00A0';\n}\n.list-unstyled {\n    padding-left: 0;\n    list-style: none;\n}","id":"-LE9_yBIk8Z9fwkoygQ5","typekitId":""}};
    var VERSION = ACCOUNT_DETAILS.VERSION;
    var RELEASE_ID = ACCOUNT_DETAILS.RELEASE_ID;
    var GENERIC_BUNDLE_DOMAIN = ACCOUNT_DETAILS.GENERIC_BUNDLE_DOMAIN;
    var accountId = ACCOUNT_DETAILS.accountId;
    var isBootstrapped = false;

    self.AppcuesBundleSettings = {
      accountId: accountId,
      VERSION: VERSION,
      RELEASE_ID: RELEASE_ID,
      GENERIC_BUNDLE_DOMAIN: GENERIC_BUNDLE_DOMAIN,
      GENERIC_BUNDLE_PATH: ACCOUNT_DETAILS.GENERIC_BUNDLE_PATH,
      styling:  ACCOUNT_DETAILS.styling,
      integrations: ACCOUNT_DETAILS.integrations,
      account: ACCOUNT_DETAILS.account
    };

    var skipAMD = false;
    var windowGlobals = window["AppcuesSettings"];
    if (
      windowGlobals &&
      typeof windowGlobals === "object" &&
      windowGlobals.skipAMD === true
    ) {
      skipAMD = true;
    }

    var doc = self.document;
    self[ns] = self[ns] || [];
    var Appcues = self[ns];
    if (Appcues.invoked) {
        if (self.console && console.error) {
            console.error('Appcues snippet included twice.');
        }
        return;
    }

    if (Appcues.identify) return;
    Appcues.invoked = true;

    var methods = [
        "identify",
        "track",
        "page",
        "anonymous",
        "start",
        "show",
        "clearShow",
        "on",
        "off",
        "once",
        "reset",
        "debug",
        "user",
        "call",
        "settings",
        "content",
        "initMixpanel",
        "initHeap",
        "initIntercom",
        "initCIO",
        "initWoopra",
        "initAmplitude",
        "initKlaviyo",
        "initTD",
        "initLl",
        "initCalq",
        "initKM",
        "initGA",
        "initGTM",
        "initSegment",
        "injectContent",
        "injectStyles"
    ];

    var promises = [
        "user"
    ];

    function factory(method){
        return function(){
            var args = Array.prototype.slice.call(arguments);
            if (isBootstrapped) {
              self.Appcues[method].apply(self.Appcues, args);
            } else {
              args.unshift(method);
              Appcues.push(args);
            }
            return self.Appcues;
        };
    }

    // For each of our methods, generate a queueing stub.
    for (var i = 0; i < methods.length; i++) {
        var key = methods[i];
        Appcues[key] = factory(key);
    }

    for (var i = 0; i < promises.length; i++) {
        var key = promises[i];
        Appcues[key] = function() {
          var args = Array.prototype.slice.call(arguments);
          if (isBootstrapped) {
            return self.Appcues[key].apply(self.Appcues, args);
          } else {
            return new Promise(function(resolve, _reject) {
              args.unshift(resolve);
              args.unshift(key);
              Appcues.push(args);
            });
          }
        };
    }

    if (
      !skipAMD &&
      typeof window.define === "function" &&
      window.define.amd &&
      (window.define.amd.vendor == null ||
        window.define.amd.vendor !== "dojotoolkit.org")
    ) {
      window.define(function() { return Appcues; });
    }

    function load(){
        var bundleScript = doc.createElement("script");
        bundleScript.type = "text/javascript";
        bundleScript.src = GENERIC_BUNDLE_URL;
        bundleScript.async = true;
        bundleScript.onload = function () {
            isBootstrapped = true;
            Appcues.forEach(function(call) {
                var fnName = call[0];
                var args = call.slice(1);
                if (promises.indexOf(fnName) === -1) {
                  self[ns] && self[ns][fnName] &&
                      self[ns][fnName].apply(self[ns], args);
                } else {
                  var resolve = args[0];
                  var promiseArgs = args.slice(1);
                  self[ns] && self[ns][fnName] &&
                    self[ns][fnName].apply(self[ns], promiseArgs).then(
                      function() { resolve(arguments[0]); }
                    );
                }
            });
        };

        var firstScript = doc.getElementsByTagName('script')[0];
        firstScript.parentNode.insertBefore(bundleScript, firstScript);
    }
    Appcues.SNIPPET_VERSION = VERSION;
    load();
})(window, 'Appcues');
