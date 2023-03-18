function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
{
    $(document).ready(function() {
        $('#example').DataTable();
    });
}
{
    $(document).ready(function() {
        $('#example-2').DataTable();
    });
}
{
    var password = document.getElementById("password");
    function genPassword() {
        var chars = "0123456789abcdefghijklmnopqrstuvwxyz!@#$%^&*ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        var passwordLength = 8;
        var password = "";

        for (var i = 0; i <= passwordLength; i++){
            var randomNumber = Math.floor(Math.random() * chars.length);
            password += chars.substring(randomNumber, randomNumber +1);
        }
        document.getElementById("password").value = password;
    }
}
{
    function copy() {
    var copyText = document.getElementById("password");
        copyText.select();
        copyText.setSelectionRange(0,999);
        document.execCommand("copy");
    }
}
{
    $(document).ready(function() {
        $('.nwnp').mask("00.000.000.0-000.000");
        $('.hp').mask('0000-0000-0000');
        $('.nip').mask('00000000 000000 000');
    });
}
{
    function calday() {
        var d1 = document.getElementById("d1").value;
        var d2 = document.getElementById("d2").value;
        const dateOne = new Date(d1);
        const dateTwo = new Date(d2);

        const time = Math.abs(dateTwo - dateOne) + 1;
        const days = Math.ceil(time / (1000 * 60 * 60 * 24));
        document.getElementById("output").innerHTML = days;
    }
}
