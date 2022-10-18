{{if isset($smarty.session.IS_LOGGED)}}
{include file="header.tpl"}
    {foreach from=$toUpdate item=$category}
    <form class="row g-3" action="editcategory/{$category->id_category}" method="POST">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Categoria</label>
          <input name="c_name" value="{$category->c_name}" type="text" class="form-control" id="inputEmail4">
        </div>
      {break}
    {/foreach}
      <div class="col-12">
        <button type="sumbit "class="btn btn-primary">Editar</button>
      </div>
    </form>
{/if}
{include file="footer.tpl"}