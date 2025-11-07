$(document).ready(function () {
    $('#nascimento').on('change', function () {
        let nasc = new Date($(this).val());
        let hoje = new Date();
        let idade = hoje.getFullYear() - nasc.getFullYear();

        if (hoje.getMonth() < nasc.getMonth() || 
            (hoje.getMonth() === nasc.getMonth() && hoje.getDate() < nasc.getDate())) {
            idade--;
        }

        $('#idade').val(idade);
    });
});
