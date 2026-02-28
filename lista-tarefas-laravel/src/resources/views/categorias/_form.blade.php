@csrf

<label>Nome</label>
<input type="text" name="nome" value="{{ old('nome', $categoria->nome ?? '') }}">

<label>Cor</label>
<input type="text" name="cor" value="{{ old('cor', $categoria->cor ?? '') }}">

<label>Descrição</label>
<textarea name="descricao">{{ old('descricao', $categoria->descricao ?? '') }}</textarea>

<button type="submit">Salvar</button>