<div>
    <div>
        <label>Nome</label>
        <input name="nome" value="{{ old('nome', $categoria->nome ?? '') }}" required>
        @error('nome') <div>{{ $message }}</div> @enderror
    </div>

    <div>
        <label>Cor (opcional)</label>
        <input name="cor" type="text" maxlength="20" value="{{ old('cor', $categoria->cor ?? '') }}" placeholder="Ex: #FF5733 ou red">
        @error('cor') <div>{{ $message }}</div> @enderror
    </div>

    <div>
        <label>Descrição (opcional)</label>
        <textarea name="descricao" rows="4">{{ old('descricao', $categoria->descricao ?? '') }}</textarea>
        @error('descricao') <div>{{ $message }}</div> @enderror
    </div>
</div>
