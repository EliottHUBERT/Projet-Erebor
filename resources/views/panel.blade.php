<div style="background-color: #3d3d3d; height: calc(100vh - 3.5rem); max-width: 15%; border-top-right-radius: 15px;">
    <?php
        use App\Models\User;
        session_start();
        $user = new User;
        $user = $_SESSION['user'];
        ?>
        <div class="">
            <p style="color: white">Utilisateur connecté: {{$user->login}}</p>
        </div>

</div>

