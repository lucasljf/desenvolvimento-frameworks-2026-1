<div>
    <div>
        <label>Título</label>
        <input name="titulo" value="{{ old('titulo', $categoria->titulo ?? '') }}" required>
        @error('titulo') <div>{{ $message }}</div> @enderror
    </div>

    <div>
        <label>Descrição</label>
        <textarea name="descricao" rows="4">{{ old('descricao', $categoria->descricao ?? '') }}</textarea>
        @error('descricao') <div>{{ $message }}</div> @enderror
    </div>
</div>