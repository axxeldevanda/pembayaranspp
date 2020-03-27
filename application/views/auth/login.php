<div class="col-md-4 offset-md-4">
    <h1 class="text-center mt-3">Login</h1>


    <form action="" method="POST" action="<?= base_url('auth') ?>">
        <div class="form-group">
            <label class="label_form"><b>Username</b></label>
            <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" required>

        </div>
        <div class=" form-group">
            <label class="label_form"><b>Password</b></label>
            <input type="password" class=" form-control" id="password" name="password" placeholder="Password" required>


        </div>
        <button type="submit" name="masuk" class="btn btn-primary btn-block">Login</button>
        <hr>
        <div class="text-center">
            <a href="<?= base_url('auth/register'); ?>">Buat Akun</a>
        </div>
    </form>
</div>
</div>