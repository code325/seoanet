<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    </head>
    <body>
        <script>
            function view() {
                var input = document.getElementById("input").value;
                document.write(input);
            }
        </script>
        <div class="nav">
            Seoa Planet
        </div>
        <div class="content">
            <div class="wrap">
            <span id="logo">Seoa Planet</span>
               <div class="search">
                    <input type="text" class="searchTerm" placeholder="검색어를 입력하세요" id="input">
                    <button type="submit" class="searchButton" onclick="view();">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </body>
</html>
