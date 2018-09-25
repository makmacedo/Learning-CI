<html>
    <head>
    <title>CI Project</title>
        <link rel="stylesheet" href="https://bootswatch.com/4/slate/bootstrap.min.css"> <!--alternative css for bootstrap | demo: https://bootswatch.com/4/slate/ -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    </head>
    <body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="<?php echo base_url();?>">CI Project</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navContent" aria-controls="navContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" id="home"><a class="nav-link" href="<?php echo base_url();?>">Home <span class="sr-only">(current)</span></a></li>
                <li class="nav-item" id="about"><a class="nav-link" href="<?php echo base_url();?>about">About</a></li>
                <li class="nav-item" id="blog"><a class="nav-link" href="<?php echo base_url();?>posts">Blog</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">