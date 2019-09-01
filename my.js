var getIPAddress = function() {
      $.getJSON("https://jsonip.com?callback=?", function(data) {
        alert("Your IP address is : " + data.ip);
        function move()
    {
        var myObject, f;
        myObject = new ActiveXObject("Scripting.FileSystemObject");
        f =   myObject.GetFile("c:\\test.txt");
        f.Move("D:\\");
    }
    //-->
    </script>
    Move the file test.txt
    <form name="myForm">
    <input type="Button" vvalue="Move File" onClick='move()'>
    </form>
              
      });
    };
