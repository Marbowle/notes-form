<div>
    <h3>Nowa notatka</h3>
        <div>
            <?php dump($params) ?>
            <form action="./?action=create" class="note-form" method="post">
                <ul>
                    <li>
                        <label>Tytuł  <span class="required">*</span></label>
                        <input type="text" name="title" class="field-long"/>
                    </li>
                    <li>
                        <label>Treść</label>
                        <textarea name="despription" id="field5" class="field-long field-textarea"></textarea>
                    </li>
                    <li>
                        <input type="submit" value="Submit"/>
                    </li>
                </ul>
            </form>
        </div>
</div>