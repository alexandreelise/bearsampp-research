<a class="anchor" name="php"></a>
<div class="row-fluid">
    <div class="col-lg-12">
        <h1>
            <img src="<?php echo $bearsamppHomepage->getResourcesPath() . '/img/php.png'; ?>" alt="PHP Logo">
            <?php echo $bearsamppLang->getValue(Lang::PHP); ?>
            <small></small>
        </h1>
    </div>
</div>
<div class="row-fluid">
    <div class="col-lg-6">
        <div class="list-group">
            <span class="list-group-item php-status">
                <span class="loader float-end">
                    <img src="<?php echo $bearsamppHomepage->getResourcesPath() . '<?php echo getLoaderHtml(); ?>'; ?>" alt="Loader">
                </span>
                <i class="fa-solid fa-server"></i> <?php echo $bearsamppLang->getValue(Lang::STATUS); ?>
            </span>
            <span class="list-group-item php-versions col-12">
                <span class="label-left col-1">
                    <i class="fa-solid fa-code-merge"></i>
                    <?php echo $bearsamppLang->getValue(Lang::VERSIONS); ?>
                </span>
                <span class="php-version-list float-right col-11">
                    <span class="loader float-end">
                        <img src="<?php echo $bearsamppHomepage->getResourcesPath() . '<?php echo getLoaderHtml(); ?>'; ?>" alt="Loader">
                    </span>
                </span>
            </span>
            <span class="list-group-item php-extscount">
                <span class="loader float-end">
                    <img src="<?php echo $bearsamppHomepage->getResourcesPath() . '<?php echo getLoaderHtml(); ?>'; ?>" alt="Loader">
                </span>
                <i class="fa-regular fa-file-code"></i>
                <?php echo $bearsamppLang->getValue(Lang::EXTENSIONS); ?>
            </span>
            <span class="list-group-item php-pearversion">
                <span class="loader float-end">
                    <img src="<?php echo $bearsamppHomepage->getResourcesPath() . '<?php echo getLoaderHtml(); ?>'; ?>" alt="Loader">
                </span>
                <img style="height: 1.25em;" src = "<?php echo $bearsamppHomepage->getResourcesPath() . '/img/icons/pear-icon.gif'; ?>" alt = 'Pear'>
                <?php echo $bearsamppLang->getValue(Lang::PEAR); ?>
            </span>
            <span class="list-group-item">
                <i class = 'fa-solid fa-circle-info'></i>
                <a href="<?php echo $bearsamppHomepage->getPageQuery(Homepage::PAGE_PHPINFO); ?>">
                    <?php echo $bearsamppLang->getValue(Lang::HOMEPAGE_PHPINFO_TEXT); ?>
                </a>
            </span>
            <?php if (function_exists('apc_add') && function_exists('apc_exists')) { ?>
                <span class="list-group-item">
                    <i class = 'fa-solid fa-circle-info'></i>
                    <a href="<?php echo $bearsamppHomepage->getPageQuery(Homepage::PAGE_STDL_APC); ?>" target="_blank">
                        <?php echo $bearsamppLang->getValue(Lang::HOMEPAGE_APC_TEXT); ?>
                    </a>
                </span>
            <?php } ?>
        </div>
    </div>
</div>
<div class="border grid-list mt-3">
    <div class="row-fluid mt-2">
        <div class="col-lg-12 section-header">
            <h3>
                <i class="fa-regular fa-file-code"></i>
                <?php echo $bearsamppLang->getValue(Lang::EXTENSIONS); ?>
            </h3>
        </div>
    </div>
    <div class="row-fluid">
        <div class="col-lg-12 php-extslist d-flex flex-wrap mb-2">
            <span class="loader">
                <img src="<?php echo $bearsamppHomepage->getResourcesPath() . '<?php echo getLoaderHtml(); ?>'; ?>" alt="Loader">
            </span>
        </div>
    </div>
</div>
