{extends file="main.tpl"}

{block name=header}{$page_header}{/block}

{block name=main}

    <div class ="main">
            <form method="post" action="{$conf->action_root}calcProcess">
		<fieldset>
			<label for="Baza">Ilość bazy 0mg/ml</label>
			<input id="Baza" type="text" placeholder="ml" name="Baza" value="{$form->Baza}">
			<label for="IloscShota">Ilość Shota Nikotynowego</label>
			<input id="IloscShota" type="text" placeholder="ml" name="IloscShota" value="{$form->IloscShota}">
			<label for="MocShota">Moc Shota</label>
			<select id="MocShota" name="MocShota">
				<option value="0">0 mg/ml</option>
				<option value="6">6 mg/ml</option>
				<option value="12">12 mg/ml</option>
				<option value="18">18 mg/ml</option>
			</select>
			<button type="submit" class="button">Wylicz</button>
		</fieldset>
</form>
	{if $msgs->isError()}
            <h4>Wystąpiły błędy: </h4>
            <ol class="fit">
                {foreach $msgs->getErrors() as $fit}
                    {strip}
                        <li>{$fit}</li>
                    {/strip}
                {/foreach}
            </ol>
		
	{/if}
        <div class ='fit'>
	{if isset($wynik->wynik)}
		<h4>Wynik: </hr>
		<p>Wychodzi ci {$wynik->IloscLiquidu} ml liquidu o stęzeniu nikotynowym {$wynik->wynik} mg/ml</p>
	{/if}
        	
        </div>
        </div>
{/block}

{block name=footer}Filip Stasiak{/block}