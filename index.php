<?php include('layouts/header.php'); ?>

<div class="container mt-4" style="background-color: #7B7B7B;">
    <h1 style="color: #FFDF7E;">Qual é o seu signo?</h1>

    <form id="signo-form" method="POST" action="show_zodiac_sign.php">
        <div class="mb-3">
            <label for="data_nascimento" class="form-label" style= "color: #FFDF7E">Informe sua data de nascimento</label> <br>
            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" placeholder="Ex.: 13/06/1965" required style="background-color: #DECCF8">
        </div>
        <div class="text-center">
    <button type="submit" class="btn" style="color: #FFDF7E; border-radius: 25px;">Ver meu signo</button>
</div>

    </form>
</div>

<?php include('layouts/footer.php'); ?>