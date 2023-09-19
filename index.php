<?php
    $list_nav = array("User", "CMS", "Config", "Dashboard", "Courses", "Instructor", "Apps", "Charts", "Bootstrap", "Plugins", "Widget", "Forms", "Table", "Pages");
    $list_icon = array("bi bi-person", "bi bi-box", );
    $amount_nav = count($list_nav);
    $amount_icon = count($list_icon);
    ?>

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Left -->
            <div class="col-2">
                <div class="image-logo d-flex justify-content-center align-items-center">
                    <img src="./image/w3.png" alt="w3" height="48">
                    <img src="./image/cms.png" alt="cms" height="44">
                </div>
                <div class="nav-menu">
                    <ul class="nav flex-column">
                        <?php for ($i = 0; $i < $amount_nav; $i += 1) { ?>
                            <li class="nav-item">
                                <a id="menu-item" class="nav-link position-relative" href="/<?= $list_nav[$i] ?>.php#<?= $list_nav[$i] ?>"> <span><i class="<?= $list_icon[$i%$amount_icon] ?>"></i></span> <?= $list_nav[$i] ?> <span class="span-caret position-absolute" ><i class="bi bi-caret-right-fill"></i></span></a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <!-- Right -->
            <div class="col-10 p-0">
                <div class="header d-flex justify-content-between ">
                    <div id="title" class="title"> <span><i class="bi bi-list"></i></span> Users </div>
                    <div class="search">ádsadasdsad</div>
                </div>
            </div>
        </div>

    </div>
    <script>
        const nameLink = document.querySelectorAll('#menu-item');
        const title = document.querySelector("#title");
        nameLink.forEach(link => {
            link.addEventListener('click', (e) => {
                const titleContent = e.target.textContent;
                title.innerHTML = `<span><i class="bi bi-list"></i></span> ${titleContent}`;
            })
        })
    </script>
</body>
</html>