<!-- View File (career_list.php) -->

<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", ['title' => 'Career']) ?>
    <link href="<?= base_url('/libs/simple-datatables/style.css') ?>" rel="stylesheet" type="text/css" />
    <?= $this->include('partials/head-css') ?>
    <script>
       
    </script>
</head>

<body>
    <!-- Top Bar Start -->
    <?= $this->include('partials/topbar') ?>
    <!-- Top Bar End -->

    <!-- Leftbar Start -->
    <?= $this->include('partials/startbar') ?>
    <!-- Leftbar End -->

    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="page-content">
            <div class="container-xxl">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Career Listings</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="formFields row w100 m-0">
                                    <!-- Display Success Message -->
                                    <?php if (session()->getFlashdata('success')): ?>
                                    <div id="success-alert" class="alert alert-success">
                                        <?= session()->getFlashdata('success') ?>
                                    </div>
                                    <?php endif; ?>

                                    <!-- Display Error Message -->
                                    <?php if (session()->getFlashdata('error')): ?>
                                    <div id="danger-alert" class="alert alert-danger">
                                        <?= session()->getFlashdata('error') ?>
                                    </div>
                                    <?php endif; ?>

                                    <!-- Display Validation Errors -->
                                    <?php if (session()->getFlashdata('errors')): ?>
                                    <div id="danger-alert" class="alert alert-danger">
                                        <ul>
                                            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                            <li><?= esc($error) ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    <?php endif; ?>

                                    <div class="d-flex flex-wrap exportCsv mb-3 gap-2 mt-2">
                                        <a href="<?= base_url('adm1n/career/add') ?>" class="btn btn-sm bg-colour">Add
                                            Job</a>
                                        <a href="<?= base_url('adm1n/career/export') ?>"
                                            class="btn btn-sm bg-colour exportCsv">Export CSV</a>
                                    </div>
                                    <div class="d-flex flex-wrap exportCsv gap-2 mt-2">
                                        <div class="d-flex pagination">
                                            <select id="rowsPerPage" class="form-select w_100">
                                                <option value="10"selected>10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                            </select>
                                            <label for="rowsPerPage">Rows per page</label>

                                        </div>
                                        <div class="d-flex justify-align-centre align-item-centre">search: 
                                            <input type="text" id="search-box" class="form-control p-0 m-0">
                                        </div>
                                    </div>

                                    <!-- Career Table -->
                                    <div class="table-responsive">
                                        <table class="table datatable table-striped mb-0" id="datatable_2">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Job Title</th>
                                                    <th>Job Type</th>
                                                    <th>Employment Type</th>
                                                    <th>Location</th>
                                                    <th>Posted On</th>
                                                    <th>Last Applied Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                    <div id="pagination-controls" class="mt-3">
                                        <button id="prev-page" class="btn btn-secondary" disabled>Previous</button>
                                        <span id="page-info"></span>
                                        <button id="next-page" class="btn btn-secondary">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?= $this->include('partials/footer') ?>
                </div>
            </div>
        </div>

        <!-- Javascript -->
        <?= $this->include('partials/vendorjs') ?>
        <script src="<?= base_url('/libs/simple-datatables/umd/simple-datatables.js') ?>"></script>
        <script src="<?= base_url('/js/app.js') ?>"></script>

        <script>
        let currentPage = 1;
        let rowsPerPage = 10;

        document.addEventListener("DOMContentLoaded", function() {
            fetchCareers();

            document.getElementById('prev-page').addEventListener('click', function() {
                if (currentPage > 1) {
                    currentPage--;
                    fetchCareers();
                }
            });

            document.getElementById('next-page').addEventListener('click', function() {
                currentPage++;
                fetchCareers();
            });

            document.getElementById('rowsPerPage').addEventListener('change', function() {
                rowsPerPage = this.value;
                currentPage = 1;
                fetchCareers();
            });

            document.getElementById('search-box').addEventListener('input', function() {
                currentPage = 1;
                fetchCareers(this.value);
            });
        });

        function fetchCareers(searchTerm = '') {
            const url = '<?= base_url("adm1n/career/getCareers") ?>' +
                `?search=${encodeURIComponent(searchTerm)}&page=${currentPage}&rowsPerPage=${rowsPerPage}`;
            fetch(url)
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    handleLoad(data);
                })
                .catch(error => console.error('Error fetching careers:', error));
        }

        function handleLoad(response) {
            const tableBody = document.querySelector("#datatable_2 tbody");
            const paginationControls = document.getElementById('pagination-controls');
            tableBody.innerHTML = "";

            if (response.data && response.data.length > 0) {
                response.data.forEach((item) => {
                    tableBody.innerHTML += `
        <tr>
            <td>${item[0]}</td>
            <td>${item[1]}</td>
            <td>${item[2]}</td>
            <td>${item[3]}</td>
            <td>${item[4]}</td>
            <td>${item[5]}</td>
            <td>${item[6]}</td>
            <td>${item[7]}</td>
        </tr>`;
                });

                document.getElementById('page-info').innerText = `Page ${currentPage}`;
                document.getElementById('prev-page').disabled = currentPage === 1;
                document.getElementById('next-page').disabled = currentPage === response.totalPages;
            } else {
                tableBody.innerHTML = `<tr><td colspan="8">No records found</td></tr>`;
                paginationControls.style.display = 'none';
            }
        }

        document.querySelector('.exportCsv').addEventListener('click', function() {
            dataTable.export({
                type: "csv",
                download: true,
                filename: "career_list.csv"
            });
        });
        </script>
</body>

</html>