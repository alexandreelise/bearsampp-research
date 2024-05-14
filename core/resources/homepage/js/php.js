/*
 * Copyright (c) 2021-2021-2024 Bearsampp
 * License:  GNU General Public License version 3 or later; see LICENSE.txt
 * Author: bear
 * Website: https://bearsampp.com
 * Github: https://github.com/Bearsampp
 */

$(document).ready(function() {
  if ($('a[name=php]').length) {
    $.ajax({
      data: {
        proc: 'php'
      },
      success: function(data) {
        $('.php-status').append(data.status);
        $('.php-status').find('.loader').remove();

        $('.php-version-list').append(data.versions);
        $('.php-version-list').find('.loader').remove();

        $('.php-extscount').append(data.extscount);
        $('.php-extscount').find('.loader').remove();

        $('.php-pearversion').append(data.pearversion);
        $('.php-pearversion').find('.loader').remove();

        $('.php-extslist').append(data.extslist);
        $('.php-extslist').find('.loader').remove();
      }
    });
  }
});
