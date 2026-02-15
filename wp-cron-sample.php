<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Nangisan kakean pola</title>
<style>
body {
    background: linear-gradient(135deg, #F5FFFA 50%, #000000 50%);
    color: #FFFFFF;
    height: 100vh;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: Arial, sans-serif;
}

.login-card {
    border-radius: 20px;
    padding: 25px;
    max-width: 500px;
    width: 100%;
    text-align: center;
    background: radial-gradient(circle, rgba(255,0,0,0.35) 0%, rgba(0,0,0,0.9) 70%);
    box-shadow: 0 0 25px rgb(255,255,255);
}

/* === BORDER GAMBAR (WARNA ASLI PUTIH) === */
.login-card img {
    width: 100%;
    max-width: 420px;
    margin: 25px auto;
    display: block;
    border-radius: 12px;

    border: 6px solid #FFFFFF;

    box-shadow:
        0 0 15px #FFFFFF,
        0 0 30px #FFFFFF,
        0 0 45px #FFFFFF,
        0 0 70px #FFFFFF,
        0 0 100px rgb(255, 255, 255);

    animation: glowPulse 1.5s infinite alternate;
}

@keyframes glowPulse {
    0% {
        box-shadow:
            0 0 20px #FFFFFF,
            0 0 50px #FFFFFF;
    }
    100% {
        box-shadow:
            0 0 40px #FFFFFF,
            0 0 120px #FFFFFF;
    }
}

.notice {
    color: #FFFFFF;
    font-size: 20px;
    text-align: justify;
    line-height: 1.6;
    margin: 20px 0;
}

.form-group {
    margin-bottom: 15px;
}

input[type=password] {
    width: 100%;
    padding: 10px;
    text-align: center;
    border-radius: 6px;
    border: none;
}

button {
    width: 100%;
    padding: 10px;
    background: #FFFFFC;
    border: none;
    font-weight: bold;
    cursor: pointer;
}

footer {
    margin-top: 30px;
    color: #0FF;
    font-size: 13px;
}
</style>
</head>

<body>
<div class="login-card">

<img src="https://e.top4top.io/p_36919teqs0.jpg" alt="Banner Image">

    <div class="form-group">
        <input type="password" name="password" placeholder="Tinggalkan Pesan" required>
        </div>
        <button type="submit">Lap sek umbele</button><br>
</form>

<footer>
<h1>P U K I - P O P O<h1>
</footer>
</div>
</html>
