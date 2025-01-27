<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg rounded">
                    <div class="card-header bg-primary text-white text-center">
                        <h3>Add User</h3>
                    </div>
                    <div class="card-body">
                        <?php echo form_open('users/create', ['class' => 'needs-validation', 'novalidate' => ''])?>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name:</label>
                                <input
                                    type="text"
                                    name="name"
                                    id="name"
                                    class="form-control <?php echo form_error('name') ? 'is-invalid' : ''?>"
                                    value="<?php echo set_value('name')?>"
                                    required
                                >
                                <div class="invalid-feedback">
                                    Please provide a valid name.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    class="form-control <?php echo form_error('email') ? 'is-invalid' : ''?>"
                                    value="<?php echo set_value('email')?>"
                                    required
                                >
                                <div class="invalid-feedback">
                                    Please provide a valid email address.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone:</label>
                                <input
                                    type="text"
                                    name="phone"
                                    id="phone"
                                    class="form-control <?php echo form_error('phone') ? 'is-invalid' : ''?>"
                                    value="<?php echo set_value('phone')?>"
                                    required
                                >
                                <div class="invalid-feedback">
                                    Please provide a valid phone number.
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Save</button>
                        <?php echo form_close()?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS (Optional, for validation) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Bootstrap form validation
        (function () {
            'use strict';
            var forms = document.querySelectorAll('.needs-validation');
            Array.prototype.slice.call(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script>
</body>
</html>
