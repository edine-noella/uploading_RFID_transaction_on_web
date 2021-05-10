<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
       <script type="text/javascript">
            function loaddataTable(){  
            $.ajax({
      url: "./Data.php",
      type: "post",
      data: {action: "exposition"},
      success: function(result) {
            $("#dataTable").html(result);
    }});
       }  
      loaddataTable();
 </script>
 <style>

 table{
  margin-right:10em;
  margin-left:10em;
  margin-top:4em;
  margin-bottom:10em;
  border-collapse:collapse;
  text-align:center;
  background-color:white;
  /* box-shadow:15px 15px 30px 10px darkgrey;   */
 
 }

 th{
  padding-top: 19px;
  padding-bottom: 12px;
  background-color: rgba(1, 22, 56, 1);
  color: white;
 }

  td{
    padding: 20px;
  }
 body{
   background-color:white;
  background-image: url("M1.jpg");
  /* background-image: linear-gradient(to right top, #a8eb12, #e39500, #df3130, #9f005e, #230a69); */
  background-size:cover;
  background-repeat:no repeat;
  background-attachment:fixed;
  margin: 0;
  padding:0;
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  font-family:'Droid Sans Mono', 'monospace', monospace, 'Droid Sans Fallback';
 }
 h3{
     text-align:center;
     color:white;
     margin-top:6em;
     text-decoration:underline;
     text-underline-position: under;
     
 }

 #navbar{
   background-color:rgba(1, 22, 56, 1);
   width:100%;
   height: 50px;
   padding-top: 10px;;
   text-align:left;
   position:fixed;
   top: 0;
  
    }
  

  #navbar a{
    text-decoration:none;
    color:white;
    display:inline;
    padding:15px;
 

  }

  h4{
     color:white;
  }

  footer{
    width:100%;
    height:190px;
    background-color:rgba(1, 22, 56, 1);
    margin-top: auto;
  }

  #links{
    margin-left:32em;
  }

  #links a{
    padding-top:20px;
    margin:2em;
  }

  p{
    color:white;
    text-align:center;
    padding:5px;
    width:600px;
    margin-left:22em;
    padding-top:20px;
    padding-bottom:20px;
    font-size:15px;
  }
 
 </style>
 </head>
<body>
<div id='navbar'>
<a href='google.com'>
<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='white'>
<path d='M12 6.453l9 8.375v9.172h-6v-6h-6v6h-6v-9.172l9-8.375zm12 5.695l-12-11.148-12 11.133 1.361 1.465 10.639-9.868 10.639 9.883 1.361-1.465z'/></svg>
</a>
<a href='youtube.com'>
<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='white'><path d='M1 3.488c0-1.926 4.656-3.488 10-3.488 5.345 0 10 1.562 10 3.488s-4.655 3.487-10 3.487c-5.344 0-10-1.561-10-3.487zm10 14.823c.34 0 .677-.007 1.011-.019.045-1.407.537-2.7 1.342-3.745-.839.067-1.643.1-2.353.1-3.006 0-7.588-.523-10-2.256v2.434c0 1.925 4.656 3.486 10 3.486zm0-5.665c5.345 0 10-1.562 10-3.487v-2.44c-2.418 1.738-7.005 2.256-10 2.256-3.006 0-7.588-.523-10-2.256v2.44c0 1.926 4.656 3.487 10 3.487zm1.254 7.635c-.438.02-.861.03-1.254.03-2.995 0-7.582-.518-10-2.256v2.458c0 1.925 4.656 3.487 10 3.487 1.284 0 2.526-.092 3.676-.256-1.155-.844-2.02-2.055-2.422-3.463zm10.746-1.781c0 2.485-2.017 4.5-4.5 4.5s-4.5-2.015-4.5-4.5 2.017-4.5 4.5-4.5 4.5 2.015 4.5 4.5zm-2-.5h-2v-2h-1v2h-2v1h2v2h1v-2h2v-1z'/></svg>
</a>
</div>
<h3> RECORDED TRANSACTIONS </h3>


<div id="dataTable">
<?php
    include_once("Data.php");
?>
</div>

<footer>
  
   <p>At the end of this project , the user will be able to register RFID card , read and record transactions of cards.
   the user will also be able to access all the transactions realtime without reloading the page </p>
     <hr>
   <div id="links">
   <a href='twitter.com'>
   <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'fill='white'>
   <path d='M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.066 9.645c.183 4.04-2.83 8.544-8.164 8.544-1.622 0-3.131-.476-4.402-1.291 1.524.18 3.045-.244 4.252-1.189-1.256-.023-2.317-.854-2.684-1.995.451.086.895.061 1.298-.049-1.381-.278-2.335-1.522-2.304-2.853.388.215.83.344 1.301.359-1.279-.855-1.641-2.544-.889-3.835 1.416 1.738 3.533 2.881 5.92 3.001-.419-1.796.944-3.527 2.799-3.527.825 0 1.572.349 2.096.907.654-.128 1.27-.368 1.824-.697-.215.671-.67 1.233-1.263 1.589.581-.07 1.135-.224 1.649-.453-.384.578-.87 1.084-1.433 1.489z'/></svg>
   </a>
   <a href='facebook.com'>
   <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'fill='white'>
   <path d='M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3 8h-1.35c-.538 0-.65.221-.65.778v1.222h2l-.209 2h-1.791v7h-3v-7h-2v-2h2v-2.308c0-1.769.931-2.692 3.029-2.692h1.971v3z'/></svg>
   </a>
   <a href='linkedIN.com'>
   <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'fill='white'>
   <path d='M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 16h-2v-6h2v6zm-1-6.891c-.607 0-1.1-.496-1.1-1.109 0-.612.492-1.109 1.1-1.109s1.1.497 1.1 1.109c0 .613-.493 1.109-1.1 1.109zm8 6.891h-1.998v-2.861c0-1.881-2.002-1.722-2.002 0v2.861h-2v-6h2v1.093c.872-1.616 4-1.736 4 1.548v3.359z'/></svg>
   </a>
</div>
</footer>

 </body>
</html>