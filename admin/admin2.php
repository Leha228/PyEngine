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
                        <th scope="col">Email</th>
                        <th scope="col">Сообщение</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        </tr>
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