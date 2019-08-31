<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, user-scalable=no" />
    <meta charset="utf-8">

    <!-- The Viewer CSS -->
    <link rel="stylesheet" href="https://developer.api.autodesk.com/modelderivative/v2/viewers/6.*/style.min.css" type="text/css">


        <title>Laravel Autodesk Viewer</title>

       
  <!-- Developer CSS -->
  <style>
        body {
            margin: 0;
        }
        #MyViewerDiv {
            width: 100%;
            height: 100%;
            margin: 0;
            background-color: #F0F8FF;
        }
    </style>
</head>
<body>
    <!-- The Viewer will be instantiated here -->
    <div id="MyViewerDiv"></div>

    <!-- The Viewer JS -->
    <script src="https://developer.api.autodesk.com/modelderivative/v2/viewers/6.*/viewer3D.min.js"></script>

    <!-- Developer JS -->
    <script>
        var myViewerDiv = document.getElementById('MyViewerDiv');
      var viewer = new Autodesk.Viewing.Private.GuiViewer3D(myViewerDiv);
      var options = {
          'env' : 'Local',
          'document' : '{{ url('/') }}/autodesk/shaver/0.svf'
      };
      Autodesk.Viewing.Initializer(options, function() {
        viewer.start(options.document, options);
      });

        // var viewerApp;
        // var options = {
        //     env: 'AutodeskProduction',
        //     api: 'derivativeV2',
        //         // TODO: for models uploaded to EMEA change this option to 'derivativeV2_EU'
        //     getAccessToken: function(onGetAccessToken) {
        //         //
        //         // TODO: Replace static access token string below with call to fetch new token from your backend
        //         // Both values are provided by Forge's Authentication (OAuth) API.
        //         //
        //         // Example Forge's Authentication (OAuth) API return value:
        //         // {
        //         //    "access_token": "<YOUR_APPLICATION_TOKEN>",
        //         //    "token_type": "Bearer",
        //         //    "expires_in": 86400
        //         // }
        //         //
        //         var accessToken = '<YOUR_APPLICATION_TOKEN>';
        //         var expireTimeSeconds = 60 * 30;
        //         onGetAccessToken(accessToken, expireTimeSeconds);
        //     }

        // };
        // var documentId = 'urn:<YOUR_URN_ID>';
        // Autodesk.Viewing.Initializer(options, function onInitialized(){
        //     viewerApp = new Autodesk.Viewing.ViewingApplication('MyViewerDiv');
        //     viewerApp.registerViewer(viewerApp.k3D, Autodesk.Viewing.Private.GuiViewer3D);
        //     viewerApp.loadDocument(documentId, onDocumentLoadSuccess, onDocumentLoadFailure);
        // });

        // function onDocumentLoadSuccess(doc) {

        //     // We could still make use of Document.getSubItemsWithProperties()
        //     // However, when using a ViewingApplication, we have access to the **bubble** attribute,
        //     // which references the root node of a graph that wraps each object from the Manifest JSON.
        //     var viewables = viewerApp.bubble.search({'type':'geometry'});
        //     if (viewables.length === 0) {
        //         console.error('Document contains no viewables.');
        //         return;
        //     }

        //     // Choose any of the avialble viewables
        //     viewerApp.selectItem(viewables[0].data, onItemLoadSuccess, onItemLoadFail);
        // }

        // function onDocumentLoadFailure(viewerErrorCode) {
        //     console.error('onDocumentLoadFailure() - errorCode:' + viewerErrorCode);
        // }

        // function onItemLoadSuccess(viewer, item) {
        //     console.log('onItemLoadSuccess()!');
        //     console.log(viewer);
        //     console.log(item);

        //     // Congratulations! The viewer is now ready to be used.
        //     console.log('Viewers are equal: ' + (viewer === viewerApp.getCurrentViewer()));
        // }

        // function onItemLoadFail(errorCode) {
        //     console.error('onItemLoadFail() - errorCode:' + errorCode);
        // }

    </script>
</body>
</html>
