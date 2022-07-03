<div class="d-flex active" id="spinner" style="transition: opacity .15s linear;">
    <div class="vstack gap-2 justify-content-center align-items-center" id="spinnerLoad">
        <div class="spinner-border text-light" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
        <strong class="text-light">Cargando...</strong>
    </div>
</div>
<footer class="d-flex flex-wrap justify-content-between align-items-center footer mt-auto p-3 bg-light" style="z-index: 1000" id="footer">
    <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <svg class="bi" width="30" height="24">
                <use xlink:href="#bootstrap" />
            </svg>
        </a>
        <span class="text-muted">&copy; 2021 Company, Inc</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                    <use xlink:href="#twitter" />
                </svg></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                    <use xlink:href="#instagram" />
                </svg></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                    <use xlink:href="#facebook" />
                </svg></a></li>
    </ul>
</footer>
</div>
<div class="overlay">
</div>

<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: Bootstrap Bundle with Popper -->

<script src="<?= assets(); ?>/plugins/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

<script src="<?= assets(); ?>/plugins/bootstrap/5.1.3/js/sidebars.js"></script>

<script src="<?= assets(); ?>/propio/js/dashboard.js"></script>


</body>

</html>