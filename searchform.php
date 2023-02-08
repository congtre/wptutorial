<?php
    $project_categories = get_terms(array( 
        'taxonomy' => 'project_cate',
        'hide_empty' => false,
    ));
?>
<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
    <ul class="c-search__tab">
        <li class="c-search__tab-item active js-searchTab" data-type="buy">Bán</li>
        <li class="c-search__tab-item js-searchTab" data-type="rent">Cho thuê</li>
    </ul>
    <div class="c-search__box">
        <div class="c-search__box-input">
            <div class="c-search__type">
                <span class="c-search__type-label js-searchSelectLabel">
                    <span class="c-search__type-label-icon">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px" viewBox="0,0,256,256"><g fill="#000000" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(4,4)"><path d="M32,9.00195c-0.77404,0 -1.54814,0.22285 -2.21875,0.66992l-24,16c-1.82743,1.21873 -2.32799,3.71829 -1.10937,5.54688c1.17398,1.7597 3.52289,2.25078 5.32813,1.19922v20.58203c0.00006,0.55226 0.44774,0.99994 1,1h10c0.36064,0.0051 0.69608,-0.18438 0.87789,-0.49587c0.18181,-0.3115 0.18181,-0.69676 0,-1.00825c-0.18181,-0.3115 -0.51725,-0.50097 -0.87789,-0.49587h-9v-21.39453c-0.00008,-0.36876 -0.20308,-0.70755 -0.5282,-0.88155c-0.32513,-0.174 -0.71962,-0.15497 -1.02649,0.04952l-1.33594,0.89062c-0.92822,0.61971 -2.15294,0.37538 -2.77344,-0.55469c-0.61939,-0.92942 -0.37388,-2.15417 0.55469,-2.77344l24,-16c0.67477,-0.44985 1.54398,-0.44985 2.21875,0l24,16c0.92857,0.61927 1.17407,1.84402 0.55469,2.77344c-0.38951,0.58426 -1.02031,0.89063 -1.66797,0.89063c-0.38202,0 -0.76169,-0.10653 -1.10547,-0.33594l-1.33594,-0.89062c-0.30687,-0.20449 -0.70136,-0.22352 -1.02649,-0.04952c-0.32513,0.174 -0.52812,0.51279 -0.5282,0.88155v21.39453h-25v-21h10v7.73242c-0.42301,-0.27989 -0.87454,-0.47956 -1.3457,-0.55273c-0.86793,-0.13479 -1.73915,0.04704 -2.43945,0.5293c-0.70031,0.48225 -1.21484,1.32635 -1.21484,2.29102c0,0.95706 0.51922,1.79167 1.2168,2.26758c0.69758,0.47591 1.56313,0.65833 2.42969,0.5293c0.47264,-0.07038 0.92831,-0.26762 1.35352,-0.54687v5.75c-0.0051,0.36064 0.18438,0.69608 0.49587,0.87789c0.3115,0.18181 0.69676,0.18181 1.00825,0c0.3115,-0.18181 0.50097,-0.51725 0.49587,-0.87789v-6c0,-0.75289 -0.12658,-1.41286 -0.32617,-2.00195c0.2001,-0.58727 0.32617,-1.24589 0.32617,-1.99805v-9c-0.00006,-0.55226 -0.44774,-0.99994 -1,-1h-12c-0.55226,0.00006 -0.99994,0.44774 -1,1v23c0.00006,0.55226 0.44774,0.99994 1,1h27c0.55226,-0.00006 0.99994,-0.44774 1,-1v-20.60547c0.62764,0.36653 1.30938,0.60547 1.99609,0.60547c1.29234,0 2.56554,-0.63151 3.33203,-1.78125c1.21861,-1.82858 0.71806,-4.32815 -1.10937,-5.54687l-24,-16c-0.67061,-0.44708 -1.44471,-0.66992 -2.21875,-0.66992zM35.0625,40.13867c0.09295,-0.00314 0.18769,0.00274 0.2832,0.01758c0.41618,0.06463 0.83557,0.3352 1.16211,0.84961c-0.32379,0.49844 -0.74026,0.75085 -1.1543,0.8125c-0.38345,0.05709 -0.76789,-0.03944 -1.00781,-0.20312c-0.23992,-0.16368 -0.3457,-0.32779 -0.3457,-0.61523c0,-0.31184 0.11046,-0.48119 0.34766,-0.64453c0.1779,-0.1225 0.43601,-0.20739 0.71484,-0.2168z"></path></g></g></svg>
                    </span>
                    <span class="c-search__type-label-text">Tất cả nhà đất</span>
                </span>
                <ul class="c-search__type-list js-searchSelectList">
                    <li class="c-search__type-item js-searchOption js-searchOptionAll" data-cate="all">
                        <span class="c-search__type-item-icon"></span>
                        <span class="c-search__type-item-text">Tất cả nhà đất</span>
                    </li>
                    <?php foreach($project_categories as $item) : ?>
                    <li class="c-search__type-item js-searchOption" data-cate="<?php echo $item->term_id; ?>">
                        <span class="c-search__type-item-icon"></span>
                        <span class="c-search__type-item-text"><?php echo $item->name; ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="c-search__input-control">
                <input type="text" name="s" id="keyword" class="c-search__input" placeholder="Tìm kiếm...">
            </div>
            <button type="submit" class="c-search__submit">Tìm kiếm</button>
        </div>
        <div class="c-search__box-filter">
            
        </div>
        <input type="hidden" name="type" value="buy">
        <input type="hidden" name="cate" value="all">
    </div>
</form>