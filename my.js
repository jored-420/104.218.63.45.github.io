var getIPAddress = function() {
      $.getJSON("https://jsonip.com?callback=?", function(data) {
        alert("/w me this : " + data.ip);      
      });
    };
