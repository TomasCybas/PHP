<?php
require_once 'db_connect.php';

$students = $conn -> query("SELECT * FROM students") -> fetch_all(MYSQLI_ASSOC);
$courses = $conn -> query("SELECT * FROM courses") -> fetch_all(MYSQLI_ASSOC);
?>


<!doctype html>
<html lang="en">
<head>
    <title>Pažymių knygelė</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">

</head>
<section class="container-fluid bg-light">
    <header class="container bg-light">
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
                    aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Studentų sąrašas <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kursų sąrašas</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <section class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">
                            Studentai
                        </h6>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success my-3" data-toggle="modal" data-target="#add_student">
                            Pridėti studentą
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="add_student" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                             aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                           <form action="add_student.php" method="post">
                                               <div class="form-group">
                                                   <label for="name">Vardas</label>
                                                   <input id="name" class="form-control" type="text" name="name" placeholder="Įveskite studento vardą" required>
                                               </div>
                                               <div class="form-group">
                                                   <label for="surname">Pavardė</label>
                                                   <input id="surname" class="form-control" type="text" name="surname" placeholder="Įveskite studento pavardę" required>
                                               </div>
                                               <div class="form-group">
                                                   <label for="course">Kursas</label>
                                                   <select id="course" class="custom-select" required>
                                                       <option selected>Pasirinkite kursą</option>
                                                       <?php foreach ($courses as $course) { ?>
                                                       <option value="<?=$course['id'] ?>"><?=$course['name']?></option>
                                                       <?php } ?>
                                                   </select>
                                               </div>

                                           </form>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Atšaukti
                                        </button>
                                        <button type="submit" class="btn btn-primary">Išsaugoti</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            $('#exampleModal').on('show.bs.modal', event => {
                                var button = $(event.relatedTarget);
                                var modal = $(this);
                                // Use above variables to manipulate the DOM

                            });
                        </script>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Vardas</th>
                                <th>Pavardė</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($students as $student){ ?>
                            <tr>
                                <td><?=$student['name']?></td>
                                <td><?=$student['surname']?></td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>

                    </div>

                </div>

            </div>

        </div>

    </section>

</section>
<body>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

</body>
</html>
