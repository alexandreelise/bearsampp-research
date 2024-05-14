/*
 * Copyright (c) 2021-2021-2024 Bearsampp
 * License:  GNU General Public License version 3 or later; see LICENSE.txt
 * Author: bear
 * Website: https://bearsampp.com
 * Github: https://github.com/Bearsampp
 */

$(document).ready(function() {
  if ($('a[name=filezilla]').length) {
    $.ajax({
      data: {
        proc: 'filezilla'
      },
      success: function(data) {
        $('.filezilla-checkport').append(data.checkport);
        $('.filezilla-checkport').find('.loader').remove();

        $('.filezilla-version-list').append(data.versions);
        $('.filezilla-version-list').find('.loader').remove();
      }
    });
  }
});
