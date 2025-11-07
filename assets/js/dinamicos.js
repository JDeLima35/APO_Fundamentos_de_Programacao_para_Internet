$(function () {
    $('#addExp').click(function () {
        $('#experiencias').append(`
            <div class="border p-3 rounded mt-2">
                <input class="form-control mb-2" type="text" name="empresa[]" placeholder="Empresa">
                <input class="form-control mb-2" type="text" name="cargo[]" placeholder="Cargo">
                <input class="form-control mb-2" type="text" name="periodo[]" placeholder="Período">
                <textarea class="form-control" name="atividade[]" placeholder="Atividades"></textarea>
            </div>
        `);
    });

    $('#addForm').click(function () {
        $('#formacoes').append(`
            <div class="border p-3 rounded mt-2">
                <input class="form-control mb-2" type="text" name="curso[]" placeholder="Curso">
                <input class="form-control mb-2" type="text" name="instituicao[]" placeholder="Instituição">
                <input class="form-control mb-2" type="text" name="ano[]" placeholder="Ano de Conclusão">
            </div>
        `);
    });
});
