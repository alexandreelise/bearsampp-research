<a class="anchor" name="nodejs"></a>
<div class="row-fluid">
  <div class="col-lg-12">
    <h1><img src="<?php echo $bearsamppHomepage->getResourcesPath() . '/img/nodejs.png'; ?>" /> <?php echo $bearsamppLang->getValue(Lang::NODEJS); ?> <small></small></h1>
  </div>
</div>
<div class="row-fluid">
  <div class="col-lg-6">
    <div class="list-group">
      <span class="list-group-item nodejs-status">
        <?php echo getLoaderHtml(); ?>
        <i class="fa-solid fa-server"></i> <?php echo $bearsamppLang->getValue(Lang::STATUS); ?>
      </span>
      <span class="list-group-item nodejs-versions">
              <span class="label-left col-1">
                <i class="fa-solid fa-code-merge"></i> <?php echo $bearsamppLang->getValue(Lang::VERSIONS); ?>
              </span>
              <span class="nodejs-version-list float-right col-11">
                <?php echo getLoaderHtml(); ?>
              </span>
      </span>
    </div>
  </div>
</div>
