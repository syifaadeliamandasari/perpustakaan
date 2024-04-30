<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Container Example</title>
<style>
.container {
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25),0 10px 10px rgba(0,0,0,0.22);
    position: relative;
    overflow: hidden;
    width: 768px;
    max-width: 100%;
    min-height: 480px;
    margin-top: 7%;
    margin-left: 24%;
    display: flex;
}

.right-half {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}

.image {
    width: 110%;
    margin-left: 20px;
}

.input {
    flex: 1;
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.text {
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 24px;
    margin-bottom: 10px;
}

.instruction-text {
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-size: 16px;
    margin-bottom: 20px;
}

input {
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
}

a.button {
    text-decoration: none;
    padding: 12px 40px;
    margin-top: 2%;
    border: none;
    border-radius: 20px;
    background-color: #bed7dc;
    color: #000000;
    cursor: pointer;
    font-size: 16px;
    text-align: center;
}

.email{
    width: 330px;
}

.modal {
    position: fixed;
    inset: 0;
    background: rgba(255, 255, 255, 0.7);
    display: none;
    align-items: center;
    justify-content: center;
}

.content {
    position: relative;
    background: white;
    padding: 1em 2em;
    border-radius: 4px;
}

.modal:target {
    display: flex;
}

.kembali{
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size: 15px;
    margin-left: 150px;
    margin-top: 6%;
}

.login{
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    color: #000000;
    font-size: 15px;
    margin-top: 4%;
    color: #3d656d;
}
</style>
</head>
<body>

<div class="container">
    <div class="right-half">
        <img class="image" src="{{ asset('images/forgotpw.png') }}">
    </div>
    <div class="input">
        <div class="content">
            <h1 class="text">Forgot Password</h1>
            <h3 class="instruction-text">Kami akan mengirimkan tautan ke email Anda. Silakan periksa email Anda untuk memperbarui password Anda.</h3>
            <input class="email" type="email" placeholder="Email"/>
        </div>
        <a href="#popup-box" class="button" >Change Password</a>
        <div id="popup-box" class="modal">
            <div class="content">
                <h1 style="color: #69888e">Check your email!</h1>
                <p>link reset password sudah dikirim ke starlearn@gmail.com</p>
                <a href="#" style="position: absolute; top: 10px; right: 10px; color: #fe0606; font-size: 30px; text-decoration: none;">&times;</a>
            </div>
        </div>
        <div style="display: flex; align-items: center; margin-top: 20px;">
            <h1 class="kembali">Back to</h1>
            <a href="{{ route('login') }}" class="login" style="text-decoration: none;">Login</a>
        </div>
    </div>
</div>


</body>
</html>
