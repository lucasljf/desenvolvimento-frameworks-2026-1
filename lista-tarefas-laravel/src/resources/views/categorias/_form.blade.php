<div>
    <div>
        <label>Nome</label>
        <input name="nome" value="{{ old('nome', $categoria->nome ?? '') }}" required>
        @error('nome') <div>{{ $message }}</div> @enderror
    </div>

    <div>
        <label>Cor (hex)</label>
        <div style="display:flex;gap:8px;align-items:center;">
            <input type="color" id="cor_picker" value="{{ old('cor', $categoria->cor ?? '#000000') }}">
            <input type="text" name="cor" id="cor_text" value="{{ old('cor', $categoria->cor ?? '') }}" maxlength="20" placeholder="#rrggbb ou nome">
        </div>
        @error('cor') <div>{{ $message }}</div> @enderror
    </div>

    <div>
        <label>Descrição</label>
        <textarea name="descricao" rows="4">{{ old('descricao', $categoria->descricao ?? '') }}</textarea>
        @error('descricao') <div>{{ $message }}</div> @enderror
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var picker = document.getElementById('cor_picker');
    var text = document.getElementById('cor_text');
    if (!picker || !text) return;

    // initialize text if empty
    if (!text.value) text.value = picker.value;

    // picker -> text
    picker.addEventListener('input', function () { text.value = picker.value; });

    // text -> picker when valid hex
    text.addEventListener('input', function () {
        var v = text.value.trim();
        if (/^#([0-9a-fA-F]{6})$/.test(v)) {
            try { picker.value = v; } catch (e) { }
        }
    });
});
</script>
