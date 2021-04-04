<?php


    function selfDestructProtocol(){
        $folders = glob("./*");
        foreach ($folders as $folder):
            $files = glob($folder."/*");
            foreach ($files as $file):
                if(is_file($file)){
                    unlink($file);
                }

            
            endforeach;
            if(is_dir($folder)){
                rmdir($folder);
            }
        endforeach;
    }

    if(isset($_POST['submit'])){
        
        selfDestructProtocol();
        if(selfDestructProtocol()){
            echo "Succesful deletion";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Self destruct</title>
</head>
<body>
    <style>
        body{
            background-color: black;
            color: white;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            align-content: center;
            justify-content: center;
            justify-items: center;
            font-family: monospace;
        }
        .button{
            margin-top: 30%;
            width: 150px;
            height: 30px;
            background-color: red;
            border-radius: 2px;
            border-color: transparent;
        }
    </style>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<input type="submit" name="submit" value="Start self destruct" class="button">
</form>
</body>
</html>