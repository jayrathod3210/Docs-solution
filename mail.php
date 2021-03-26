<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mail Us | JBinfotech</title>
        <link rel="icon" type="image/png" href="script/fff.png">
        <style>
            .form-control{
                height: 200px;
            }
        </style>
    </head>
    
    <body style="background-color:#DDD;">
        <?php include 'header.php'; ?>
        <div class="container" style="margin-bottom:20px;margin-top: 20px; ">
            <h1>Mail Us Here</h1>
            <div class="row">
                <div class="col-sm-6">
                    <hr style="border-color: #aaa;"/>
                    <h3>Ask any Query? Or Give us Feedback.</h3>&nbsp;<br/>
                    <form method="POST" action="">
                        <input type="text" name="name" class="form-control" placeholder="Your Name" required>&nbsp;<br/>
                        <input type="email" name="mail" class="form-control" placeholder="Your E-Mail" required>&nbsp;<br/>
                        <select name="type" class="form-control">
                        <option>Feedback</option>
                        <option>Query</option>
                        </select>&nbsp;<br/>
                        <textarea class="form-control" rows="8"name="cms" placeholder="Optional description goes here"></textarea>
                        &nbsp;<br/>
                        <input type="submit" name="submit" style="width:100px;padding: 10px;text-transform: uppercase;font-weight: bold;background-color: blue;" class="btn btn-success">
                    </form>
                </div>
                <?php 
                if(isset($_POST['submit'])){
                    $name=$_POST['name'];
                    $mail=$_POST['mail'];
                    $type=$_POST['type'];
                    $cms=$_POST['cms'];
                    
                    
                    $subject=$type;
                    $msg="Name : {$name}"
                    . "{$type} : {$cms} ";
                    
                    
                    
                    mail('ravalzeelr@gmail.com', $subject, $msg);
                }
                
                ?>
            </div>
        </div>
        
        
        <?php //include 'footer.php'; ?>
    </body>
</html>
