<section class="row">
    <div class="col">
        <form action="" method="post">
            <label for="name"><?=translate('student-name')?></label>
            <input
                    id="name"
                    type="text"
                    class="form-control mb-3"
                    name="name"
                    placeholder="<?=translate('input-type-here')?>"
            >

            <label for="cpf"><?=translate('student-cpf')?></label>
            <input
                    id="cpf"
                    type="text"
                    class="form-control mb-3"
                    name="cpf"
                    placeholder="<?=translate('input-type-here')?>"
            >

            <label for="email"><?=translate('student-email')?></label>
            <input
                    id="email"
                    type="text"
                    class="form-control mb-3"
                    name="email"
                    placeholder="<?=translate('input-type-here')?>"
            >

            <button class="btn btn-outline-dark w-100 mt-3">
                <?=translate('text-confirm')?>
            </button>
        </form>
    </div>
</section>