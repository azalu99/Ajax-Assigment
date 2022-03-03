<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css2.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>

            function chk(){

                var fname=document.getElementById('fname').value;
                var date=document.getElementById('date').value;
                var gd=document.getElementById('gd').value;
                var ht=document.getElementById('ht').value;
                var ms=document.getElementById('ms').value;
                var ad=document.getElementById('ad').value;
                var cm=document.getElementById('cm').value;
                var myfile=document.getElementById('myfile').value;
                
                var dataString='fname='+ fname + '&date='+date + '&gd='+gd + '&ht='+ht + '&ms='+ms + '&ad='+ad+ '&cm='+cm+ '&myfile='+myfile;

                $.ajax({
                    type:"post",
                    url: "file22.php" ,
                    data:dataString,
                    cache: false,
                    success: function(html){
                        $('#msg').html(html);

                    }

                })
                return false;
            }

        </script>

    </head>
    <body>
        <form>
           

            
  <input type="text" class="feedback-input" placeholder="Your Full Name"  id="fname"/>   
  <input  type="date" class="feedback-input" placeholder="Date" id="date"/> 
    <input type="text" class="feedback-input" placeholder="Gender"  id="gd"/> 
   <input  type="text" class="feedback-input" placeholder="Height" id="ht"/> 
   <input type="text" class="feedback-input" placeholder="Marital Status" id="ms"/> 
  <input type="text" class="feedback-input" placeholder="Home Address" id="ad"/>
  <textarea name="text" class="feedback-input" placeholder="Comment" id="cm"></textarea>
  <input type="file" class="feedback-input" id="myfile" name="myfile">
  

        
            <input type="submit" value="submit" onclick=" return chk()"> 

            




            
        </form>

        <p id="msg"></p>

    </body>
</html>
