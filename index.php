<html>
<head>
    <title>Dictionary</title>
    <style>
        input[type=text]{
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }
        #submit{
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<h2>Từ điển Anh - Việt </h2>
<form method="post">
    <input type="text" placeholder="Nhap tu can tra" name="search">
<input type="submit" id="submit" value="Search">
</form>
<?php
 $dictionary=array("hello"=>"xin chao","how"=>"the nao","what"=>"cai gi","why"=>"tai sao","where"=>"o dau");
 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
     $searchword=$_POST["search"];
     $flag=0;
     foreach ($dictionary as $word=>$description)
     {
         if($word==$searchword){
             echo "Tu: ". $word . ". <br>Nghĩa của từ: " . $description;
             echo "<br/>";
             $flag = 1;
         }
     }
     if($flag == 0){
         echo "Không tìm thấy từ cần tra.";
     }
 }

?>
</body>
</html>
