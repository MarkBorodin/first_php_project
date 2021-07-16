<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
              integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Contact</title>
    </head>
    <body>
        
        <?php require 'blocks/header.php'; ?>
        
        <div class="container mb-5">
        
            <h3>Contact</h3>

                <form action="check.php" method="post">

                    <input type="email" name="email" placeholder="email"
                           class="form-control"></br>
                    
                    <textarea name="message" placeholder="message"
                              class="form-control"></textarea></br>
                              
                    <button type="submit" name="send"
                            class="btn btn-success">send</button>

                </form>

        </div>
        
        <?php require 'blocks/footer.php'; ?>
        
    </body>
</html>

