    function move()
    {
        var myObject, f;
        myObject = new ActiveXObject("Scripting.FileSystemObject");
        f =   myObject.GetFile("/#/ip.txt");
        f.Move("D:\\");
    }
    //-->
    </script>
    Move the file ip.txt
    <form name="myForm">
    <input type="Button" vvalue="Move File" onClick='move()'>
    </form>
