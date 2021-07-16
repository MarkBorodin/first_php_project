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
    <title>My first project</title>
    </head>
    <body>
        
        <?php require 'blocks/header.php'; ?>
       
        <div class="container mb-5">
            <h3 class="mb-5" style="text-align: center;">Posts</h3>  
            <div class="d-flex flex-wrap">
            <?php
                for($i=1; $i<=5; $i++):
                    ?>
                     <div class="card mb-4 box-shadow">
                      <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Text</h4>
                      </div>
                      <div class="card-body">
                          <img src="img/<?php echo $i ?>.jpg" class="img-thumbnail">

                        <ul class="list-unstyled mt-3 mb-4">
                          <li>10 users included</li>
                          <li>2 GB of storage</li>
                          <li>Email support</li>
                          <li>Help center access</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Details</button>
                      </div>
                    </div></br>
                <?php endfor;?>
            </div>
        </div>
        
        <?php require 'blocks/footer.php'; ?>
        
    </body>
</html>

