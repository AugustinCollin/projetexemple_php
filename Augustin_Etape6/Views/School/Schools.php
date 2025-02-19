<slect name="option[]" id="option_select" multiple>
    <?php foreach ($options as $option) : ?>
        <option value="<?= $option->optionScolaireId ?>"><?= $option->nom ?></option>
    <?php endforeach ?>
</select>