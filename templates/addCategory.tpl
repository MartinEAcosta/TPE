{{if isset($smarty.session.IS_LOGGED)}}
{include file="header.tpl"}
<form method="POST" action="addcategory">
<div class="form-group">
    <label for="categoria">Ingrese una nueva categoria</label>
    <input type="text" required class="form-control" name="c_name" placeholder="Por ej: Notebooks.">
</div>
<button type="submit" class="btn btn-primary mt-3">Enviar</button>
</form>
<div>
<h1 class="text-center">En caso de que la categoria contenga productos asociados no se podra eliminar.</h1>
<table class='table'>
    <thead>
        <tr>    
            <th>Lista de categorias</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
    {foreach from=$categories item=$category}
    <tr>
        <td>{$category->c_name}</td>
        <td><a href="editformcategory/{$category->id_category}">Editar</a></td>
        <td><a href="deletecategory/{$category->id_category}">Eliminar</a></td>
    </tr>
    {/foreach}

    
{include file="footer.tpl"}
{{/if}}