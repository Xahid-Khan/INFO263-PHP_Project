<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employer Rankings</title>
    <link rel="icon" href="img/search-heart.svg" />
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div id="page-container">
        <!--Navigation bar-->
        <?php include "fragments/navbar.php" ?><br>
        <div id="content-wrap" action="employer_rankings.php">
            <?php include "get_ranking_data.php";?>
            <h1 class="text-center">Employer Ratings</h1> <br>
            <div class="col d-flex justify-content-center">
                <div class="card justify-content-center" style="border: none">
                    <div class="card-body" style="">
                        <form id="search-form">
                            <table>
                                <tbody>
                                    <tr>
                                        <td style="padding-left: 10px">
                                            <input class="form-control" type="text" placeholder="Search" name="company-name">
                                        </td>
                                        <td style="padding-left: 10px">
                                            <select class="form-select" name="filter-option">
                                                <option>Company Name DESC</option>
                                                <option>Company Name ASC</option>
                                            </select>
                                        </td>
                                        <td style="padding-left: 10px">
                                            <button class="btn btn-primary">Filter</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
                <?php
                $totalNumberOfPages = getNumberOfPages();
                $index = $_GET['offset'] ?? 0;

                if ($index < 0 || $index > $totalNumberOfPages) {
                    echo "<hr/><h1 style='text-align: center'>NO RECORDS FOUND</h1>";
                } else {
                    getPaginatedData($index);
                }
                ?>
            <div>
                <?php if($index >= 0 && $index <= $totalNumberOfPages): ?>
                    <nav aria-label="Page navigation example mt-5">`
                        <ul class="pagination justify-content-center">
                            <li class="page-item <?php if($index <= 1){ echo 'disabled'; } ?>">
                                <a class="page-link"
                                   href="employer_rankings.php?offset=<?php if($index <= 1){ echo $index; } else { echo $index-1; } ?>">Previous</a>
                            </li>
                            <?php for($i = 1; $i <= $totalNumberOfPages; $i++ ): ?>
                                <li class="page-item <?php if($index == $i) {echo 'active'; } ?>">
                                    <a class="page-link" href="employer_rankings.php?offset=<?= $i; ?>"> <?= $i; ?> </a>
                                </li>
                            <?php endfor; ?>
                            <li class="page-item <?php if($index >= $totalNumberOfPages) { echo 'disabled'; } ?>">
                                <a class="page-link"
                                   href="employer_rankings.php?offset=<?php if($index >= $totalNumberOfPages){ echo $index; } else {echo $index+1; } ?>">Next</a>
                            </li>
                        </ul>
                    </nav>
                <?php endif; ?>
            </div>
        </div><br><br><br>
                <?php include "fragments/footer.php"?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
