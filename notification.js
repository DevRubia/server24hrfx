    function sendNotificationOnLogin(notificationTitle, notificationContent, notificationIcon) {
        // Check if the browser supports the Notification API
        if (!("Notification" in window)) {
          console.log("This browser does not support notifications.");
          return;
        }
      
        // Request permission to show notifications
        Notification.requestPermission()
          .then(function(permission) {
            if (permission === "granted") {
              // Create a new notification instance
              var notification = new Notification(notificationTitle, {
                body: notificationContent,
                icon: notificationIcon
              });
      
              // Handle click event on the notification (optional)
              notification.onclick = function() {
                // Add your logic here to handle the click event
                setInterval(function(){
                  notification.close();
                   console.log("Notification clicked.And now stopped");
              },20000);
              };
            } else {
              console.log("Notification permission denied.");
            }
          })
          .catch(function(error) {
            console.error("Error requesting notification permission:", error);
          });
      }
      var lastLoginTime = new Date(lastLoginTime);
      var currentFetchTime = new Date();
      var displayLoginTime = currentFetchTime - lastLoginTime;
      var seconds = displayLoginTime / 1000;
      var minutes = seconds / 60;
      var roundedMinutes = Math.round(displayLoginTime / 60000);

      var notificationTitle = 'Device Logged In (24hrfxPortal)';
      var notificationContent = 'Security Alert : Your device will be logged out after (60) minutes' +
      '. Current ThreshHold : ' + roundedMinutes + ' Minutes';
      var notificationIcon = 'https://www.gstatic.com/mobilesdk/160503_mobilesdk/logo/2x/firebase_28dp.png';
     
      
      // Call the sendNotification function wherever you want to send a notification
      setInterval(function(){
        sendNotificationOnLogin( notificationTitle, notificationContent, notificationIcon);
        console.log("Notification sent, Minutes: " + displayLoginTime);
      },600000);

   
      

     
    //notification.close();
    
        
        
         
        
      