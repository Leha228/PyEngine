<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <style>
            @media (min-width: 768px) {
                .navbar-container {
                    position: sticky;
                    top: 0;
                    overflow-y: auto;
                    height: 100vh;
                }

                .navbar-container .navbar {
                    align-items: flex-start;
                    justify-content: flex-start;
                    flex-wrap: nowrap;
                    flex-direction: column;
                    height: 100%;
                }

                .navbar-container .navbar-collapse {
                    align-items: flex-start;
                }

                .navbar-container .nav {
                    flex-direction: column;
                    flex-wrap: nowrap;
                }

                .navbar-container .navbar-nav {
                    flex-direction: column !important;
                }
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-lg-3 navbar-container bg-light">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="../index.php">Назад</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbar">
                            <!-- Вертикальное меню -->
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="admin1.php">Данные о звонках</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="admin2.php">Вопрос-ответ</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-md-8 col-lg-9 content-container">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Имя</th>
                        <th scope="col">Номер</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                            require_once '../inc/connect.php';
                            $result=mysqli_query($connect,"SELECT * FROM `callOrder`"); 
                            $th = 1;
                            while($row=mysqli_fetch_array($result))
                            {
                                echo '<tr><th scope="row">'.$th.'</th><td>'.$row['name'].'</td><td>'.$row['phone'].'</td></tr>';
                                $th++;
                            }
                       ?>
                    </tbody>
                    </table>
                    </tbody>
                </table>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="js/bootstrap.min.js"></script>

    </body>

</html>