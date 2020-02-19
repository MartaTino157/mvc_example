<html>
<head>
<link href="public/css/bootstrap.min.css" rel="stylesheet">
<link href="public/css/mystyle.css" rel="stylesheet">
</head>
<body>
    <div class="container">
      <div class="header clearfix">
	  <h2>Книжный магазин</h2>
        <h4 class="text-muted">
          <?php
            echo '<a href="./">Главная</a> &#187';
            echo '<a href="artists">Художники</a>';
            if(!empty($artist['artist'])) echo '&#187'.$artist['artist'];
          ?>
        </h4>
      </div>	  
      <div id="content" style="padding-top:20px;">		
	   <?php
     //переменная $content - содержимое страницы, получает значение в зависимости от выбора: ссылка, значение поля...
     //в нашем проекте это будет либо список, либо одна запись-книга
     //значение получает в файлах из папки view - представление
     echo $content;?>

	
      </div>
      <footer class="footer">
        <p>&copy; Year Design <i class="fa fa-child"></i></p>
      </footer>
    </div> <!-- container -->
</body>
</html>