<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form action="login.php" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input class="form-control" type="email" name="email" id="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input class="form-control" type="password" name="password" id="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>