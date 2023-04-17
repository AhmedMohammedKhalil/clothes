<form wire:submit.prevent='makeSearch'>
    <div class="pt-col">
        <input type="text" wire:model.lazy='search' name="search" class="pt-search-input"
            placeholder="ابحث عن ملابس ....">
        <button class="pt-btn-search" type="submit">
            <svg width="24" height="24" viewBox="0 0 24 24">
                <use xlink:href="#icon-search"></use>
            </svg>
        </button>
    </div>
    <div class="pt-col">
        <button class="pt-btn-close">
            <svg width="16" height="16" viewBox="0 0 16 16">
                <use xlink:href="#icon-close"></use>
            </svg>
        </button>
    </div>
    <div class="pt-info-text">
        ابحث عن ملابس  ؟
    </div>
    <div class="search-results"></div>
</form>
