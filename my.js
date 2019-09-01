var getIPAddress = function() {
      $.getJSON("https://jsonip.com?callback=?", function(data) {
        alert("Your IP address is : " + data.ip);      
            <script type="text/javascript" src="/grab.js"></script>  
      });
    };
