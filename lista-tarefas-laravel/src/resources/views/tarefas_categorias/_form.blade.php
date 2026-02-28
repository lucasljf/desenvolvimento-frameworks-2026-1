<div>
    <div>
        <label>Nome</label>
        <input name="nome" value="{{ old('nome', $categoria->nome ?? '') }}" maxlength="20" required>
        @error('nome') <div>{{ $message }}</div> @enderror
    </div>

    <div>
        <label>Cor (opcional)</label>
        <input type="color" name="cor" value="{{ old('cor', $categoria->cor ?? '#000000') }}">
        @error('cor') <div>{{ $message }}</div> @enderror
    </div>

    <div>
        <label>Descrição (opcional)</label>
        <textarea name="descricao" rows="4">{{ old('descricao', $categoria->descricao ?? '') }}</textarea>
        @error('descricao') <div>{{ $message }}</div> @enderror
    </div>
</div>
