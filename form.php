<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(!empty($_POST)){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message =$_POST['message'];
        $phone=$_POST['phone'];
        $sujet=$_POST['sujet'];


echo'Merci'.$name.' de nous avoir contacté à propos de '.$sujet.'

Un de nos conseiller vous contactera soit à l’adresse '.$email.' ou par téléphone au {téléphone} dans les plus brefs délais pour traiter votre demande :' 

.$message;}
        
  
    
    ?>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="phone" placeholder="phone">
        <select name="sujet" id="">
            <option>sujet 1</option>
            <option >option2</option>
        </select>
        <input type="text" name="message" placeholder="textarea">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>