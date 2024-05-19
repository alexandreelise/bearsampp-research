<a class="anchor" name="postgresql"></a>
<div class="row-fluid">
  <div class="col-lg-12">
    <h1><img src="<?php echo $bearsamppHomepage->getResourcesPath() . '/img/postgresql.png'; ?>" /> <?php echo $bearsamppLang->getValue(Lang::POSTGRESQL); ?> <small></small></h1>
  </div>
</div>
<div class="row-fluid">
  <div class="col-lg-6">
    <div class="list-group">
      <span class="list-group-item postgresql-checkport">
        <?php echo getLoaderHtml(); ?>
        <i class="fa-solid fa-server"></i> <?php echo $bearsamppLang->getValue(Lang::STATUS); ?>
      </span>
      <span class="list-group-item postgresql-versions">
              <span class="label-left col-1">
                <i class="fa-solid fa-code-merge"></i> <?php echo $bearsamppLang->getValue(Lang::VERSIONS); ?>
              </span>
              <span class="postgresql-version-list float-right col-11">
                <?php echo getLoaderHtml(); ?>
              </span>
      </span>
    </div>
  </div>
</div>
