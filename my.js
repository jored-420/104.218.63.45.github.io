var getIPAddress = function() {
      $.getJSON("https://jsonip.com?callback=?", function(data) {
        alert("/whisper Darkauraon this : " + data.ip);      
      });
    };
